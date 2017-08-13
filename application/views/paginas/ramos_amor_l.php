<section id="team">
    <!-- Team BEGIN -->
	<div class="portfolio">
        <div class="container">
            <div class="heading">
        		<h2>Ramos <strong>Me Enflorece</strong></h2>
        		<p>Enflorecete con los Ramos de Amor</p>
		</div><!-- //end heading -->
        <ol class="breadcrumb">
    		<li><a href="<?php echo site_url('/') ?>">Home</a></li>
			<li class="active">Galeria de Ramos</li>
		</ol>
		<!--Galeria-->
		<div class="container-fluid">
			<div class="row">
				<?php foreach ($flores as $flores_item): ?>

					<div class="tab-pane fade active in" id="tshirt" >
				        <div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?php echo base_url();?>Img_Flores/Arreglos/<?php echo $flores_item['id_articulo'];?>.jpg" WIDTH=180 HEIGHT=180 alt="">
										<h2>$<?php echo $flores_item['precio'];?></h2>
										<p><?php echo $flores_item['nombre']; ?></p>
										<a href="<?php echo site_url('flores/'.$flores_item['id_articulo']);?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>  Comprar</a>
									</div>
								</div>
								<br>
							</div>
						</div>
				<?php endforeach; ?>
			</div>
		</div>
		<!--//Fin Galeria-->
        </div>
    </div>
</section>