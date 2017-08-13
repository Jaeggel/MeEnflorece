<section id="team">
  <!-- Team BEGIN -->
  <div class="portfolio">
    <div class="container">
      <div class="heading">
        <h2>Flores <strong>Me Enflorece</strong></h2>
        <h3>Escoge las flores que desees para tu armar tu ramo</h3>
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

  <div>
    <h4><p class="toggle toggled">Inicia Sesión para continuar tu compra<hr align="center" width="60%"></p></h4>

  </div>


  <div>
    <button type="submit" id="authe" class="form-control btn btn-primary boton-margen text-center"  onclick="location.href='<?php echo site_url('Flores/ingreso')?>'">Iniciar Sesión</button>
  </div>

  <div class="login-register">
    ¿Aun no tienes Cuenta? <a href="<?php echo site_url('Flores/registro') ?>">Registrate.</a>
  </div>



</div>


</div>



</div>
</div>
</section>

