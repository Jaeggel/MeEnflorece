<?php echo validation_errors(); ?>

<?php echo form_open('Flores/pago'); ?>
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
              <li><a href="<?php echo site_url('Flores/ramos') ?>">Galeria de Ramos</a></li>
              <li class="active">Ramo Seleccionado</li>
          </ol>

          <div class="row">
            <div class="col-md-7">
                <img class="img-responsive" src="<?php echo base_url();?>Img_Flores/Arreglos/<?php echo $flores_item['id_articulo'];?>.jpg" alt="">
            </div>


            <div class="col-md-5">
            <form method="POST">
            <input type="text" name="idR" style="visibility:hidden" value="<?php echo $flores_item['id_articulo'];?>"/>
            <input type="text" name="nombreR" style="visibility:hidden" value="<?php echo $flores_item['nombre'];?>"/>
            <input type="text" name="precioR" style="visibility:hidden" value="<?php echo $flores_item['precio'];?>"/>

                <h1><?php echo $flores_item['nombre'].'<br>'; ?></h1>


                <h2 >$<?php echo $flores_item['precio'].'<br>';?></h2>



                <p><?php echo $flores_item['descripcion'].'<br>';?></p>

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

                <div>
                    <hr align="center" width="60%"></p>
                    <p class="toggle toggled"><font color="red">*</font> Día de entrega</span></p>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar-o fa" aria-hidden="true"></i></span>
                            <input type="date" class="form-control" name="fechaR" id="fechaR" style="font-size: 11px" onblur="validarFecha()" required/>
                        </div>
                    </div>
                </div>

                <div >
                    <hr align="center" width="60%">
                    <p class="toggle toggled"><font color="red">*</font> Horario de entrega</p>

                    <div class="radio-select inline-block">
                        <input type="radio" name="radioR" id="mañana" value="mañana"  />
                        <label for="mañana">Por la mañana</label>
                    </div>
                    <div class="radio-select inline-block">
                        <input type="radio" name="radioR" id="tarde" value="tarde"  />
                        <label for="tarde">Por la tarde</label>
                    </div>
                    <div class="radio-select inline-block">
                        <input type="radio" name="radioR" id="noche" value="noche"  />
                        <label for="noche">Por la noche</label>
                    </div>

                </div>

                <div>
                    <hr align="center" width="60%">
                    <p class="toggle toggled"><font color="red">*</font> ¿Para quién es?</p>
                    <div class="form-group">
                        <font color="red">*</font> <input type="text" name="nombreEnvioR" class="input-text required-entry validate-no-html-tags form-control" placeholder="Nombre" value="" required onkeypress="return soloLetras(event)"/>
                    </div>
                    <div class="form-group">
                        <font color="red">*</font> <input type="text" name="apellidoEnvioR" class="input-text required-entry validate-no-html-tags form-control" placeholder="Apellidos" value="" required onkeypress="return soloLetras(event)" />
                    </div>
                    <div class="form-group">
                        <font color="red">*</font> <input type="text" name="telefonoEnvioR" class="input-text required-entry custom-validate-phone form-control" placeholder="Teléfono" value=""  maxlength="10" required onkeypress="return solonumero(event)"/>
                    </div>

                    <div class="col-5-12 form-group">
                        <font color="red">*</font> <select name="combobox" class="form-control" required>
                            <option value="Quito">Quito</option>
                            <option value="Guayaquil">Guayaquil</option>
                            <option value="Cuenca">Cuenca</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <font color="red">*</font> <input type="text" name="direccionEnvioR" class="input-text required-entry validate-no-html-tags form-control" placeholder="Direccion de envio" value="" required/>
                    </div>


                    <div class="form-group col-4-12">
                        <input type="text" name="codpostalEnvioR" class="input-text validate-no-html-tags form-control" placeholder="Codigo Postal" value="" maxlength="6" onkeypress="return solonumero(event)"/>
                    </div>

                </div>

                <div>
                    <hr align="center" width="60%">
                    <p class="toggle toggled">Incluye tu dedicatoria</p>

                    <textarea class="form-control textarea validate-no-html-tags" id="dedicatoriaR" name="dedicatoriaR" placeholder="Dedicatoria" maxlength="250"></textarea>
                    <p>Máximo de 250 caracteres</p>
                </div>

                <div>
                    <hr align="center" width="60%">
                    <button type="submit" id="authe" class="form-control btn btn-primary boton-margen text-center" onclick="send()">COMPRAR</button>
                </div>

            </form>
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
            alert('Su Fecha supera el limite de una semana de pedidos.');
            document.forms[0].fechaR.value=" ";
            return false;
        }else{
              if (dateStart<=datePasada) {
              alert('Los pedidos se pueden realizar un dia despues a la fecha actual.');
              document.forms[0].fechaR.value=" ";
              return false;
            }else{
              return true;
            }
        }
        return true;
    }
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
            contError();
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
          var url = "http://localhost/MeEnflorece/index.php/Flores/pago?cont=" + encodeURIComponent(cont);
              window.location.href = url;
    }
    
</script>

