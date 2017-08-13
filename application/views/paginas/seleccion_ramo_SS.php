
<section id="team">
    <!-- Team BEGIN-->



    <div class="portfolio">
        <div class="container">
            <div class="heading">
              <h2>Ramos <strong>Me Enflorece</strong></h2>
              <h3>2.- Ingresa los datos de la persona a la que enviaras el ramo</h3>

            </div><!-- //end heading -->

          <ol class="breadcrumb">
              <li><a href="<?php echo site_url('/') ?>">Home</a></li>
              <li><a href="<?php echo site_url('Flores/ramos_l') ?>">Galeria de Ramos</a></li>
              <li class="active">Ramo Seleccionado</li>
          </ol>

          <div class="row">
            <div class="col-md-7">
                <img class="img-responsive" src="<?php echo base_url();?>Img_Flores/Arreglos/<?php echo $flores_item['id_articulo'];?>.jpg" alt="">
            </div>


            <div class="col-md-5">
            
            <input type="text" name="idR" style="visibility:hidden" value="<?php echo $flores_item['id_articulo'];?>"/>
            <input type="text" name="nombreR" style="visibility:hidden" value="<?php echo $flores_item['nombre'];?>"/>
            <input type="text" name="precioR" style="visibility:hidden" value="<?php echo $flores_item['precio'];?>"/>

                <h1><?php echo $flores_item['nombre'].'<br>'; ?></h1>


                <h2 >$<?php echo $flores_item['precio'].'<br>';?></h2>



                <p><?php echo $flores_item['descripcion'].'<br>';?></p>

                <div>
                    <h4><p class="toggle toggled">Inicia Sesión para continuar tu compra<hr align="center" width="60%"></p></h4>

                </div>


                <div>
                    <button type="submit" id="authe" class="form-control btn btn-primary boton-margen text-center"  onclick="location.href='<?php echo site_url('Flores/ingreso')?>'">Iniciar Sesión</button>
                </div>

                <div class="login-register">
                            ¿Aun no tienes Cuenta? <a href="<?php echo site_url('Flores/registro') ?>">Registrate.</a>
                         </div>

            
            </div><!-- Fin div 5 -->


          </div>
</div>
</div>
</div>
</section>

<script>
    validarFecha  = function() {
        fecha = document.getElementById('fechaR').value;
        console.log(fecha);
        valuesStart=fecha.split("-");

        //FECHA Maxima
         var fi = new Date();
        fechaFinal=(fi.getFullYear()+"-"+(fi.getMonth()+1)+"-"+(fi.getDate()+8));
            valuesEnd=fechaFinal.split("-");

        //OBTENER FECHA ACTUAL
        var f = new Date();
        fechaPasada=(f.getFullYear()+"-"+(f.getMonth()+1)+"-"+f.getDate());
            valuesPasada=fechaPasada.split("-");
            console.log(fechaPasada);
            // Verificamos que la fecha no sea posterior a la actual
            var dateStart=new Date(valuesStart[0],(valuesStart[1]-1),valuesStart[2]);
            var dateEnd=new Date(valuesEnd[0],(valuesEnd[1]-1),valuesEnd[2]);

            var datePasada=new Date(valuesPasada[0],(valuesPasada[1]-1),valuesPasada[2]);

        if(dateStart>=dateEnd){
            alert('Su Fecha supera el limite de una semana.');
            document.forms[0].fecha.value="";
            return false;
        }else{
              if (dateStart<datePasada) {
              alert('No puede ingresar una fecha anterior a la actual.');
              document.forms[0].fecha.value="";
              return false;
            }else{
              return true;
            }
        }
        return true;
    }
</script>

<script >
    /*$('#authe').on('click',function(){
    console.log("siiii");
    /*var meme=id;
    var emoji=ide;
    var top = $('#top-text').val().toLocaleUpperCase();
    var bottom = $('#bottom-text').val().toLocaleUpperCase();
    var label = $('#ced');
    var ced= label.attr('value');
    $.ajax({
        url: "guardar_meme",
        data: {"meme":meme, "emoji": emoji, "top": top, "bottom": bottom, "ced":ced},
        type: "POST",
        success: function(response){
               alert("Se ha ingresado el meme correctamente.");

        }
    });
 });*/

</script>


