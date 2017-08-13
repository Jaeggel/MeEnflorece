<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>MeEnflorece</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link rel="shortcut icon" href="<?php echo base_url("theme/assets/onepage2/img/logo_icono.png");?>">
<script type="text/javascript" src="<?php echo base_url("theme/assets/plugins/jquery-latest.js"); ?>"></script>
<link href="<?php echo base_url("theme/assets/onepage2/css/Hind.css");?>" rel='stylesheet' type='text/css'>
<link href="<?php echo base_url("theme/assets/plugins/font-awesome/css/font-awesome.min.css");?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url("theme/assets/plugins/simple-line-icons/simple-line-icons.min.css");?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url("theme/assets/plugins/bootstrap/css/bootstrap.min.css");?>" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="<?php echo base_url("theme/assets/plugins/bootstrap.min.js"); ?>"></script>

<link href="<?php echo base_url("theme/assets/onepage2/css/sweetalert.css");?>" rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo base_url("theme/assets/onepage2/css/sweetalert-dev.js");?>"></script>
<script type="text/javascript" src="<?php echo base_url("theme/assets/onepage2/css/sweetalert.min.js");?>"></script>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="<?php echo base_url("theme/assets/pages/css/animate.css");?>" rel="stylesheet">
<link href="<?php echo base_url("theme/assets/plugins/owl.carousel/assets/owl.carousel.css");?>" rel="stylesheet">
<link href="<?php echo base_url("theme/assets/plugins/cubeportfolio/cubeportfolio/css/cubeportfolio.min.css");?>" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url("theme/assets/onepage2/css/layout.css");?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url("theme/assets/onepage2/css/estilo.css");?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url("theme/assets/onepage2/css/carousel.css");?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url("theme/assets/onepage2/css/Quicksand.css");?>" rel="stylesheet">
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
<script type="text/javascript" src="<?php echo base_url("js/jquery.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("js/ramo.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("js/flor.js"); ?>"></script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-on-scroll" class to the body element to set fixed header layout -->
<body class="page-header-fixed">

    <!-- BEGIN MAIN LAYOUT -->
    <!-- Header BEGIN -->
    <header class="page-header">
        <nav class="navbar navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="toggle-icon">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url("/");?>" accesskey="h">
                        <img class="logo-default-scroll" src="<?php echo base_url("theme/assets/onepage2/img/logo_icono.png");?>" style="width: 40px;height:40px;">

                        <img class="logo-default-scroll" src="<?php echo base_url("theme/assets/onepage2/img/logo_default.png");?>" alt="Logo">



                    </a>
                </div>



                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">

                    <ul class="nav navbar-nav">

                        <li class="page-scroll active">
                            <a href='<?php echo site_url('/')?>'>Inicio</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ocasión
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo site_url("Flores/ramos_aniv");?>" style="color: #3f5263">
                                  <span class="item">
                                    <span class="item-left">
                                        <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/aniver.png");?>" style="width: 30px;height:30px;">
                                        <span class="item-info" href="#">
                                            <span>Aniversario</span>
                                        </span>
                                    </span>
                                </span>
                                </a>
                              </li>

                            <li>
                                <a href="<?php echo site_url("Flores/ramos_amor");?>" style="color: #3f5263">
                                  <span class="item">
                                    <span class="item-left">
                                        <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/amor.png");?>" style="width: 30px;height:30px;">
                                        <span class="item-info" href="#">
                                            <span>Amor</span>
                                        </span>
                                    </span>
                                </span>
                                </a>
                              </li>

                            <li>
                                <a href="<?php echo site_url("Flores/ramos_regalos");?>" style="color: #3f5263">
                                  <span class="item">
                                    <span class="item-left">
                                        <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/regalos.png");?>" style="width: 30px;height:30px;">
                                        <span class="item-info" href="#">
                                            <span>Regalos</span>
                                        </span>
                                    </span>
                                </span>
                                </a>
                              </li>

                              <li>
                                <a href="<?php echo site_url("Flores/ramos_amis");?>" style="color: #3f5263">
                                  <span class="item">
                                    <span class="item-left">
                                        <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/confetti-1.png");?>" style="width: 30px;height:30px;">
                                        <span class="item-info" href="#">
                                            <span>Amistad</span>
                                        </span>
                                    </span>
                                </span>
                                </a>
                              </li>

                              <li>
                                <a href="<?php echo site_url("Flores/ramos_perdon");?>" style="color: #3f5263">
                                  <span class="item">
                                    <span class="item-left">
                                        <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/perdon.png");?>" style="width: 30px;height:30px;">
                                        <span class="item-info" href="#">
                                            <span>Perdon</span>
                                        </span>
                                    </span>
                                </span>
                                </a>
                              </li>
                            </ul>

                        </li>
                        <li class="page-scroll">
                            <a href="<?php echo site_url("Flores/ramos");?>" accesskey="r">Ramos</a>
                        </li>
                        <li class="page-scroll">
                            <a href="<?php echo site_url("Flores/pers_ramo_SS");?>" accesskey="p">Arma tu Ramo</a>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ayuda
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li>
                                <a href="#" data-toggle="modal" data-target="#como_comprar" style="color: #3f5263">
                                  <span class="item">
                                    <span class="item-left">
                                        <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/compra.png");?>" style="width: 30px;height:30px;">
                                        <span class="item-info" href="">
                                            <span>¿Cómo Comprar un Ramo?</span>
                                        </span>
                                    </span>
                                </span>
                                </a>
                              </li>

                            <li>
                                <a href="#" data-toggle="modal" data-target="#cuidado" style="color: #3f5263">
                                  <span class="item">
                                    <span class="item-left">
                                        <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/sprout.png");?>" style="width: 30px;height:30px;">
                                        <span class="item-info" href="#" data-toggle="modal" data-target="#product_view">
                                            <span>Cuidado del Ramo</span>
                                        </span>
                                    </span>
                                </span>
                                </a>
                              </li>
                              <li>
                                <a href="#" data-toggle="modal" data-target="#signif" style="color: #3f5263">
                                  <span class="item">
                                    <span class="item-left">
                                        <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/icon3.png");?>" style="width: 30px;height:30px;">
                                        <span class="item-info" href="#" data-toggle="modal" data-target="#product_view">
                                            <span>Significado Floral</span>
                                        </span>
                                    </span>
                                </span>
                                </a>
                              </li>
                                <li>
                                <a href="#" data-toggle="modal" data-target="#combinacion" style="color: #3f5263">
                                  <span class="item">
                                    <span class="item-left">
                                        <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/coding.png");?>" style="width: 30px;height:30px;">
                                        <span class="item-info" href="#" data-toggle="modal" data-target="#product_view">
                                            <span>Teclas de Accesso Rápido</span>
                                        </span>
                                    </span>
                                </span>
                                </a>
                              </li>
                            </ul>
                        </li>

                        <li class="page-scroll">
                            <a href="#contact">Contactos</a>
                        </li>
                        <li class="page-scroll">
                            <a href="<?php echo site_url("Flores/ingreso");?>" accesskey="i">Inicia Sesión</a>
                        </li>

 <!-- TRADUCTOR///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->



                    </ul>

                </div>

                             <div id="google"></div>
                             <script type="text/javascript">
                                function googleTranslateElementInit()
                                {
                                      new google.translate.TranslateElement({pageLanguage: 'es', includedLanguages: 'en,it', autoDisplay: false}, 'google');
                                    }
                                </script>
                                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">

                                </script>

                <!-- End Navbar Collapse -->
                <div class="modal fade product_view" id="como_comprar">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                        <h3 class="modal-title">¿Como Comprar un Ramo Me Enflorece?</h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 product_img">
                            <ul>
                                <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/cashier.png");?>" class="img-responsive" alt="" style="width: 120px;height:120px;">
                                <br></br>
                                <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/credit-card.png");?>" class="img-responsive" alt="" style="width: 120px;height:120px;">
                                <br></br>
                            </ul>

                            </div>
                            <div class="col-md-8 product_content">
                                <h3>Estos son los pasos a seguir para comprar un Ramo:</h3>
                                 <ol>
                                  <li>Si ya posees una cuenta,<a href='<?php echo site_url('Flores/ingreso')?>'> Inicia Sesión</a>, caso contrario <a href='<?php echo site_url('Flores/registro')?>'>Registrate</a> e <a href='<?php echo site_url('Flores/ingreso')?>'> Inicia Sesión</a> con tu Número de Cédula y Contraseña.</li>
                                  <li>Elige un Ramo, puedes seleccionar desde nuestra <a href='<?php echo site_url('Flores/ramos')?>'>Galeria Completa</a>, Galerias por Ocasiones, o puedes <a href='<?php echo site_url('Flores/pers_ramo')?>'>Armar Tu Ramo</a>.</li>
                                  <li>Una vez que hayas presionado comprar en el Ramo requerido, procede a ingresar la información necesaria para la entrega de tu pedido.</li>
                                  <li>Finalmente, procede a ingresar la información necesaria referente a la tarjeta que vas a ingresar. <strong>Procura ingresar una Tarjeta de Crédito Valida.</strong></li>
                                </ol>

                            </div>
                            <div class="row">
                                <div class="btn-ground col-md-6" align="center">
                                    <button type="button" class="btn btn-primary" onclick="location.href='<?php echo site_url('Flores/ramos')?>'"><span class="glyphicon glyphicon-shopping-cart"></span> Elige un Ramo</button>
                                </div>
                                <div class="btn-ground col-md-6" align="center">
                                    <button type="button" class="btn btn-primary"  onclick="location.href='<?php echo site_url('Flores/pers_ramo')?>'"><span class="glyphicon glyphicon-heart"></span> Arma tu Ramo</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="modal fade product_view" id="cuidado">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                        <h3 class="modal-title">Información para Cuidar el Ramo</h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 product_img">
                            <ul>
                                <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/sprout.png");?>" class="img-responsive" alt="" style="width: 120px;height:120px;">
                                <br></br>
                                <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/tulip.png");?>" class="img-responsive" alt="" style="width: 120px;height:120px;">
                                <br></br>
                            </ul>

                            </div>
                            <div class="col-md-8 product_content">
                                <h3>Las rosas están vivas y agradecerán un poco de mimo:</h3>
                                <ul>
                                    <li><strong>Luz indirecta: <strong>A las rosas les gusta la luz, pero evita que sea directa del sol.</li>
                                    <li><strong>Agua limpia: </strong>Se recomienda cambiarla cada tres días.</li>
                                    <li><strong>Cortar el tallo: </strong>Córtalo en diagonal cada tres días para que la rosa pueda tomar agua.</li>
                                    <li><strong>Mejor brillo: </strong>Si quieres un rojo más brillante e intenso, pon una aspirina o azúcar en el agua. Si además difuminas agua sobre los pétalos las flores se abrirán mucho mejor para mostrar toda su belleza.</li>
                                </ul>
                                <h4>
                                    Estos consejos junto al cuidado de <strong>Me Enflorece</strong> en la calidad y frescura de tus rosas crean un regalo especial cada día.
                                </h4>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="btn-ground col-md-6" align="center">
                                    <button type="button" class="btn btn-primary" onclick="location.href='<?php echo site_url('Flores/ramos')?>'"><span class="glyphicon glyphicon-shopping-cart"></span> Elige un Ramo</button>
                                </div>
                                <div class="btn-ground col-md-6" align="center">
                                    <button type="button" class="btn btn-primary"  onclick="location.href='<?php echo site_url('Flores/pers_ramo')?>'"><span class="glyphicon glyphicon-heart"></span> Arma tu Ramo</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="modal fade product_view" id="combinacion">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                        <h3 class="modal-title">Teclas de Acceso Rápido</h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 product_img">
                            <ul>
                                <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/coffee.png");?>" class="img-responsive" alt="" style="width: 120px;height:120px;">
                                <br></br>
                                <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/clock.png");?>" class="img-responsive" alt="" style="width: 120px;height:120px;">
                                <br></br>
                            </ul>

                            </div>
                            <div class="col-md-8 product_content">
                                <h3>Las combinaciones de teclas para acceder más rápido a nuestros servicios:</h3>
                                 <ul>
                                  <li>ALT + H<a href='<?php echo site_url('/')?>'> Home</a></li>
                                  <li>ALT + R<a href='<?php echo site_url('Flores/ramos')?>'> Ramos</a></li>
                                  <li>ALT + P<a href='<?php echo site_url('Flores/pers_ramo_SS')?>'> Armar Tu Ramo</a></li>
                                  <li>ALT + C<a href='<?php echo site_url('Flores/registro')?>'> Registro</a></li>
                                  <li>ALT + I<a href='<?php echo site_url('Flores/ingreso')?>'> Iniciar Sesión</a></li>
                                 </ul>
                                  <h3> Una vez ingresado en el sistema: </h3>
                                <ul>
                                  <li>ALT + U Perfil de Usuario</li>
                                  <li>ALT + P Armar Tu Ramo</li>
                                  <li>ALT + R Ramos</li>
                                  <li>ALT + H Cerrar Sesión</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="modal fade product_view" id="signif">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                        <h3 class="modal-title">Significado Floral</h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 product_img">
                            <ul>
                                <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/poppy.png");?>" class="img-responsive" alt="" style="width: 120px;height:120px;">
                                <br></br>
                                <img src="<?php echo base_url("theme/assets/onepage2/img/widgets/pinwheel.png");?>" class="img-responsive" alt="" style="width: 120px;height:120px;">
                                <br></br>
                            </ul>

                            </div>
                            <div class="col-md-8 product_content">
                                <h4>Significado Floral</h4>
                                <p>El lenguaje de las flores tiene sus peculiaridades, aunque en este caso la Rosa Roja tiene un significado muy marcado.
                                Las Rosas Rojas son las predilectas para simbolizar el romanticismo, lleno de pasión y profundos sentimientos. Tanto si son enviadas o se las entregamos personalmente a su destinatario, sabemos que su efecto será arrebatador.</p>
                                <h4>Elaboración</h4>
                                <p>Todos nuestros ramos se conciben con flores frescas por uno de nuestros floristas artesanos.</p>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                                <div class="btn-ground col-md-6" align="center">
                                    <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart" href="<?php echo site_url("Flores/ramos");?>"></span> Elige un Ramo</button>
                                </div>
                                <div class="btn-ground col-md-6" align="center">
                                    <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart" href="<?php echo site_url("Flores/pers_ramo");?>"></span> Arma tu Ramo</button>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
    </div>
            </div>
            <!--/container-->
        </nav>

    </header>
