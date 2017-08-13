    <section id="team">
    <!-- Team BEGIN -->
    <div class="portfolio">
        <div class="container">
            <div class="heading">
                <h2>Mi Perfil<strong>Me Enflorece</strong></h2>
                <p>Accede a todos nuestros beneficios</p>
            </div><!-- //end heading -->

            <div class="row">
                                <div class="btn-ground col-md-6" >
                             <ol class="breadcrumb">
                              <li class="active">Perfil Usuario</li>
                            <li class="active"><a href="<?php echo site_url('Flores/compras');?>">Mis Compras</a></li>
                          
                              </ol>
                           
                        
                                     <h1 class="title" align="center">Bienvenido <?php echo $this->session->userdata("nombres")?> a su perfil de Administración</h1>
                                        <br>
                                    <h2 class="title">Datos personales:</h2>

                                    
                                    <h3 class="title">Nombre: <?php echo $this->session->userdata("nombres")?></h3>
                                    <h3 class="title">Apellido: <?php echo $this->session->userdata("apellidos")?></h3>
                                    <h3 class="title">Cédula: <?php echo $this->session->userdata("ci")?></h3>

                                    <h3 class="title">Teléfono: <?php echo $this->session->userdata("num_telefono")?></h3>
                                    <h3 class="title">Dirección: <?php echo $this->session->userdata("direccion")?></h3>

                                    <h3 class="title">Correo: <?php echo $this->session->userdata("correo")?></h3>     
                                </div>
                                <div class="btn-ground col-md-6" align="center">
                
                                     <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/user.png");?>" style="width: 300px;height:300px; "> 
                                </div>


           
            <!--//Fin Galeria-->
        </div>
    </div>
</div>
</section>








