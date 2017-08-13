<?php
class Flores_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
        parent::__construct();
         $this->load->library('encrypt');
        $this->load->library('session');
    }
/////////////////////////////////////////////////////////////////////////////////////////////


   
     public function set_users()
    {
        $this->load->helper('url');
        ////metodo de encriptacion
        
        $encrypted_pass = $this->encrypt->encode($this->input->post('clave'));
        $data = array(
            'ci_usuario' => $this->input->post('cedula'),
            'nombres' => $this->input->post('nombres'),
            'num_telefono' => $this->input->post('num_telefono'),
            'direccion' => $this->input->post('direccion'),
            'correo' => $this->input->post('correo'),
            'clave' => $encrypted_pass,
            'apellidos' => $this->input->post('apellidos')
                      
        );
        return $this->db->insert('usuarios', $data);
    }

   public function comprobar($cedula,$clave)
    {
        $this->db->select('clave');
        $this->db->where('ci_usuario',$cedula);
        $query = $this->db->get('usuarios');
        $valor=$query->num_rows();
    
        if ($query->num_rows()==1) 
        {
            $consulta = $query->row();
            $encriptado = $consulta->clave;  
            $encrypted_string = $this->encrypt->decode($encriptado);
            
          if (strcmp($encrypted_string, $clave) === 0) 
          {
                return $query->result_array();
          }
         }
           
    }


    public function traerCompras($cedula)
    {
        $sql='SELECT fecha, nombre, nombre_dest, total from detalle_pedido, articulo where articulo.id_articulo = detalle_pedido.id_articulo and ci_usuario=?';
        $query=$this->db->  query($sql, array($cedula));
        return $query->result_array();
    }


        public function sesiones($ci)
    {
        $this->db->select('ci_usuario,nombres,num_telefono,direccion,correo,clave,apellidos');
        $this->db->where('ci_usuario',$ci);
        $query = $this->db->get('usuarios');
        if ($query->num_rows()==1) {
            $consulta = $query->row();
            $nombres = $consulta->nombres;
            $ci_usuario = $consulta->ci_usuario;
            $num_telefono = $consulta->num_telefono;
            $direccion = $consulta->direccion;
            $correo = $consulta->correo;
            $clave=$consulta->clave;
            $apellidos=$consulta->apellidos;

            $newdata = array(
            'ci'  => $ci_usuario,
            'nombres'     => $nombres,
            'num_telefono'     => $num_telefono,
            'direccion'     => $direccion,
            'correo'     => $correo,
            'clave'     => $clave,
            'apellidos'     => $apellidos,
            'logged_in' => TRUE
            );

            $this->session->set_userdata($newdata);
         }
    }

	
    //////////////////////////////////////////////////////////////////////////////////////




    public function get_flowersMG()
	{
		$sql='SELECT * from articulo where tipo = "Ramo"';
        $query=$this->db->  query($sql);
        return $query->result_array();
	}

    public function get_flowersID($id_articulo)
    {
        $sql='SELECT * from articulo where id_articulo=?';
        $query=$this->db->  query($sql, array($id_articulo));
        return $query->row_array();
    }

    public function get_flowersMF()
    {
        $sql='SELECT * from articulo where tipo = "Rosa"';
        $query=$this->db->  query($sql);
        return $query->result_array();
    }

    public function get_flowerOc($ocasion)
    {
        $sql='select distinct articulo.id_articulo, articulo.nombre,articulo.tipo,articulo.precio, articulo.descripcion from articulo,ocasionxarticulo,ocasion where ocasionxarticulo.id_ocasion=ocasion.id_ocasion and ocasionxarticulo.id_articulo=articulo.id_articulo and ocasion.nombre=?';
        $query=$this->db->  query($sql, array($ocasion));
        return $query->result_array();
    }

    public function florID($id){
        $this->db->select('nombre,precio');
        $this->db->where('id_articulo',$id);
        $query = $this->db->get('articulo');
        return $query->result_array();
    }

	/////////TRANSACCCIONES PARA LOS RAMOS/////////////////////
public function datosEnvio(){
        //$this->load->helper('url');
        $data = array(
            'idR' => $this->input->post('idR'),
            'nombreR' => $this->input->post('nombreR'),
            'precioR' => $this->input->post('precioR'),
            'fechaE' => $this->input->post('fechaR'),
            'horarioE' => $this->input->post('radioR'),
            'nombreE' => $this->input->post('nombreEnvioR'),
            'apellidoE' => $this->input->post('apellidoEnvioR'),
            'telefonoE' => $this->input->post('telefonoEnvioR'),
            'ciudadE' => $this->input->post('combobox'),
            'direccionE' => $this->input->post('direccionEnvioR'),
             'codigoPE' => $this->input->post('codpostalEnvioR'),
             'dedicatoriaE' => $this->input->post('dedicatoriaR')
        );
        $this->session->set_userdata($data);
        return $data;
    }

    public function datosEnvio_Tar(){
        //$this->load->helper('url');
        $data = array(
            'tarjeta' => $this->input->post('tarjetaP'),
            'cod_tar' => $this->input->post('codigoTP'),
            'mes_tar' => $this->input->post('mes'),
            'ano_tar' => $this->input->post('ano')
        );
        $this->session->set_userdata($data);
	
	$dataS = array(
            'transaccion_si'=> 'SI'
        );
        $this->session->set_userdata($dataS);
    }

    public function guardarArray($total,$cant){
        $datosT=array(
             'cantidadR' => $cant,
             'totalR' => $total
        );
        $this->session->set_userdata($datosT);
    }

    public function guardarCompra(){
        $datosT=array(
            'ci_usuario' => $this->session->userdata("ci"),
            'id_articulo' => $this->session->userdata('idR'),
            'dedicatoria' => $this->session->userdata('dedicatoriaE'),
            'nombre_dest' => $this->session->userdata('nombreE'),
            'apellido_dest' => $this->session->userdata('apellidoE'),
            'telefono_dest' => $this->session->userdata('telefonoE'),
            'ciudad' => $this->session->userdata('ciudadE'),
            'direccion_entrega' => $this->session->userdata('direccionE'),
            'horario' => $this->session->userdata('horarioE'),
             'fecha' => $this->session->userdata('fechaE'),
             'cod_postal' => $this->session->userdata('codigoPE'),
             'n_tarjeta' => $this->session->userdata('tarjeta'),
             'cod_seg_tar' => $this->session->userdata('cod_tar'),
             'mes_tarjeta' => $this->session->userdata('mes_tar'),
             'ano_tarjeta' => $this->session->userdata('ano_tar'),
             'cantidad' =>  $this->session->userdata('cantidadR'),
             'total' =>  $this->session->userdata('totalR')
        );

        return $this->db->insert('detalle_pedido', $datosT);

        $data = array(
            'idR' ,
            'nombreR',
            'precioR' ,
            'fechaE',
            'horarioE',
            'nombreE',
            'apellidoE',
            'telefonoE',
            'ciudadE',
            'direccionE',
             'codigoPE',
             'dedicatoriaE',
             'cantidadR',
             'totalR',
             'tarjeta',
            'cod_tar',
            'mes_tar',
            'ano_tar'
        );
        $this->session->unset_userdata($data);


    }

    public function borrarRamos(){

        $data = array(
            'idR' ,
            'nombreR',
            'precioR' ,
            'fechaE',
            'horarioE',
            'nombreE',
            'apellidoE',
            'telefonoE',
            'ciudadE',
            'direccionE',
             'codigoPE',
             'dedicatoriaE',
             'cantidadR',
             'totalR',
             'tarjeta',
            'cod_tar',
            'mes_tar',
            'ano_tar'
        );
        $this->session->unset_userdata($data);
    }


///////////////////TRANSACCIONES PARA PERSONALIZADOS///////
    public function datosEnvio_P(){
        //$this->load->helper('url');
        $data = array(
            'nombrePer' => $this->input->post('nombrePer'),
            'fechaP' => $this->input->post('fechaP'),
            'horarioP' => $this->input->post('radioP'),
            'nombreP' => $this->input->post('nombreEnvioP'),
            'apellidoP' => $this->input->post('apellidoEnvioP'),
            'telefonoP' => $this->input->post('telefonoEnvioP'),
            'ciudadP' => $this->input->post('comboboxP'),
            'direccionP' => $this->input->post('direccionEnvioP'),
             'codigoP' => $this->input->post('codpostalEnvioP'),
             'dedicatoriaP' => $this->input->post('dedicatoriaP')
        );
        $this->session->set_userdata($data);
        return $data;
    }

    public function guardarTotal($total){

         $datosT=array(
             'totalP' => $total
        );
        $this->session->set_userdata($datosT);

    }

    public function insertArt(){
         $data=array(
             'tipo' => "personal",
             'nombre' => $this->session->userdata('nombrePer'),
             'precio' => $this->session->userdata('totalP'),
             'descripcion' => $this->session->userdata('nombres')
        );
         $this->db->insert('articulo', $data);
    }


    public function consultaPer(){
        $nom=$this->session->userdata('nombrePer');
        $this->db->select('id_articulo');
        $this->db->where('nombre',$nom);
        $query = $this->db->get('articulo');

        if ($query->num_rows()==1) {
            $consulta = $query->row();
            $id_perso = $consulta->id_articulo;
            $datosT=array(
             'id_pers' => $id_perso
            );
            $this->session->set_userdata($datosT);
         }


    }

    public function datosEnvio_PER(){
        //$this->load->helper('url');
        $data = array(
            'tarjetaP' => $this->input->post('tarjetaPR'),
            'cod_tarP' => $this->input->post('codigoTPR'),
            'mes_tarP' => $this->input->post('mesPR'),
            'ano_tarP' => $this->input->post('anoPR')
        );
        $this->session->set_userdata($data);
	    
	$dataS = array(
            'transaccion_si'=> 'SI'
        );
        $this->session->set_userdata($dataS);

    }

    public function guardarCompraPer(){
        $tot=$this->session->userdata('totalP');
        $id=$this->session->userdata('id_pers');
        $datosT=array(
            'ci_usuario' => $this->session->userdata("ci"),
            'id_articulo' => $id,
            'dedicatoria' => $this->session->userdata('dedicatoriaP'),
            'nombre_dest' => $this->session->userdata('nombreP'),
            'apellido_dest' => $this->session->userdata('apellidoP'),
            'telefono_dest' => $this->session->userdata('telefonoP'),
            'ciudad' => $this->session->userdata('ciudadP'),
            'direccion_entrega' => $this->session->userdata('direccionP'),
            'horario' => $this->session->userdata('horarioP'),
             'fecha' => $this->session->userdata('fechaP'),
             'cod_postal' => $this->session->userdata('codigoP'),
             'n_tarjeta' => $this->session->userdata('tarjetaP'),
             'cod_seg_tar' => $this->session->userdata('cod_tarP'),
             'mes_tarjeta' => $this->session->userdata('mes_tarP'),
             'ano_tarjeta' => $this->session->userdata('ano_tarP'),
             'cantidad' => 1,
             'total' =>  $tot+2.50
        );

        return $this->db->insert('detalle_pedido', $datosT);

        $data = array(
            'nombrePer',
            'fechaP',
            'horarioP',
            'nombreP',
            'apellidoP',
            'telefonoP',
            'ciudadP',
            'direccionP',
             'codigoP',
             'dedicatoriaP',
             'totalP',
             'tarjetaP',
            'cod_tarP',
            'mes_tarP',
            'ano_tarP'
        );
        $this->session->unset_userdata($data);


    }

    public function borrarPerso(){

        $data = array(
            'nombrePer',
            'fechaP',
            'horarioP',
            'nombreP',
            'apellidoP',
            'telefonoP',
            'ciudadP',
            'direccionP',
             'codigoP',
             'dedicatoriaP',
             'totalP',
             'tarjetaP',
            'cod_tarP',
            'mes_tarP',
            'ano_tarP'
        );
        $this->session->unset_userdata($data);


    }
    ////////////////////////////////////////////////////////////////////////////METRICAS JOEL
    public function setMetrHelp($id,$fecha,$valor)
    {
        $data = array(
            'id_metrica' => $id,
            'fecha' => $fecha,
            'valor' => $valor
        );
        return $this->db->insert('metricas', $data);
    }
    public function setMetrExit($id,$fecha,$valor)
    {
        $data = array(
            'id_metrica' => $id,
            'fecha' => $fecha,
            'valor' => $valor
        );
        return $this->db->insert('metricas', $data);
    }
    public function setMetrError($id,$fecha,$valor)
    {
        $data = array(
            'id_metrica' => $id,
            'fecha' => $fecha,
            'valor' => $valor
        );
        return $this->db->insert('metricas', $data);
    }
    /////////////////////////////////CONSULTAS DE LAS METRICAS
        public function metricaInicioSesion($fecha){
        $dataT = array(
            'fecha_ses' => $fecha
        );

        $this->session->set_userdata($dataT);

        $data = array(
            'id_metrica' => 4,
            'fecha' => $fecha,
            'valor' => 1
        );
        return $this->db->insert('metricas', $data);

    }

    public function metricaExitosas(){

        $data = array(
            'id_metrica' => 5,
            'fecha' => $this->session->userdata('fecha_ses'),
            'valor' => 1
        );
        return $this->db->insert('metricas', $data);



    }

    public function metricaCanceladas(){
        $data = array(
            'id_metrica' => 6,
            'fecha' => $this->session->userdata('fecha_ses'),
            'valor' => 1
        );
        return $this->db->insert('metricas', $data);

    }

    public function metricaSinTransaccion(){
        $comprobar=$this->session->userdata('transaccion_si');

        if (strcmp($comprobar, 'SI') === 0)
          {

          }else{
            $data = array(
            'id_metrica' => 7,
            'fecha' => $this->session->userdata('fecha_ses'),
            'valor' => 1
            );
            return $this->db->insert('metricas', $data);

            $dataS = array(
            'transaccion_si'
            );
            $this->session->unset_userdata($dataS);

          }
    }




}
