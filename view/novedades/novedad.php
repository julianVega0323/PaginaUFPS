<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
<!--<![endif]-->

<head>
    <title>UFPS - Cúcuta</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="Shortcut icon">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <link type="text/css" rel="stylesheet" href="./assets/css/bootstrap.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/ie8.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/blocks.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/plugins.min.css">
    <link type="text/css" rel="stylesheet" href="./assets/css/style.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/app.min.css">
    <link type="text/css" rel="stylesheet" href="./assets/css/shop.plugins.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/shop.blocks.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/style-switcher.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/shop.style.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/header-v6.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/header-v8.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/header.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/footer-v1.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/animate.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/line-icons.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="./assets/css/owl.carousel.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/horizontal-parallax.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/layerslider.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/ured.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/jquery.mCustomScrollbar.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/sky-forms.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/custom-sky-forms.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/profile.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/brand-buttons.min.css">
    <link type="text/css" rel="stylesheet" href="./assets/css/brand-buttons-inversed.min.css">

    <link type="text/css" rel="stylesheet" href="./assets/css/hover.min.css">
    <link type="text/css" rel="stylesheet" href="./assets/css/custom-hover-effects.min.css">
    <link type="text/css" rel="stylesheet" href="./assets/css/custom.min.css">
    <link type="text/css" rel="stylesheet" href="./assets/css/pgwslider.min.css">


</head>
<?php
require_once('./controller/novedadController.php');
$a = new  NovedadController();

$novedad = $a->read();
$num = count($a->read()) / 2;

?>

<body class="header-fixed boxed-layout" style="position: relative; min-height: 100%; top: 0px;">
    <div class="wrapper">
        <?php
        include("./view/shared/menu.php");
        ?>
        <div class="container content profile">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Novedades</li>
                </ol>
            </nav>
            <div class="row margin-bottom-30">
                <div id="informacionContent" class="col-md-9 mb-margin-bottom-30 shadow-wrapper">

                    <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom:10px; border-bottom: 3px solid #aa1916; padding: 0;">
                        <h1 class="pull-left" style="font-size:36px;">Novedades</h1>
                    </div>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 0; $i < $num; $i++) { ?>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 style="text-transform: none;">
                                                    <a href="?novedad=<?= $novedad[$i]['id'] ?>"><b><?= $novedad[$i]['texto'] ?></b> </a>
                                                </h4>
                                                <p style="display:inline;">
                                                    <i style="text-transform: none; color: #AA1916;">
                                                        <i class="fa fa-calendar"></i> (Publicado, <?= $novedad[$i]['fecha'] ?>)
                                                    </i>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php }
                        ?>
                        </tbody>
                    </table>

                </div><!-- row margin-bottom-30-->

            </div>
        </div>

        <!-- EVENTOS ---------------------->

        <!-- FIN EVENTOS --->

        <!-- NOVEDADES -->

        <!-- FIN DESTACADOS -->

        <!-- ICONOS REDES SOCIALES -->
        <div class="cuadroredes">
            <ul class="social-icons social-icons-color margin-top-10">
                <li class="tooltips" data-toggle="tooltip" data-placement="bottom" data-original-title="Síguenos en Facebook"><a href="https://www.facebook.com/UFPS-C%C3%BAcuta-553833261409690" class="rounded social_facebook"></a>
                </li>
                <li class="tooltips" data-toggle="tooltip" data-placement="bottom" data-original-title="Síguenos en Twitter"><a href="https://twitter.com/UFPSCUCUTA" class="rounded social_twitter"></a></li>
                <li class="tooltips" data-toggle="tooltip" data-placement="bottom" data-original-title="Síguenos en Youtube"><a href="https://www.youtube.com/channel/UCgPz-qqaAk4lbHfr0XH3k2g" class="rounded social_youtube"></a></li>
                <li class="tooltips" data-toggle="tooltip" data-placement="bottom" data-original-title="Síguenos en Instagram">
                    <a href="https://www.instagram.com/ufpscucuta/" class="rounded social_instagram"></a></li>
                <li class="tooltips" data-toggle="tooltip" data-placement="bottom" data-original-title="Escuchanos en Vivo"><a href="#" class="rounded social_emisora"></a></li>
            </ul>
        </div>
        <!--=== Footer Version 1 ===-->
        <!-- organismos de control -->
        <div class="footer-v1 off-container">
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <!-- About -->
                        <div class="col-md-3 col-sm-4 md-margin-bottom-40">
                            <div class="footer-main">
                                <a href="index.html"><img id="logo-footer" class="img-responsive" src="./assets/img/logoufpsvertical.png" alt="Logo Pie de Página"></a>
                            </div>
                        </div>
                        <!--/col-md-3-->
                        <!-- End About -->

                        <!-- Latest -->
                        <div class="col-md-3 col-sm-4 md-margin-bottom-40">
                            <div class="posts">
                                <div class="headline" style="border-bottom: #272727;">
                                    <h2>Aplicaciones</h2>
                                </div>
                                <ul class="list-unstyled latest-list">
                                    <li>
                                        <a href="#">Divisist</a>
                                    </li>
                                    <li>
                                        <a href="#">Piagev</a>
                                    </li>
                                    <li>
                                        <a href="#">PDQRS</a>
                                    </li>
                                    <li>
                                        <a href="#">DatarSoft</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--/col-md-3-->
                        <!-- End Latest -->

                        <!-- Link List -->
                        <div class="col-md-3 col-sm-4  md-margin-bottom-40">
                            <div class="headline" style="border-bottom: #272727;">
                                <h2>Enlaces de Interés</h2>
                            </div>
                            <ul class="list-unstyled latest-list">
                                <li><a href="#" style="text-transform: none;">Proceso de selección</a></li>
                                <li><a href="#" style="text-transform: none;">Convocatoria</a></li>
                                <li><a href="#" style="text-transform: none;">Calendarios</a></li>
                                <li><a href="#" style="text-transform: none;">Proceso democrático 2015</a></li>
                                <li><a href="#" style="text-transform: none;">Derechos pecuniarios </a></li>
                            </ul>
                        </div>
                        <!--/col-md-3-->
                        <!-- End Link List -->

                        <!-- Address -->
                        <div class="col-md-3 col-sm-4  map-img md-margin-bottom-40">
                            <div class="headline" style="border-bottom: #272727;">
                                <h2>Contactos</h2>
                            </div>
                            <address class="md-margin-bottom-40">
                                Avenida Gran Colombia No. 12E-96 Barrio Colsag, <br>
                                San José de Cúcuta - Colombia <br>
                                Teléfono (057)(7) 5776655 <br>
                                Correo: <a href="mailto:oficinadeprensa@ufps.edu.co" class="">oficinadeprensa@ufps.edu.co</a>
                            </address>
                        </div>
                        <!--/col-md-3-->
                        <!-- End Address -->
                    </div>
                </div>
            </div>
            <!--/footer-->

            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <p>
                                2016 © All Rights Reserved.
                                Desarrollado por: <a href="#">VAVM - División de Sistemas</a>
                            </p>
                        </div>

                        <!-- Social Links -->
                        <div class="col-md-4">
                            <ul class="list-inline dark-social pull-right space-bottom-0">
                                <li>
                                    <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Facebook" href="https://www.facebook.com/UFPS-C%C3%BAcuta-553833261409690">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Twitter" href="https://twitter.com/UFPSCUCUTA">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Instagram" href="https://www.instagram.com/ufpscucuta/">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Youtube" href="#">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Correo" href="#">
                                        <i class="fa fa-envelope-o"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social Links -->
                    </div>
                </div>
            </div>
            <!--/copyright-->
        </div>


        <div class="owl-clients-v1" style="background-color:#EEE; padding: 5px;">
            <div class="item">
                <a href="http://www.mineducacion.gov.co/"><img src="./assets/img/mineducacion.png" class="hover-shadow" alt=""></a>
            </div>
            <div class="item">
                <a href="http://www.contraloriagen.gov.co/"><img src="./assets/img/contraloria.png" class="hover-shadow" alt=""></a>
            </div>
            <div class="item">
                <a href="http://www.procuraduria.gov.co/"><img src="./assets/img/procuraduriageneraldelanacion.png" class="hover-shadow" alt=""></a>
            </div>
            <div class="item">
                <a href="http://www.gobiernoenlinea.gov.co/"><img src="./assets/img/gobiernoenlinea.png" class="hover-shadow" alt=""></a>
            </div>
            <div class="item">
                <a href="http://www.urnadecristal.gov.co/"><img src="./assets/img/urnadecristal.png" class="hover-shadow" alt=""></a>
            </div>
            <div class="item">
                <a href="http://www.icfes.gov.co/"><img src="./assets/img/icfes.png" class="hover-shadow" alt=""></a>
            </div>
            <div class="item">
                <a href="http://www.icetex.gov.co/"><img src="./assets/img/icetex.png" class="hover-shadow" alt=""></a>
            </div>
            <div class="item">
                <a href="http://www.universia.net.co/"><img src="./assets/img/universia.png" class="hover-shadow" alt=""></a>
            </div>
            <div class="item">
                <a href="http://www.colombiaaprende.edu.co/"><img src="./assets/img/colombiaaprende.png" class="hover-shadow" alt=""></a>
            </div>
            <div class="item">
                <a href="http://www.renata.edu.co/"><img src="./assets/img/renata-logo.png" class="hover-shadow" alt=""></a>
            </div>
            <div class="item">
                <a href="http://www.colciencias.gov.co/"><img src="./assets/img/COLCIENCIAS.png" class="hover-shadow" alt=""></a>
            </div>
            <div class="item">
                <a href="http://www.cna.gov.co/"><img src="./assets/img/cna.png" class="hover-shadow" alt=""></a>
            </div>
            <div class="item">
                <a href="http://www.mineducacion.gov.co/sistemasdeinformacion/1735/propertyvalue-41698.html"><img src="./assets/img/SACES.png" class="hover-shadow" alt=""></a>
            </div>
            <div class="item">
                <a href="http://www.mineducacion.gov.co/sistemasdeinformacion/1735/w3-propertyname-2672.html"><img src="./assets/img/SNIES.png" class="hover-shadow" alt=""></a>
            </div>
            <div class="item">
                <a href="http://www.mineducacion.gov.co/sistemasdeinformacion/1735/w3-propertyname-2895.html"><img src="./assets/img/SPADIES.png" class="hover-shadow" alt=""></a>
            </div>

        </div>



    </div>
    <!--/wrapper-->

    <!--=== End Footer Version 1 ===-->
    <script type="text/javascript" src="./assets/js/jquery.min.js"></script>

    <script type="text/javascript" src="./assets/js/jquery-migrate.min.js"></script>

    <script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="./assets/js/pgwslider.min.js"></script>

    <script type="text/javascript" src="./assets/js/back-to-top.min.js"></script>

    <script type="text/javascript" src="./assets/js/smoothScroll.min.js"></script>

    <script type="text/javascript" src="./assets/js/owl.carousel.min.js"></script>

    <script type="text/javascript" src="./assets/js/sequence.jquery-min.js"></script>

    <script type="text/javascript" src="./assets/js/greensock.js"></script>

    <script type="text/javascript" src="./assets/js/layerslider.transitions.js"></script>

    <script type="text/javascript" src="./assets/js/layerslider.kreaturamedia.jquery.js"></script>

    <script type="text/javascript" src="./assets/js/custom.min.js"></script>

    <script type="text/javascript" src="./assets/js/app.min.js"></script>

    <script type="text/javascript" src="./assets/js/owl-carousel.min.js"></script>

    <script type="text/javascript" src="./assets/js/datepicker.min.js"></script>

    <script type="text/javascript" src="./assets/js/validation.min.js"></script>

    <script type="text/javascript" src="./assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript" src="./assets/js/owl-recent-works.min.js"></script>

    <script type="text/javascript" src="./assets/js/wow.min.js"></script>


</body>

</html>