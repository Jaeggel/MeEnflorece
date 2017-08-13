<?php echo validation_errors(); ?>

<?php echo form_open('Flores/pago_P'); ?>
<section id="team">
    <!-- Team BEGIN -->
    <div class="portfolio">
        <div class="container">
            <div class="heading">
              <h2>Flores <strong>Me Enflorece</strong></h2>
              <h3>1.- Escoge las flores que desees para tu armar tu ramo</h3>
          </div><!-- //end heading -->
          <ol class="breadcrumb">
              <li><a href="<?php echo site_url('/') ?>">Home</a></li>
              <li class="active">Galeria de Flores</li>
          </ol>
          <!--Galeria-->
          <div class="row">
              <div class="col-md-9">
                  <?php foreach ($flores as $flores_item): ?>

                    <div class="tab-pane fade active in" id="tshirt" >
                       <div class="col-sm-3">
                          <div class="product-image-wrapper">
                           <div class="single-products">
                            <div class="productinfo text-center">
                             <br>
                             <img src="<?php echo base_url();?>Img_Flores/Flores/<?php echo $flores_item['id_articulo'];?>.jpg" WIDTH=180 HEIGHT=180 alt="">
                             <br><br>
                             <div id="valor">
                             </div>
                             <p id="nombF"><?php echo $flores_item['nombre']; ?></p>
                             <h2 id="preF">$<?php echo $flores_item['precio'];?></h2>
                             <div class="containter">
                              <div>
                                  <div class="input-group" id="spinner">
                                   <span class="input-group-btn btn-group-sm">

                                    <a onclick="document.getElementById('qty-<?php echo $flores_item['id_articulo'];?>').value = parseInt(document.getElementById('qty-<?php echo $flores_item['id_articulo'];?>').value) - 1" title=""><button  type="button" class="btn btn-danger" ><span class="fa fa-minus"></span></button></a>

                                </span>
                                <input name="qty" id="qty-<?php echo $flores_item['id_articulo'];?>" type="text" class="form-control text-center" value="0" min="0" max="10" disabled>

                                <span class="input-group-btn btn-group-sm">
                                    <a onclick="document.getElementById('qty-<?php echo $flores_item['id_articulo'];?>').value = parseInt(document.getElementById('qty-<?php echo $flores_item['id_articulo'];?>').value) + 1" title=""><button  type="button" class="btn btn-success" ><span class="fa fa-plus"></span></button></a>
                                </span>
                            </div>
                        </div>
                        <br>

                        <button class="btn btn-default add-to-cart" id="btn_carrito"  onclick="agregar(<?php echo $flores_item['id_articulo']?>,document.getElementById('qty-<?php echo $flores_item['id_articulo'];?>').value )"><i class="fa fa-shopping-cart"></i>  Comprar</button>
                    </div>
                </div>
            </div>
            <br>
        </div>

    </div>



</div>
<?php endforeach; ?>

<!--//Fin Galeria-->
</div>

<div class="col-md-3">
<div class="row" id="tablaCar">

  </div>

  <div class="row">
      <div class="col-md-6 left">
          <p>Total: </p>
      </div>
          <div class="col-md-6 right">
                <div id="totalP">

                </div>

          </div>
  </div>


  <div>
  <form  method="post" action="#">

                <div>
                    <div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4><p class="toggle toggled">Configura tu ramo</h4>
                        </div>
                        <div class="col-md-6">
                            <h4><p class="toggle toggled"><font color="red">Campos obligatorios *</font></h4>

                        </div>

                    </div>
                </div>

                    <p class="toggle toggled"><font color="red">*</font> PONLE UN NOMBRE A TU RAMO: </span></p>

                    <input type="text" name="nombrePer" class="input-text required-entry validate-no-html-tags form-control" placeholder="Nombre Ramo"  maxlength="50" required />
                    <hr align="center" width="60%">
                </div>

                <div>
                    <p class="toggle toggled"><font color="red">*</font> Día de entrega</span></p>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar-o fa" aria-hidden="true"></i></span>
                            <input type="date" class="form-control" name="fechaP" id="fechaP" style="font-size: 11px" onblur="validarFecha()" required/>
                        </div>
                    </div>
                </div>

                <div >
                    <hr align="center" width="60%">
                    <p class="toggle toggled"><font color="red">*</font> Horario de entrega</p>

                    <div class="radio-select inline-block">
                        <input type="radio" name="radioP" id="mañana" value="mañana"  />
                        <label for="mañana">Por la mañana</label>
                    </div>
                    <div class="radio-select inline-block">
                        <input type="radio" name="radioP" id="tarde" value="tarde"  />
                        <label for="tarde">Por la tarde</label>
                    </div>
                    <div class="radio-select inline-block">
                        <input type="radio" name="radioP" id="noche" value="noche"  />
                        <label for="noche">Por la noche</label>
                    </div>

                </div>

                <div>
                    <hr align="center" width="60%">
                    <p class="toggle toggled"><font color="red">*</font> ¿Para quién es?</p>
                    <div class="form-group">
                       <font color="red">*</font>  <input type="text" name="nombreEnvioP" class="input-text required-entry validate-no-html-tags form-control" placeholder="Nombre" value="" maxlength="20" required onkeypress="return soloLetras(event)"/>
                    </div>
                    <font color="red">*</font> <div class="form-group">
                        <input type="text" name="apellidoEnvioP" class="input-text required-entry validate-no-html-tags form-control" placeholder="Apellidos" value="" maxlength="20" required onkeypress="return soloLetras(event)" />
                    </div>
                   <font color="red">*</font>  <div class="form-group">
                        <input type="text" name="telefonoEnvioP" class="input-text required-entry custom-validate-phone form-control" placeholder="Teléfono" value="" maxlength="10" required onkeypress="return solonumero(event)"/>
                    </div>

                   <font color="red">*</font>  <div class="col-5-12 form-group">
                        <select name="comboboxP" class="form-control" required>
                            <option value="Quito">Quito</option>
                            <option value="Guayaquil">Guayaquil</option>
                            <option value="Cuenca">Cuenca</option>
                        </select>
                    </div>

                   <font color="red">*</font>  <div class="form-group">
                        <input type="text" name="direccionEnvioP" class="input-text required-entry validate-no-html-tags form-control" placeholder="Direccion de envio" value="" required/>
                    </div>


                    <div class="form-group col-4-12">
                        <input type="text" name="codpostalEnvioP" class="input-text validate-no-html-tags form-control" placeholder="Codigo Postal" value="" maxlength="6" onkeypress="return solonumero(event)"/>
                    </div>

                </div>

                <div>
                    <hr align="center" width="60%">
                    <p class="toggle toggled">Incluye tu dedicatoria</p>

                    <textarea class="form-control textarea validate-no-html-tags" id="dedicatoriaP" name="dedicatoriaP" placeholder="Dedicatoria" maxlength="250" ></textarea>
                    <p>Máximo de 250 caracteres</p>
                </div>

                <div>
                    <hr align="center" width="60%">
                    <button type="submit" class="form-control btn btn-primary boton-margen text-center" onclick="crear()"; send();>COMPRAR</button>
                </div>

            </form>
            </div>


</div>


</div>



</div>
</div>
</section>

<script>
    validarFecha  = function() {
        fecha = document.getElementById('fechaP').value;
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
            alert('Su Fecha supera el limite de una semana de Pedidos.');
            document.forms[0].fechaP.value="";
            return false;
        }else{
              if (dateStart<=datePasada) {
              alert('Los pedidos se pueden realizar un dia despues a la fecha actual.');
              document.forms[0].fechaP.value="";
              return false;
            }else{
              return true;
            }
        }
        return true;
    }
</script>


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
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = "áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
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
            return false;
        }
    }
</script>
<script type="text/javascript">
    ///////////////////////////////////////////////////////METRICA ERROR
    var cont=0;
    var add = (function () {
    var counter = 0;
        return function () {return counter += 1;}
    })();

    function contError()
    {
        cont=add();
        console.log(cont);
    }
    function send()
    {
          var url = "http://localhost/MeEnflorece/index.php/Flores/pago_P?cont=" + encodeURIComponent(cont);
              window.location.href = url;
    }
    
</script>
