
<?php

class Flores extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('flores_model');
        $this->load->helper('url_helper');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('Plantilla/encabezado');
        $this->load->view('paginas/index');
        $this->load->view('Plantilla/footer');
        //flecha es como usar el punto en java, acceder al metodo o atributo de un objeto
    }


    /////////////////////////////////////////////////////////////////////////////////////////////////////

   
    /////////////////////////////////////////////////////////////////////////////////////////////////////

     public function perfil_usuario()
    {
        $this->load->view('Plantilla/encabezado2');
        $this->load->view('paginas/perfil_usuario');
        $this->load->view('Plantilla/footer');
        //flecha es como usar el punto en java, acceder al metodo o atributo de un objeto
    }

public function registro()
    {

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombres', 'nombres', 'required');
        $this->form_validation->set_rules('cedula', 'cedula', 'required');      
        $this->form_validation->set_rules('correo', 'correo', 'required');
        $this->form_validation->set_rules('clave', 'clave', 'required');
         $this->form_validation->set_rules('apellidos', 'apellidos', 'required');
        

        if ($this->form_validation->run() === FALSE)
        {
           $this->load->view('Plantilla/encabezado');
           $this->load->view('paginas/registro');
           $this->load->view('Plantilla/footer');
            
        }
        else
        {
            $this->flores_model->set_users();
            
            $this->load->view('Plantilla/encabezado');
            $this->load->view('paginas/ingreso');
            $this->load->view('Plantilla/footer');
            echo '<script> alert("Usuario Registrado exitosamente")</script>';
            echo '<script> swal("Usuario Registrado","Ahora puedes acceder a nuestros beneficios","success"); </script>';
        }
    }


      public function ingreso()
    {

        $this->load->helper('form');
        if(!isset($_POST['cedula'])){
            $this->load->view('Plantilla/encabezado');
            $this->load->view('paginas/ingreso');
            $this->load->view('Plantilla/footer');
        }else{

            $validar['usuarios']=$this->flores_model->comprobar($_POST['cedula'],$_POST['clave']);

            if($validar['usuarios'])
            {
               /* echo "<script>
                alert('Usuario Verificado');
                </script>"; */

                $this->flores_model->sesiones($_POST['cedula']);
                
                $this->load->view('Plantilla/encabezado2');
                $this->load->view('paginas/perfil_usuario');
                $this->load->view('Plantilla/footer');

            }else{    //    Si no logró validar
                    echo "<script>
                    alert('Su usuario o contraseña son incorrectos');
                    </script>";
                    $this->load->view('Plantilla/encabezado');
                     $this->load->view('paginas/ingreso');
                     $this->load->view('Plantilla/footer');
                }
            }
    }



     public function logout() {
         $this->flores_model->metricaSinTransaccion();
      $this->session->sess_destroy();
      $this->load->helper('form');
        $this->load->view('Plantilla/encabezado');
        $this->load->view('paginas/index');
        $this->load->view('Plantilla/footer');

    }

   public function compras()
    {
        $cedula=$this->session->userdata("ci");
        $data['flores'] = $this->flores_model->traerCompras($cedula);
        $this->load->view('Plantilla/encabezado2');
        $this->load->view('paginas/compras',$data);
        $this->load->view('Plantilla/footer');
    }

   /*
    public function cambiarC() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('cA', 'cA', 'required');
        $this->form_validation->set_rules('cN', 'cN', 'required');
        $this->form_validation->set_rules('cNR', 'cNR', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header2');
                $this->load->view('auth/cambiarCon');
                $this->load->view('templates/footer');
            }
            else{
                $this->login_model->cambiarCon();

                /*$this->session->sess_destroy();
                $this->load->view('templates/header');
                $this->load->view('auth/login');
                $this->load->view('templates/footer');
            }
    }*/









    ////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function seleccion_ramo_SS($id = NULL)
    {

        $data['flores_item'] = $this->flores_model->get_flowersId($id);
        $this->load->view('Plantilla/encabezado');
        $this->load->view('paginas/seleccion_ramo_SS',$data);
        $this->load->view('Plantilla/footer');
    }

    public function seleccion_ramo($id = NULL)
    {

        $data['flores_item'] = $this->flores_model->get_flowersId($id);
        $this->load->view('Plantilla/encabezado2');
        $this->load->view('paginas/seleccion_ramo',$data);
        $this->load->view('Plantilla/footer');
    }



    public function ramos_amis()
    {
        $data['flores'] = $this->flores_model->get_flowerOc('Amistad');
        $this->load->view('Plantilla/encabezado');
        $this->load->view('paginas/ramos_amis',$data);
        $this->load->view('Plantilla/footer');
    }

    public function ramos_amis_l()
    {
        $data['flores'] = $this->flores_model->get_flowerOc('Amistad');
        $this->load->view('Plantilla/encabezado2');
        $this->load->view('paginas/ramos_amis_l',$data);
        $this->load->view('Plantilla/footer');
    }

    public function floresInd()
    {
        $data['flores'] = $this->flores_model->get_flowersMF();
        $this->load->view('Plantilla/encabezado');
        $this->load->view('paginas/floresInd',$data);
        $this->load->view('Plantilla/footer');
    }

   public function pers_ramo()
    {
        $data['flores'] = $this->flores_model->get_flowersMF();
        $this->load->view('Plantilla/encabezado2');
        $this->load->view('paginas/pers_ramo',$data);
        $this->load->view('Plantilla/footer');
    }

    public function pers_ramo_SS()
    {
        $data['flores'] = $this->flores_model->get_flowersMF();
        $this->load->view('Plantilla/encabezado');
        $this->load->view('paginas/pers_ramo_SS',$data);
        $this->load->view('Plantilla/footer');
    }

    public function ramos()
    {
        $data['flores'] = $this->flores_model->get_flowersMG();
        $this->load->view('Plantilla/encabezado');
        $this->load->view('paginas/ramos',$data);
        $this->load->view('Plantilla/footer');
    }

    public function ramos_l()
    {
        $data['flores'] = $this->flores_model->get_flowersMG();
        $this->load->view('Plantilla/encabezado2');
        $this->load->view('paginas/ramos_l',$data);
        $this->load->view('Plantilla/footer');
    }

    public function ramos_amor()
    {
        $data['flores'] = $this->flores_model->get_flowerOc('Amor');
        $this->load->view('Plantilla/encabezado');
        $this->load->view('paginas/ramos_amor',$data);
        $this->load->view('Plantilla/footer');
    }
    public function ramos_aniv()
    {
        $data['flores'] = $this->flores_model->get_flowerOc('Aniversario');
        $this->load->view('Plantilla/encabezado');
        $this->load->view('paginas/ramos_aniv',$data);
        $this->load->view('Plantilla/footer');
    }
    public function ramos_perdon()
    {
        $data['flores'] = $this->flores_model->get_flowerOc('Pedir Perdón');
        $this->load->view('Plantilla/encabezado');
        $this->load->view('paginas/ramos_perdon',$data);
        $this->load->view('Plantilla/footer');
    }
    public function ramos_regalos()
    {
        $data['flores'] = $this->flores_model->get_flowersMG('Regalos');
        $this->load->view('Plantilla/encabezado');
        $this->load->view('paginas/ramos_regalos',$data);
        $this->load->view('Plantilla/footer');
    }

    public function ramos_amor_l()
    {
        $data['flores'] = $this->flores_model->get_flowerOc('Amor');
        $this->load->view('Plantilla/encabezado2');
        $this->load->view('paginas/ramos_amor_l',$data);
        $this->load->view('Plantilla/footer');
    }
    public function ramos_aniv_l()
    {
        $data['flores'] = $this->flores_model->get_flowerOc('Aniversario');
        $this->load->view('Plantilla/encabezado2');
        $this->load->view('paginas/ramos_aniv_l',$data);
        $this->load->view('Plantilla/footer');
    }
    public function ramos_perdon_l()
    {
        $data['flores'] = $this->flores_model->get_flowerOc('Pedir Perdón');
        $this->load->view('Plantilla/encabezado2');
        $this->load->view('paginas/ramos_perdon_l',$data);
        $this->load->view('Plantilla/footer');
    }
    public function ramos_regalos_l()
    {
        $data['flores'] = $this->flores_model->get_flowersMG('Regalos');
        $this->load->view('Plantilla/encabezado2');
        $this->load->view('paginas/ramos_regalos_l',$data);
        $this->load->view('Plantilla/footer');
    }

/////////////////// FUNCIONDES DE RAMOS ////////
     public function pago()
    {

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fechaR', 'fechaR', 'required');
        $this->form_validation->set_rules('radioR', 'radioR', 'required');
        $this->form_validation->set_rules('nombreEnvioR', 'nombreEnvioR', 'required');
        $this->form_validation->set_rules('apellidoEnvioR', 'apellidoEnvioR', 'required');
        $this->form_validation->set_rules('telefonoEnvioR', 'telefonoEnvioR', 'required');
        $this->form_validation->set_rules('combobox', 'combobox', 'required');
        $this->form_validation->set_rules('direccionEnvioR', 'direccionEnvioR', 'required');

            if ($this->form_validation->run() === FALSE)
            {

                $this->load->view('Plantilla/encabezado2');
                $this->load->view('paginas/seleccion_ramo');
                $this->load->view('Plantilla/footer');
            }
            else{

                $data['envio']=$this->flores_model->datosEnvio();
                $this->load->view('Plantilla/encabezado2');
                $this->load->view('paginas/pago',$data);
                $this->load->view('Plantilla/footer');
            }

    }


    public function obtenerFlor(){
        $nick=$_POST['ID_RAMO'];
        $data=$this->flores_model->florID($nick);
        echo json_encode($data);

    }

    public function guardar(){
        $total=$_POST['totales'];
        $cant=$_POST['cantidadP'];
        $this->flores_model->guardarArray($total,$cant);

    }

     public function perfil_usuario_fin()
    {

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('tarjetaP', 'tarjetaP', 'required');
        $this->form_validation->set_rules('codigoTP', 'codigoTP', 'required');
        $this->form_validation->set_rules('mes', 'mes', 'required');
        $this->form_validation->set_rules('ano', 'ano', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $data['envio']=$this->flores_model->datosEnvio();
                $this->load->view('Plantilla/encabezado2');
                $this->load->view('paginas/pago',$data);
                $this->load->view('Plantilla/footer');
            }
            else{


                $this->flores_model->datosEnvio_Tar();
                echo '<script>if(confirm("Deseas realizar la compra?"))
                {alert("Transacción Guardada con Exito"); document.location="confirmarSI";}else{ alert("Transacción Cancelada");       document.location="confirmarNo";
                    }</script>';
            }

    }

    public function confirmarSI(){
        $this->flores_model->metricaExitosas();
        $this->flores_model->guardarCompra();
        $this->load->view('Plantilla/encabezado2');
        $this->load->view('paginas/perfil_usuario');
        $this->load->view('Plantilla/footer');
    }

    public function confirmarNo(){
        $this->flores_model->metricaCanceladas();
        $this->flores_model->borrarRamos();
        $this->load->view('Plantilla/encabezado2');
        $this->load->view('paginas/perfil_usuario');
        $this->load->view('Plantilla/footer');

    }


//////////////// FUNCIONES DE PERSONALIZADO////
     public function pago_P()
    {

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombrePer', 'nombrePer', 'required');
        $this->form_validation->set_rules('fechaP', 'fechaP', 'required');
        $this->form_validation->set_rules('radioP', 'radioP', 'required');
        $this->form_validation->set_rules('nombreEnvioP', 'nombreEnvioP', 'required');
        $this->form_validation->set_rules('apellidoEnvioP', 'apellidoEnvioP', 'required');
        $this->form_validation->set_rules('telefonoEnvioP', 'telefonoEnvioP', 'required');
        $this->form_validation->set_rules('comboboxP', 'comboboxP', 'required');
        $this->form_validation->set_rules('direccionEnvioP', 'direccionEnvioP', 'required');

            if ($this->form_validation->run() === FALSE)
            {

                $this->load->view('Plantilla/encabezado2');
                $this->load->view('paginas/pers_ramo');
                $this->load->view('Plantilla/footer');
            }
            else{

                $data['envio']=$this->flores_model->datosEnvio_P();
                $this->flores_model->insertArt();
                $this->load->view('Plantilla/encabezado2');
                $this->load->view('paginas/pago_P',$data);
                $this->load->view('Plantilla/footer');
            }

    }

    public function guardarPer(){
        $total=$_POST['totalesP'];
         $this->flores_model->guardarTotal($total);
    }

    public function consultaPer(){
        $nom=$_POST['nombreArt'];
         $this->flores_model->consultaPer($nom);
    }

     public function perfil_usuario_Per()
    {

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('tarjetaPR', 'tarjetaPR', 'required');
        $this->form_validation->set_rules('codigoTPR', 'codigoTPR', 'required');
        $this->form_validation->set_rules('mesPR', 'mesPR', 'required');
        $this->form_validation->set_rules('anoPR', 'anoPR', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $data['envio']=$this->flores_model->datosEnvio();
                $this->load->view('Plantilla/encabezado2');
                $this->load->view('paginas/pago_P',$data);
                $this->load->view('Plantilla/footer');
            }
            else{
                //

                $this->flores_model->datosEnvio_PER();
                $this->flores_model->consultaPer();
                echo '<script>if(confirm("Deseas realizar la compra?"))
                {console.log("bien");alert("Transacción Guardada con Exito"); document.location="confirmarSIper";}else{ alert("Transacción Cancelada");       document.location="confirmarNoper";
                    }</script>';
            }

    }

    public function confirmarSIper(){
        $this->flores_model->metricaExitosas();
        $this->flores_model->guardarCompraPer();
        $this->load->view('Plantilla/encabezado2');
        $this->load->view('paginas/perfil_usuario');
        $this->load->view('Plantilla/footer');
    }

    public function confirmarNoper(){
        $this->flores_model->metricaCanceladas();
        $this->flores_model->borrarPerso();
        $this->load->view('Plantilla/encabezado2');
        $this->load->view('paginas/perfil_usuario');
        $this->load->view('Plantilla/footer');

    }
    /////////////////////////////////////////////////////////////////////////METRICAS JOEL
     public function setHelpCont(){
        $valor=$this->input->post('cont');
        $fecha=$this->input->post('fecha');
        $data=$this->flores_model->setMetrHelp(1,$fecha,$valor);
        echo json_encode($data);
    }
    public function setExitCont(){
        $valor=$this->input->post('contE');
        $fecha=$this->input->post('fechaE');
        $data=$this->flores_model->setMetrExit(2,$fecha,$valor);
        echo json_encode($data);
    }
    public function setErrorCont(){
        $valor=$this->input->post('contEr');
        $fecha=$this->input->post('fechaEr');
        $data=$this->flores_model->setMetrError(3,$fecha,$valor);
        echo json_encode($data);
    }
    ///////////////////////////////////METRICAS ACTUALIZACION
    public function metricaInicioSesion(){
        $fecha=$_POST['FECHA_A'];
        $this->flores_model->metricaInicioSesion($fecha);
    }


}



?>
