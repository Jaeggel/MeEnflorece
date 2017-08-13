 <section id="team">

    <!-- Team BEGIN -->
    <div class="portfolio">
        <div class="container">
            <div class="heading">
                <h2>Mi Perfil<strong>Me Enflorece</strong></h2>
                <p>Accede a todos nuestros beneficios</p>
            </div><!-- //end heading -->

           
                                 <div class="btn-ground col-md-6" >
                             <ol class="breadcrumb">
                              <li class="active"> <a href="<?php echo site_url('Flores/perfil_usuario');?>">Perfil Usuario</a></li>
                            <li class="active">Mis Compras</li>
                          
                              </ol>
                              <br>
                               <h1 class="title" align="center">Compras Realizadas</h1>
                               <br>

                              <table class="table table-striped">
							
								<td>Fecha</td>
								<td>Destinatario</td>
								<td>Ramo</td>
								<td>Total</td>
								
							
                        <?php foreach ($flores as $flores_item): ?>
                                
                        		<tr>	
								<td><?php echo $flores_item['fecha'];?></td>
                                <td><?php echo $flores_item['nombre_dest'];?></td>
                                <td><?php echo $flores_item['nombre'];?></td>
                                <td><?php echo $flores_item['total'];?></td>
									
								</tr>
							
						
						<?php endforeach; ?>
           </table>
            <!--//Fin Galeria-->

        </div>
         <div class="img-circle" align="center">
                <br>
                <br>
                <br>
                                     <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/tarjeta.png");?>" style="width: 300px;height:300px; "> 
                                </div>
    </div>
</div>
</section>