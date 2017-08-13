<?php echo validation_errors(); ?>

<?php echo form_open('Flores/perfil_usuario_fin'); ?>
    <section id="team">
      <!-- Team BEGIN -->
      <div class="portfolio">
        <div class="container">
          <div class="heading">
            <h2>Información de Pago <strong>Me Enflorece</strong></h2>
            <h3>3.- Ingresa tus datos personales</h3>
            <p>Trabajamos para Brindarte Seguridad</p>
          </div><!-- //end heading -->

          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('/') ?>">Home</a></li>
            <li><a href="<?php echo site_url('Flores/ramos_l') ?>">Galeria de Ramos</a></li>
            <li><a href="<?php echo site_url('Flores/ramos_l') ?>">Ramo seleccionado</a></li>
            <li class="active">Datos personales</li>
          </ol>

          <div class="row">
            <div class="col-md-8">
            <form>
              <div class="">
                <div class="form">
                  <div class="">
                   <legend style="color:#6E6E6E;" align="left">1. Tus Datos</legend>
                 </div>
                 <div class="form-wrap" >
                  <div class="">
                    <h4 for="nombreP"  <span style="color:#0B0B61;">Nombres </h4>
                  </div>
                  <div class="">
                    <input type="text" style="width:500px;height:15px;" name="nombreP" placeholder="Tu Nombre" class="form-control" value="<?php echo $this->session->userdata("nombres")?>" disabled="true">
                  </div>
                  <div class="">
                   <h4 for="telefonoP" class="" <span style="color:#0B0B61#0B0B61; ">Teléfono </h4>

                   <input type="text" style="width:500px;height:15px;" name="telefonoP" placeholder="Tu Teléfono" class="form-control" value="<?php echo $this->session->userdata("num_telefono")?>" disabled="true">
                 </div>

                 <div class="">
                  <h4 for="emailP" class="" <span style="color:#0B0B61;">E-mail </h4>

                  <input type="text" style="width:500px;height:15px;" name="emailP" placeholder="Tu Correo Electrónico" class="form-control" value="<?php echo $this->session->userdata("correo")?>" disabled="true">
                </div>

                <div align="left">
                 <br>
                 <input type="checkbox" align="left" name="chkTarjeta">Mi nombre NO aparecerá en la tarjeta de regalo.
               </div>
             </div>

             <div class="">
               <br>
               <br>
               <legend style="color:#6E6E6E;" align="left">2. Método de Pago</legend>

               <div class="">

                  <fieldset>

                    <label>
                      <img src="<?php echo base_url("Img_Flores/Tarjetas/visa.png");?>"  alt="Visa">
                      <img src="<?php echo base_url("Img_Flores/Tarjetas/american.png");?>"  alt="American">
                      <img src="<?php echo base_url("Img_Flores/Tarjetas/mastercad.png");?>"  alt="Mastercard">
                    </label>
                  </fieldset>




              </div>
              <div class="">
               <h4 for="tarjetaP" class="" <span style="color:#0B0B61;"><font color="red">*</font> Número de Tarjeta</h4>

             </div>

             <div class="">
              <input type="text" style="width:500px;height:15px;" name="tarjetaP" id="tarjetaP" placeholder="Tu Tarjeta" class="form-control" required maxlength="16" onkeypress="return solonumero(event)" onblur="validarTamaño1()">
            </div>
            <div class="">
              <h4 for="codigoTP" class="" <span style="color:#0B0B61;"><font color="red">*</font> Código de Seguridad (CVV)</h4>


             <input type="password" name="codigoTP" style="width:500px;height:15px;" placeholder="CVV" class="form-control" min="0" required maxlength="3" onkeypress="return solonumero(event)">
           </div>
           <div class="">
              <h4 for="mes" class="" <span style="color:#0B0B61;"><font color="red">*</font> Mes</h4>

             <SELECT name="mes" SIZE=1 style="width:500px;height:15px;" class="form-control" requerid>
              <OPTION VALUE="1">1 - Enero</OPTION>
              <OPTION VALUE="2">2 - Febrero</OPTION>
              <OPTION VALUE="3">3 - Marzo</OPTION>
              <OPTION VALUE="4">4 - Abril</OPTION>
              <OPTION VALUE="5">5 - Mayo</OPTION>
              <OPTION VALUE="6">6 - Junio</OPTION>
              <OPTION VALUE="7">7 - Julio</OPTION>
              <OPTION VALUE="8">8 - Agosto</OPTION>
              <OPTION VALUE="9">9 - Septiembre</OPTION>
              <OPTION VALUE="10">10 - Octubre</OPTION>
              <OPTION VALUE="11">11 - Noviembre</OPTION>
              <OPTION VALUE="12">12 - Diciembre</OPTION>

            </SELECT>

          </div>
          <div class="">
            <h4 for="ano" class="" <span style="color:#0B0B61;"><font color="red">*</font> Año</h4>

           <SELECT name="ano" SIZE=1 style="width:500px;height:15px;" class="form-control" requerid>
            <OPTION VALUE="2017">2017</OPTION>
            <OPTION VALUE="2018">2018</OPTION>
            <OPTION VALUE="2019">2019</OPTION>
            <OPTION VALUE="2020">2020</OPTION>
            <OPTION VALUE="2021">2021</OPTION>
            <OPTION VALUE="2022">2022</OPTION>
            <OPTION VALUE="2023">2023</OPTION>
            <OPTION VALUE="2024">2024</OPTION>
            <OPTION VALUE="2025">2025</OPTION>
            <OPTION VALUE="2026">2016</OPTION>
            <OPTION VALUE="2027">2027</OPTION>
            <OPTION VALUE="2028">2028</OPTION>

          </SELECT>
        </div>
        <br>
        <button type="submit" class="btn-danger btn-md btn-block" style="width:500px;height:60px;" onclick="confirma(); sendHelpCont(); sendExitCont(); sendErrorCont();">Confirmar</button>
      </div>
    </div>


  </div>

 </form>
</div>


<div class="col-md-4" style="background-color: #f2f2f2;">



 <legend style="color:#6E6E6E;" align="left">Entrega</legend>
 <hr align="center" width="60%">

 <div>
  <p>Fecha Entrega: <?php echo $envio['fechaE'].'<br>'; ?></p>
  <p>Horario de Entrega: <?php echo $envio['horarioE'].'<br>'; ?></p>
</div>

<div>
  <h5>Datos de entrega: </h5>
  <hr align="center" width="60%">
  <p ><?php echo $envio['nombreE']; ?> <?php echo $envio['apellidoE']; ?> </p>
  <p><?php echo $envio['direccionE']; ?>, <?php echo $envio['ciudadE'].'<br>'; ?></p>
  <p><?php echo $envio['codigoPE'].'<br>'; ?></p>
</div>

<div>
  <legend style="color:#6E6E6E;" align="left">Tu Compra</legend>
  <hr align="center" width="60%">
  <div class="row">
    <div class="col-md-8 left">
      <p><?php echo $envio['nombreR'].'<br>'; ?></p>
    </div>
    <div class="col-md-4 right">
      <strong><p>$ <?php echo $envio['precioR'].'<br>'; ?></p></strong>
    </div>

  </div>

</div>

<div>
  <div class="row">
    <div class="col-md-8">
      <div class="input-group" id="spinner">
        <span class="input-group-btn btn-group-sm">
          <button  type="button" class="btn btn-danger" data-action="decrement" onclick="disminuir(<?php echo $envio['precioR'];?>,document.getElementById('qty').value )"><span class="fa fa-minus"></span></button>
        </span>
        <input name="qty" id="qty" type="text" class="form-control text-center" value="0" min="0" max="10" disabled>
        <span class="input-group-btn btn-group-sm">
          <button  type="button" class="btn btn-success" data-action="increment" onclick="incrementar(<?php echo $envio['precioR'];?>,document.getElementById('qty').value )"><span class="fa fa-plus"></span></button>
        </span>

      </div>
    </div>

  </div>
</div>

<div>
  <div class="row">
    <div class="col-md-8 left">
      <p>Subtotal: </p>
    </div>
    <div class="col-md-4 right">
      <strong><p id="subtotal">$ </p></strong>
    </div>
  </div>
</div>

<div>
  <div class="row">
    <div class="col-md-8 left">
      <p>Gastos de Envio: </p>
    </div>
    <div class="col-md-4 right">
      <strong><p>$ 2.50 </p></strong>
    </div>
  </div>
</div>


<div>
  <div class="row">
    <div class="col-md-8 left">
      <strong><p>Total General: </p></strong>
    </div>
    <div class="col-md-4 right">
      <strong><p id="total">$ </p></strong>
    </div>

  </div>
</div>
</div>




</div>
</div>


<!--//Fin Galeria-->
</div>
</div>
</div>
</section>

<script>
  jQuery(document).ready(function(){
    $('#spinner button').on('click', function(){
      let input = $(this).closest('#spinner').find('input[name=qty]');

      if($(this).data('action') === 'increment') {
        if(input.attr('max') === undefined || parseInt(input.val()) < parseInt(input.attr('max'))) {
         input.val(parseInt(input.val(), 10) + 1);
       }
     } else if($(this).data('action') === 'decrement') {
      if(input.attr('min') === undefined || parseInt(input.val()) > parseInt(input.attr('min'))) {
        input.val(parseInt(input.val(), 10) - 1);
      }
    }
  });
  });
/*
function calc(valor)
{
    var ing = $('#qty').val();
  str = '<h3>$'+(ing*valor)+'</h3>';
  $("#valor").html(str);
}*/
</script>

<script>
    function solonumero(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = "0123456789";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            contError1();
            return false;
        }
    }
</script>

<script type="text/javascript">
var cont1=0;
   var add = (function () {
    var counter = 0;
        return function () {return counter += 1;}
    })();

var cont=0;
var queryString = new Array();
    $(function () {
      if (queryString.length == 0) {
            if (window.location.search.split('?').length > 1) {
                var params = window.location.search.split('?')[1].split('&');
                for (var i = 0; i < params.length; i++) {
                    var key = params[i].split('=')[0];
                    var value = decodeURIComponent(params[i].split('=')[1]);
                    queryString[key] = value;
                }
            }
        }
        if (queryString["cont"] != null) {
            var data = queryString["cont"];
            cont=data;
            console.log("RECIBO: "+data)
        }
    });

    function contError1()
    {
        cont1=parseInt(cont)+parseInt(add());
        console.log(cont1);
    }

    function sendErrorCont()
    {
        var d = new Date();
        var month = d.getMonth()+1;
        var day = d.getDate();

        var output = d.getFullYear() + '/' +
            ((''+month).length<2 ? '0' : '') + month + '/' +
            ((''+day).length<2 ? '0' : '') + day;
        $.ajax({
            url: "http://localhost/MeEnflorece/index.php/Flores/setErrorCont",
            data: {"contEr":cont1,"fechaEr":output},
            dataType: "json",
            type: "POST",
            success: function(data){
                
            }
        });
    }
</script>

<script>
    validarTamaño1  = function() {
        num = document.getElementById('tarjetaP').value;

        if(num.length<16 && num.length>0){
            alert('El numero de la tarjeta debe ser de 16 caracteres.');
            document.forms[0].tarjetaP.value="";
            return false;
        }else{
            return true;
        }
        return true;
    }
</script>

