      <section id="team">
    <!-- Team BEGIN -->
    <div class="portfolio">
        <div class="container">
            <div class="heading">
                <h2>Registro <strong>Me Enflorece</strong></h2>
                <p>Accede a todos nuestros beneficios</p>
            </div><!-- //end heading -->
              
          <div class="form-group" >
            <form class="form-horizontal" method="post" name="frm">
            <div class="row">  
             <div class="btn-ground col-md-6">
                              <div class="row">
                                    <div class="btn-ground col-md-6">
                                    <div class="input-group" style="text-align:center;">
                                    
                                    <h4 for="name" style="color:#0B0B61; position:absolute; right: 560px;"><font color="red">*</font> Nombre: </h4>
                                                                       
                                    <span class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
                                    
                                        <input type="text" name="nombres" id="nombres" style="width:500px;height:15px;" placeholder="Tu Nombre / Your Name" class="form-control" maxlength="15" required onkeypress="return soloLetras(event);"/>
                                    </div>
                                     </div>

                                     </div>
                                     <br>
                                     <br>
                                     <div class="row">
                                       <div class="btn-ground col-md-6">
                                     <div class="input-group" style="text-align:center;">
                                    <h4 for="name" style="color:#0B0B61; position:absolute; right: 560px;"><font color="red">*</font> Apellido:   </h4>
                                                                                                         
                                      <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                        <input type="text" name="apellidos" id="apellidos" style="width:500px;height:15px;" placeholder="Tu Apellido / Your Last Name" class="form-control" maxlength="15" required onkeypress="return soloLetras(event)"/>
                                    </div>
                                    </div>
                                    </div>
                                      <br>
                                      <br>
                                    <div class="row">
                                       <div class="btn-ground col-md-6">
                                     <div class="input-group" style="text-align:center;">
                                     <h4 for="name" class="" style="color:#0B0B61; position:absolute; right: 560px;"><font color="red">*</font> Cédula:  </h4>
                                                                         
                                     <span class="input-group-addon"><i class="fa fa-id-card-o" aria-hidden="true"></i></span> 
                                        <input type="text" name="cedula" id="cedula" style="width:500px;height:15px;" placeholder="Tu Cédula / Your Identification Card" class="form-control" required maxlength="10" onkeypress="return solonumero(event)" onblur="validarDocumento()" />
                                    </div>
                                     </div>
                                      </div>
                                        <br>
                                      <br>
                                    <div class="row">
                                       <div class="btn-ground col-md-6">
                                     <div class="input-group" style="text-align:center;">
                                     <h4 for="name" class="" style="color:#0B0B61#0B0B61; position:absolute; right: 560px;"> Teléfono:  </h4>
                                       
                                       <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                       <input type="text" name="num_telefono" id="num_telefono" style="width:500px;height:15px;" placeholder="Tu Teléfono / Your Phone" class="form-control" maxlength="10" onkeypress="return solonumero(event)"/>
                                    </div>
                                    </div>
                                    </div>
                                      <br>
                                      <br>
                                      <div class="row">
                                       <div class="btn-ground col-md-6">
                                     <div class="input-group" style="text-align:center;">
                                     <h4 for="name" class="" style="color:#0B0B61; position:absolute; right: 560px;">Dirección:  </h4>
                                       
                                       <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                        <input type="text" name="direccion" id="direccion" style="width:500px;height:15px;" placeholder="Tu Dirección / Your Address" class="form-control"/>
                                    </div>
                                     </div>
                                      </div>
                                      <br>
                                      <br>
                                         <div class="row">
                                       <div class="btn-ground col-md-6">
                                    <div class="input-group" style="text-align:center;">
                                    <h4 for="name" class="" style="color:#0B0B61; position:absolute; right: 560px;"><font color="red">*</font> E-mail:  </h4>
                                     
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                        <input type="text" name="correo" id="correo" style="width:500px;height:15px;" placeholder="Tu Correo Electrónico / Your Email" class="form-control" maxlength="30" required onblur="validarEmail()"/>
                                    </div>
                                     </div>
                                      </div>
                                      <br>
                                      <br>
                                       <div class="row">
                                       <div class="btn-ground col-md-6">
                                     <div class="input-group" style="text-align:center;">
                                     <h4 for="name" class="" style="color:#0B0B61; position:absolute; right: 560px;"><font color="red">*</font> Contraseña:  </h4>
                                      
                                       <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" name="clave" id="clave" style="width:500px;height:15px;" placeholder="Tu Contraseña / Your Password" class="form-control" required maxlength="20" onkeypress="return contra(event);" onblur="validarTamaño1()"/>
                                    </div>
                                    </div>
                                    </div>
                                    <br>
                                      <br>
                                     <div class="row">
                                       <div class="btn-ground col-md-6">
                                     <div class="input-group" style="text-align:center;">
                                     <h4 for="name" class="" style="color:#0B0B61; position:absolute; right: 560px;"><font color="red">*</font> Repetir Contraseña: </h4>
                                        
                                       <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" name="clave1" id="clave1" style="width:500px;height:15px;" placeholder="Confirma tu Contraseña / Repeat Your Password" class="form-control" maxlength="20" required onkeypress="return contra(event);" onblur="return comprobarClave()"
                                        />
                                    </div>
                                    </div>
                                    </div>
                                    
                                   
                                
                                    <br>
                                     <button type="submit" name="enviar" id="enviar" class="btn-danger btn-md btn-block" style="width:540px;height:60px;">Registrar</button>   
                           
                           </div>
                            <div class="btn-ground col-md-6" align="center">
                
                                     <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/margarita.png");?>" style="width: 500px;height:500px; "> 
                                </div>
                            </div>
                       </div>
                        </form>
                         </div>
                         
                    </div>
            
            <!--//Fin Galeria-->
        
    
</div>
</section>



<script>
        $(document).ready(function (){
          $('.solo-numero').keyup(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
          });
        });
 </script>


<script type="text/javascript">
   validarDocumento  = function() {
      numero = document.getElementById('cedula').value;
    /* alert(numero); */
      var suma = 0;
      var residuo = 0;
      var pri = false;
      var pub = false;
      var nat = false;
      var numeroProvincias = 22;
      var modulo = 11;
      /* Verifico que el campo no contenga letras */
      var ok=1;
      for (i=0; i<numero.length && ok==1 ; i++){
         var n = parseInt(numero.charAt(i));
         if (isNaN(n)) ok=0;
      }
      if (ok==0){
         alert("No puede ingresar caracteres en el número");
         document.forms[0].cedula.value="";
         return false;
      }
      if (numero.length < 10 && numero.length >0 ){
         alert('El número ingresado no es válido');
         document.forms[0].cedula.value="";
         return false;
      }
      /* Los primeros dos digitos corresponden al codigo de la provincia */
      provincia = numero.substr(0,2);
      if (provincia < 1 || provincia > numeroProvincias){
         //alert('El código de la provincia (dos primeros dígitos) es inválido');
         document.forms[0].cedula.value="";
     return false;
      }
      /* Aqui almacenamos los digitos de la cedula en variables. */
      d1  = numero.substr(0,1);
      d2  = numero.substr(1,1);
      d3  = numero.substr(2,1);
      d4  = numero.substr(3,1);
      d5  = numero.substr(4,1);
      d6  = numero.substr(5,1);
      d7  = numero.substr(6,1);
      d8  = numero.substr(7,1);
      d9  = numero.substr(8,1);
      d10 = numero.substr(9,1);
      /* El tercer digito es: */
      /* 9 para sociedades privadas y extranjeros   */
      /* 6 para sociedades publicas */
      /* menor que 6 (0,1,2,3,4,5) para personas naturales */
      if (d3==7 || d3==8){
         alert('El tercer dígito ingresado es inválido');
         document.forms[0].cedula.value="";
         return false;
      }
      /* Solo para personas naturales (modulo 10) */
      if (d3 < 6){
         nat = true;
         p1 = d1 * 2;  if (p1 >= 10) p1 -= 9;
         p2 = d2 * 1;  if (p2 >= 10) p2 -= 9;
         p3 = d3 * 2;  if (p3 >= 10) p3 -= 9;
         p4 = d4 * 1;  if (p4 >= 10) p4 -= 9;
         p5 = d5 * 2;  if (p5 >= 10) p5 -= 9;
         p6 = d6 * 1;  if (p6 >= 10) p6 -= 9;
         p7 = d7 * 2;  if (p7 >= 10) p7 -= 9;
         p8 = d8 * 1;  if (p8 >= 10) p8 -= 9;
         p9 = d9 * 2;  if (p9 >= 10) p9 -= 9;
         modulo = 10;
      }
      /* Solo para sociedades publicas (modulo 11) */
      /* Aqui el digito verficador esta en la posicion 9, en las otras 2 en la pos. 10 */
      else if(d3 == 6){
         pub = true;
         p1 = d1 * 3;
         p2 = d2 * 2;
         p3 = d3 * 7;
         p4 = d4 * 6;
         p5 = d5 * 5;
         p6 = d6 * 4;
         p7 = d7 * 3;
         p8 = d8 * 2;
         p9 = 0;
      }
      /* Solo para entidades privadas (modulo 11) */
      else if(d3 == 9) {
         pri = true;
         p1 = d1 * 4;
         p2 = d2 * 3;
         p3 = d3 * 2;
         p4 = d4 * 7;
         p5 = d5 * 6;
         p6 = d6 * 5;
         p7 = d7 * 4;
         p8 = d8 * 3;
         p9 = d9 * 2;
      }
      suma = p1 + p2 + p3 + p4 + p5 + p6 + p7 + p8 + p9;
      residuo = suma % modulo;
      /* Si residuo=0, dig.ver.=0, caso contrario 10 - residuo*/
      digitoVerificador = residuo==0 ? 0: modulo - residuo;
      /* ahora comparamos el elemento de la posicion 10 con el dig. ver.*/
      if (pub==true){
         if (digitoVerificador != d9){
            alert('La cédula del usuario es incorrecta.');
            document.forms[0].cedula.value="";
            return false;
         }
         /* El ruc de las empresas del sector publico terminan con 0001*/
         if ( numero.substr(9,4) != '0001' ){
            alert('El ruc de la empresa del sector público debe terminar con 0001');
            document.forms[0].cedula.value="";
            return false;
         }
      }
      else if(pri == true){
         if (digitoVerificador != d10){
            alert('La cédula del usuario es es incorrecta.');
            document.forms[0].cedula.value="";
            return false;
         }
         if ( numero.substr(10,3) != '001' ){
            alert('El ruc de la empresa del sector privado debe terminar con 001');
            document.forms[0].cedula.value="";
            return false;
         }
      }
      else if(nat == true){
         if (digitoVerificador != d10){
            alert('El número de cédula es incorrecto.');
            document.forms[0].cedula.value="";
            return false;
         }
         if (numero.length >10 && numero.substr(10,3) != '001' ){
            alert('El ruc de la persona natural debe terminar con 001');
            document.forms[0].cedula.value="";
            return false;
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
            return false;
        }
    }
</script>

<script>
 validarEmail=function() {
    valor = document.getElementById('correo').value;
  if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)){
  } else {
   alert("La dirección de email es incorrecta!.");
   document.forms[0].correo.value="";
  }
}
</script>

<script>
  validarFechaMenorActual=function(){
    date = document.getElementById('fecha').value;
      var x=new Date();
      var fec = date.split("/");
      x.setFullYear(fec[2],fec[1]-1,fec[0]);
      var today = new Date();
}
</script>

<script>
    validarTamaño1  = function() {
        num = document.getElementById('clave').value;
        if(num.length<6 && num.length>0){
            alert('la contraseña debe ser mayor a 5 caracteres.');
            document.forms[0].contraseña.value="";
            return false;
        }else{
            return true;
        }
        return true;
    }
</script>

<script>
    validarFecha  = function() {
        fecha = document.getElementById('fecha').value;
        console.log(fecha);
        valuesStart=fecha.split("-");
        //FECHA MINIMA
        fechaFinal=("1940-01-01");
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
        if(dateStart<=dateEnd){
            alert('la fecha es incorrecta.');
            document.forms[0].fecha.value="";
            return false;
        }else{
              if (dateStart>=datePasada) {
              alert('la fecha es superior a la fecha actual.');
              document.forms[0].fecha.value="";
              return false;
            }else{
              return true;
            }
        }
        return true;
    }
</script>

<script>
function comprobarClave(){ 
    clave1  = document.getElementById('clave').value; 
    clave2  = document.getElementById('clave1').value;
    if (clave1 == clave2) {
       // alert("Las dos claves son iguales...\nRealizaríamos las acciones del caso positivo") 
    }
    else {
        alert("Las contraseñas no coindicen");
        //swal("Usuario Registrado","Ahora puedes acceder a nuestros beneficios","success");
    }
} 
</script>

<script>
function MensajeR(){ 
direccion = document.getElementById('direccion').value;
if((/^\s+|\s+$/).test(direccion) )
{
    
    alert("Ingrese una dirección valida");
    document.forms[0].direccion.value="";
    
}
else
{
    swal("Usuario Registrado","Ahora puedes acceder a nuestros beneficios","success");
}
            
} 
</script>

<script>
    function contra(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = "0123456789áéíóúabcdefghijklmnñopqrstuvwxyz@!";
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







