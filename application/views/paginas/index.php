    <!-- BEGIN INTRO SECTION -->
    <section id="intro">
        <div id="carousel-example-generic" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"> </li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner text-uppercase" role="listbox">
                <!-- First slide -->
                <div class="item carousel-item-one active">
                    <div class="container">
                        <h3 class="carousel-position-one animate-delay carousel-title-v1" data-animation="animated fadeInDown">
                            Me Enflorece
                        </h3>
                        <p class="carousel-position-two animate-delay carousel-subtitle-v1" data-animation="animated fadeInDown">
                            Una empresa Nueva <br> Escoge una variedad de ramos
                        </p>
                        <a href="<?php echo site_url("Flores/ramos");?>" class="carousel-position-three animate-delay btn-brd-white" data-animation="animated fadeInUp">Elige un Ramo</a>
                    </div>
                </div>

                <!-- Second slide -->
                <div class="item carousel-item-two">
                    <div class="container">
                        <h3 class="carousel-position-one animate-delay carousel-title-v2" data-animation="animated fadeInDown">
                            Ramos Creativos <br> Para toda Ocasión
                        </h3>
                        <p class="carousel-position-three animate-delay carousel-subtitle-v2" data-animation="animated fadeInDown">
                            Bodas,Bautizos,Cumpleaños
                        </p>
                    </div>
                </div>

                <!-- Third slide -->
                <div class="item carousel-item-three">
                    <div class="center-block">
                        <div class="center-block-wrap">
                            <div class="center-block-body">
                                <h3 class="margin-bottom-20 animate-delay carousel-title-v1" data-animation="animated fadeInDown">
                                    Personaliza tu Ramo
                                </h3>
                                <p class="margin-bottom-20 animate-delay carousel-title-v3" data-animation="animated fadeInDown">
                                    A tu gusto, compruebalo
                                </p>
                                <a href="<?php echo site_url("Flores/pers_ramo_SS");?>" class="animate-delay btn-brd-white" data-animation="animated fadeInUp">Personaliza Ahora</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END INTRO SECTION -->

    <!-- BEGIN MAIN LAYOUT -->
    <div class="page-content">
        <!-- SUBSCRIBE BEGIN -->
        <div class="subscribe">
            <div class="container">
                <div class="subscribe-wrap">
                    <div class="subscribe-body subscribe-desc md-margin-bottom-30">
                        <h1>Registrate Gratis</h1>
                        <p>Para conocer nuestras ofertas, personalizar tu ramo y hacer tu pedido</p>
                    </div>
                    <div class="subscribe-body">
                        <form class="form-wrap input-field" action="<?php echo site_url('Flores/registro');?>">
                            <div class="form-wrap-group">
                                <button type="submit" class="btn-danger btn-md btn-block" accesskey="c">Registrate</button>
                             <a href="<?php echo site_url('Flores/ingreso');?>">¿Ya tienes una Cuenta? Ingresa al Sistema</a>
                            </div>

                           </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- SUBSCRIBE END -->

        <!-- BEGIN ABOUT SECTION -->
        <section id="about">
            <!-- Services BEGIN -->
            <div class="container service-bg">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="services sm-margin-bottom-100">
                            <div class="services-wrap">
                                <div class="service-body">
                                    <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/icon1.png");?>" alt="">
                                </div>
                            </div>
                            <h2>Variedad</h2>
                            <p>Tenemos a disposición <br> una gran variedad de Flores y Ramos</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services sm-margin-bottom-100">
                            <div class="services-wrap">
                                <div class="service-body">
                                    <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/icon2.png");?>" alt="">
                                </div>
                            </div>
                            <h2>Pago Seguro</h2>
                            <p>El proceso de pago <br>es rápido y confiable</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services">
                            <div class="services-wrap">
                                <div class="service-body">
                                    <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/icon3.png");?>" alt="">
                                </div>
                            </div>
                            <h2>Arma tu Ramo</h2>
                            <p>Puedes armar tu Ramo<br> con las flores que tú elijas</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services END -->
        </section>
        <!-- END ABOUT SECTION -->

        <!-- BEGIN FEATURES SECTION -->
        <section id="features">
            <!-- Features BEGIN -->
            <div class="features-bg">
                <div class="container">
                    <div class="heading">
                        <h2>Caraterísticas <strong>Me Enflorece</strong></h2>
                        <p>Nuestras ventajas frente a otras marcas</p>
                    </div><!-- //end heading -->

                    <!-- Features -->
                    <div class="row margin-bottom-70">
                        <div class="col-md-6 md-margin-bottom-70">
                            <div class="features">
                                <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/calendar.png");?>" style="width: 220px;height:220px; " alt="">
                                <div class="features-in">
                                    <h3><a href="#">Día de Entrega</a></h3>
                                    <p>Puedes seleccionar la fecha y la hora del día en que se realizará la entrega del ramo</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features">
                                <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/placeholder.png");?>" style="width: 220px;height:220px;" alt="">
                                <div class="features-in">
                                    <h3><a href="#">Lugar de Entrega</a></h3>
                                    <p>La entrega se la realiza en el lugar que tu requieras el ramo</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- //end row -->
                    <div class="row margin-bottom-80">
                        <div class="col-md-6 md-margin-bottom-70">
                            <div class="features">
                                <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/atm.png");?>" style="width: 220px;height:220px;"  alt="">
                                <div class="features-in">
                                    <h3><a href="#">Pago Seguro</a></h3>
                                    <p>El proceso de pago del ramo es rápido y seguro</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features">
                                <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/confetti.png");?>"  style="width: 220px;height:220px;" alt="">
                                <div class="features-in">
                                    <h3><a href="#">Ramos por Ocasión</a></h3>
                                    <p>Tenemos una gran varieda de ramos, los cuales los hemos categorizado dependiendo a la ocasión</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- //end row -->
                    <!-- End Features -->
                </div>
            </div>
            <!-- Features END -->
        </section>
        <!-- END FEATURES SECTION -->


        <!-- BEGIN CLIENTS SECTION -->
        <section id="clients">
            <div class="clients">
                <div class="clients-bg">
                    <div class="container">
                        <div class="heading-blue">
                            <h2>Frases para Acompañar con el Regalo</h2>
                            <p>Regalar una flor es un acto lleno de significados. Ya que es algo a lo que a veces no le prestamos la suficiente atención, Las flores marcan un estado de ánimo en nosotros tanto si regalamos una flor a alguien como si somos los receptores de tan tradicional regalo.</p>
                        </div><!-- //end heading -->

                        <!-- Owl Carousel -->
                        <div class="owl-carousel">
                            <div class="item" data-quote="#client-quote-1">
                                <img src="<?php echo base_url("theme/assets/onepage2/img/clients/plant.png");?>" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-2">
                                <img src="<?php echo base_url("theme/assets/onepage2/img/clients/plant.png");?>" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-3">
                                <img src="<?php echo base_url("theme/assets/onepage2/img/clients/plant.png");?>" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-4">
                                <img src="<?php echo base_url("theme/assets/onepage2/img/clients/plant.png");?>" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-5">
                                <img src="<?php echo base_url("theme/assets/onepage2/img/clients/plant.png");?>" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-6">
                                <img src="<?php echo base_url("theme/assets/onepage2/img/clients/plant.png");?>" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-7">
                                <img src="<?php echo base_url("theme/assets/onepage2/img/clients/plant.png");?>" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-8">
                                <img src="<?php echo base_url("theme/assets/onepage2/img/clients/plant.png");?>" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-9">
                                <img src="<?php echo base_url("theme/assets/onepage2/img/clients/plant.png");?>" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-10">
                                <img src="<?php echo base_url("theme/assets/onepage2/img/clients/plant.png");?>" alt="">
                            </div>
                        </div>
                        <!-- End Owl Carousel -->
                    </div>
                </div>

                <!-- Clients Quotes -->
                <div class="clients-quotes">
                    <div class="container">
                        <div class="client-quote" id="client-quote-1">
                            <p>Envíame flores mientras estoy viva. No me harán ningún bien después de que muera.</p>
                            <span>Joan Crawford</span>
                        </div>
                        <div class="client-quote" id="client-quote-2">
                            <p>Sonrío como una flor, no sólo con mis labios, sino con todo mi ser.</p>
                            <span>Rumi</span>
                        </div>
                        <div class="client-quote" id="client-quote-3">
                            <p>Sé como una flor que da su fragancia incluso a la mano que la aplastó.</p>
                            <span>Ali ibn Abi Talib</span>
                        </div>
                        <div class="client-quote" id="client-quote-4">
                            <p>Nos podemos quejar porque los rosales tienen espinas, o regocijarnos porque los arbustos espinosos tienen rosas.</p>
                            <span>Abraham Lincoln</span>
                        </div>
                        <div class="client-quote" id="client-quote-5">
                            <p>Como flores hermosas, con color, pero sin aroma, son las dulces palabras para el que no obra de acuerdo con ellas.</p>
                            <span>Buda</span>
                        </div>
                        <div class="client-quote" id="client-quote-6">
                            <p>El amor es la única flor que crece y florece sin la ayuda de las estaciones.</p>
                            <span>Khalil Gibran</span>
                        </div>
                        <div class="client-quote" id="client-quote-7">
                            <p>Cuando la flor florece, las abejas no son invitadas.</p>
                            <span>Ramakrishna</span>
                        </div>
                        <div class="client-quote" id="client-quote-8">
                            <p>La mente puede ir en mil direcciones, pero en este hermoso sendero, camino en paz. Con cada paso, el viento sopla. Con cada paso, una flor florece.</p>
                            <span>Nhat Hanh</span>
                        </div>
                        <div class="client-quote" id="client-quote-9">
                            <p>¿Me preguntas por qué compro arroz y flores? Compro arroz para vivir y flores para tener algo por lo que vivir.</p>
                            <span>Confucio</span>
                        </div>
                        <div class="client-quote" id="client-quote-10">
                            <p>La gratitud, como ciertas flores, no se da en la altura y mejor reverdece en la tierra buena de los humildes.</p>
                            <span>José Martí</span>
                        </div>
                    </div>
                </div>
                <!-- End Clients Quotes -->
            </div>
        </section>
        <!-- END CLIENTS SECTION -->

        <!-- BEGIN TEAM SECTION -->
        <section id="team">
            <!-- Team BEGIN -->
            <div class="team-bg parallax">
                <div class="container">
                    <div class="heading-light">
                        <h2>Flores Individuales</strong></h2>
                    </div><!-- //end heading -->

                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="team-members"><a href="<?php echo site_url('Flores/floresInd');?>">
                                        <div class="team-avatar">
                                            <img class="img-responsive" src="<?php echo base_url("theme/assets/onepage2/img/member/1.jpg");?>" alt="">
                                        </div>
                                        <div class="team-desc">
                                            <div class="team-details">
                                                <h4>Gerbera Rosa</h4>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="team-members">
                                        <div class="team-avatar"><a href="<?php echo site_url('Flores/floresInd');?>">
                                            <img class="img-responsive" src="<?php echo base_url("theme/assets/onepage2/img/member/4.jpg");?>" alt="">
                                        </div>
                                        <div class="team-desc">
                                            <div class="team-details">
                                                <h4>Gerbera Amarilla</h4>
                                            </div>
                                        </div>
                                         </a>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="team-members">
                                        <div class="team-avatar"><a href="<?php echo site_url('Flores/floresInd');?>">
                                            <img class="img-responsive" src="<?php echo base_url("theme/assets/onepage2/img/member/6.jpg");?>" alt="">
                                        </div>
                                        <div class="team-desc">
                                            <div class="team-details">
                                                <h4>Cosmos Rosa</h4>
                                            </div>
                                        </div>
                                         </a>
                                    </div>
                                </div>
                            </div><!-- //end row -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="team-members">
                                        <div class="team-avatar"><a href="<?php echo site_url('Flores/floresInd');?>">
                                            <img class="img-responsive" src="<?php echo base_url("theme/assets/onepage2/img/member/8.jpg");?>" alt="">
                                        </div>
                                        <div class="team-desc">
                                            <div class="team-details">
                                                <h4>Clavel</h4>
                                            </div>
                                        </div>
                                         </a>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="team-members">
                                        <div class="team-avatar"><a href="<?php echo site_url('Flores/floresInd');?>">
                                            <img class="img-responsive" src="<?php echo base_url("theme/assets/onepage2/img/member/10.jpg");?>" alt="">
                                        </div>
                                        <div class="team-desc">
                                            <div class="team-details">
                                                <h4>Margarita</h4>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="team-members">
                                        <div class="team-avatar"><a href="<?php echo site_url('Flores/floresInd');?>">
                                            <img class="img-responsive" src="<?php echo base_url("theme/assets/onepage2/img/member/7.jpg");?>" alt="">
                                        </div>
                                        <div class="team-desc">
                                            <div class="team-details">
                                                <h4>Narciso</h4>
                                            </div>

                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div><!-- //end row -->
                        </div>
                        <div class="col-md-4">
                            <div class="team-about">
                                <h3>Regalar Rosas</h3>
                                <p>Las rosas rojas son las flores más conocidas y populares del mundo asociándose al amor y la amistad. Por otro lado, las rosas rojas, gracias a su increíble color y belleza, son perfectas para cualquier ocasión. </p>
                                <div class="margin-bottom-40"></div>
                                <h3>Regalar Flores Amarillas</h3>
                                <p>Las flores amarillas están cargadas de simbolismo positivo, pero este color no se debe regalar a una pareja, pues representaría que el amor ya no es tan fuerte y que el sentimiento es más parecido al de una amistad. Si se busca darle un obsequio a nuestra pareja, lo mejor es optar por las rosas rojas, símbolo del amor y la pasión.</p>
                                <div class="margin-bottom-40"></div>
                                <h3>Regalar Violetas</h3>
                                <p>representan la belleza interior, la lealtad. En la antigüedad, era símbolo de misterio, las fuerzas del cielo y de la tierra, la unión de cuerpo y mente.</p>
                            </div>
                        </div>
                    </div><!-- //end row -->
                </div>
            </div>
            <!-- Team END -->
        </section>
        <!-- END TEAM SECTION -->

        <!-- BEGIN PORTFOLIO SECTION -->
        <section id="portfolio">
            <div class="portfolio">
                <div class="container">
                    <div class="heading">
                        <h2>Algunos de nuestros <strong>Ramos</strong></h2>
                    </div>

                    <div class="cube-portfolio">
                        <div id="filters-container" class="cbp-l-filters-alignCenter">
                            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> Miscelánea</div>
                            <div data-filter=".ecommerce" class="cbp-filter-item"> Quarzo </div>
                            <div data-filter=".admin" class="cbp-filter-item"> Recife </div>
                            <div data-filter=".corporate" class="cbp-filter-item"> Deseo </div>
                            <div data-filter=".retail" class="cbp-filter-item"> Cariño </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 md-margin-bottom-50">
                                <div class="heading-left">
                                    <h2>
                                        <strong>Nuestros</strong>
                                        <br>
                                        Productos
                                    </h2>
                                    <p>Regalar flores se considera uno de los gestos más sofisticados de amor y amistad.Sorprende a tus amigos, pareja, compañeros de trabajo, familiares, etc., con un bonito ramo que exprese tus sentimientos, porque a quién no le gusta recibir flores inesperadamente.</p><br>
                                    <a href="<?php echo site_url('Flores/ramos');?>" class="btn-brd-primary">Ver Más</a>
                                    <a href="<?php echo site_url('Flores/pers_ramo');?>" class="btn-brd-primary">Armar Ramo</a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <!-- Cube Portfolio -->

                                <div id="grid-container" class="cbp-l-grid-agency">
                                    <div class="cbp-item ecommerce">
                                        <div class="cbp-caption">
                                            <div class="cbp-caption-hover-gradient">
                                                <img src="<?php echo base_url("theme/assets/onepage2/img/portfolio/4.jpg");?>" alt="">
                                            </div>
                                            <div class="cbp-caption-activeWrap">
                                                <div class="cbp-l-caption-alignCenter">
                                                    <div class="cbp-l-caption-body portfolio-icons">
                                                        <a href="<?php echo base_url("theme/assets/onepage2/img/portfolio/4.jpg");?>" class="cbp-lightbox" data-title="Quarzo"><i class="fa fa-search"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cbp-item admin">
                                        <div class="cbp-caption">
                                            <div class="cbp-caption-hover-gradient">
                                                <img src="<?php echo base_url("theme/assets/onepage2/img/portfolio/21.jpg");?>" alt="">
                                            </div>
                                            <div class="cbp-caption-activeWrap">
                                                <div class="cbp-l-caption-alignCenter">
                                                    <div class="cbp-l-caption-body portfolio-icons">
                                                        <a href="<?php echo base_url("theme/assets/onepage2/img/portfolio/21.jpg");?>" class="cbp-lightbox" data-title="Recife"><i class="fa fa-search"></i></a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cbp-item corporate">
                                        <div class="cbp-caption">
                                            <div class="cbp-caption-hover-gradient">
                                                <img src="<?php echo base_url("theme/assets/onepage2/img/portfolio/31.jpg");?>" alt="">
                                            </div>
                                            <div class="cbp-caption-activeWrap">
                                                <div class="cbp-l-caption-alignCenter">
                                                    <div class="cbp-l-caption-body portfolio-icons">
                                                        <a href="<?php echo base_url("theme/assets/onepage2/img/portfolio/31.jpg");?>" class="cbp-lightbox" data-title="Deseo"><i class="fa fa-search"></i></a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cbp-item retail">
                                        <div class="cbp-caption">
                                            <div class="cbp-caption-hover-gradient">
                                                <img src="<?php echo base_url("theme/assets/onepage2/img/portfolio/36.jpg");?>" alt="">
                                            </div>
                                            <div class="cbp-caption-activeWrap">
                                                <div class="cbp-l-caption-alignCenter">
                                                    <div class="cbp-l-caption-body portfolio-icons">
                                                        <a href="<?php echo base_url("theme/assets/onepage2/img/portfolio/36.jpg");?>" class="cbp-lightbox" data-title="Cariño"><i class="fa fa-search"></i></a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Cube Portfolio -->
                        </div>
                    </div><!-- //end row -->
                </div>
            </div>
        </section>
        <!-- END PORTFOLIO SECTION -->

        <!-- BEGIN PRICING SECTION -->
        <section id="pricing">
            <div class="pricing-bg">
                <div class="container">
                    <div class="heading">
                        <h2>Ocasiones para<strong> Regalar</strong></h2>
                        <P>Se han categorizado los ramos <br> para las distintas ocasiones que se presenten</P>
                    </div><!-- //end heading -->

                    <!-- Pricing -->
                    <div class="row no-space-row">
                        <div class="col-md-4">
                            <div class="pricing no-right-brd">
                                <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/aniver.png");?>" alt="">
                                <h4>Aniversario</h4>

                                <ul class="pricing-features">
                                    <li>El primer año de casados es uno</li>
                                    <li> de los mejores momentos para un</li>
                                    <li>matrimonio y se debe celebrar,</li>
                                    <li>como es tradición.</li>
                                </ul>
                                <button type="button" class="btn-brd-primary" onclick="location.href='<?php echo site_url('Flores/ramos_aniv')?>'">Ver</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pricing pricing-red">
                                <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/regalos.png");?>" alt="">
                                <h4>Regalos</h4>
                                <ul class="pricing-features">
                                    <li>Que mejor regalo que unas flores,</li>
                                    <li>un detalle bonito al que podemos</li>
                                    <li>acompañar de un mensaje oculto,</li>
                                    <li>según la flor que elijamos.</li>
                                </ul>
                                <button type="button" class="btn-brd-primary" onclick="location.href='<?php echo site_url('Flores/ramos_regalos')?>'">Ver</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pricing no-left-brd">
                                <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/perdon.png");?>" alt="">
                                <h4>Pedir Perdón</h4>

                                <ul class="pricing-features">
                                    <li>Para aquellas ocasiones en donde deseas reconciliarte,</li>
                                    <li>un ramo o un detalle con flores</li>
                                    <li>puede ayudarte a pedir perdón. </li>
                                </ul>
                                 <button type="button" class="btn-brd-primary" onclick="location.href='<?php echo site_url('Flores/ramos_perdon')?>'">Ver</button>
                            </div>
                        </div>
                    </div><!-- //end row -->
                    <!-- End Pricing -->
                </div>
            </div>
        </section>
        <!-- END PRICING SECTION --> 
   <script type="text/javascript">
        $(document).ready(function(){
    $('.carousel').carousel({
      interval: 3000
        })
    });
    </script>
