<?php
    include 'assets/include/bdd.inc.php';
    include 'assets/classes/entites/classe_adresse.php';
    include 'assets/classes/entites/classe_login.php';
    include 'assets/classes/entites/classe_cavalier.php';
    include 'assets/classes/entites/classe_niveau.php';
    include 'assets/classes/associations/classe_obtention.php';
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/ico/favicon3.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="assets/img/ico/apple-touch-icon-57x57.png">

    <title>Le centre équestre de Langlade</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/plugins.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/pe-icons.css" rel="stylesheet">

</head>

<body id="page-top" class="index">

    <div class="master-wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top fadeInDown header-6" data-wow-delay="0.5s">
            <div class="top-bar smoothie hidden-xs">
                <div class="container">
                    <div class="clearfix">
                        <ul class="list-inline social-links wow pull-left">
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>

                        <div class="pull-right text-right">
                            <ul class="list-inline">
                                <li>
                                    <a href="user-inscription.html">S'inscrire</a>
                                </li>
                                <li>
                                    <a href="user-connexion.html">Se connecter</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll col-sm-12 text-center">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand smoothie logo" href="index.html"><img src="assets/img/logo_reverse.png" alt="logo"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse col-sm-12 text-center" id="main-navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accueil <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home - Agency</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Menu principal</a></li>
                                        <li><a href="index-agency-2.html">Agency - Layout 2</a></li>
                                        <li><a href="index-agency-3.html">Agency - Layout 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home - Portfolio</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-portfolio-1.html">Portfolio - Layout 1</a></li>
                                        <li><a href="index-portfolio-2.html">Portfolio - Layout 2</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home - Corporate</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-corporate-1.html">Corporate - Layout 1</a></li>
                                        <li><a href="index-corporate-2.html">Corporate - Layout 2</a></li>
                                        <li><a href="index-corporate-3.html">Corporate - Layout 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home - Landing Page</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-landing-1.html">Landing Page - Layout 1</a></li>
                                        <li><a href="index-landing-2.html">Landing Page - Layout 2</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home - Blog</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-blog-1.html">Blog - Layout 1</a></li>
                                        <li><a href="index-blog-2.html">Blog - Layout 2</a></li>
                                        <li><a href="index-blog-3.html">Blog - Layout 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="index-app.html">Home - App</a></li>
                                <li><a href="index-restaurant.html">Home - Restaurant</a></li>
                                
                                <li><a href="index-minimal.html">Home - Minimal</a></li>
                                <li><a href="index-countdown.html">Home - Coming Soon</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Nos chevaux <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="header-1.html">Chevaux</a></li>
                                <li><a href="header-2.html">Poneys</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Nos activités <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="footer-1.html">Cours</a></li>
                                <li><a href="footer-2.html">Promenades</a></li>
                                <li><a href="footer-3.html">Stages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Les pensions <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Demi-pension</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pension complète</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contacts <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Full Grid</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-full-grid-4col.html">Full Grid - 4 Columns</a></li>
                                        <li><a href="portfolio-full-grid-3col.html">Full Grid - 3 Columns</a></li>
                                        <li><a href="portfolio-full-grid-2col.html">Full Grid - 2 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Boxed Grid</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-boxed-grid-4col.html">Boxed Grid - 4 Columns</a></li>
                                        <li><a href="portfolio-boxed-grid-3col.html">Boxed Grid - 3 Columns</a></li>
                                        <li><a href="portfolio-boxed-grid-2col.html">Boxed Grid - 2 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Full Masonry</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-full-masonry-4col.html">Full Masonry - 4 Columns</a></li>
                                        <li><a href="portfolio-full-masonry-3col.html">Full Masonry - 3 Columns</a></li>
                                        <li><a href="portfolio-full-masonry-2col.html">Full Masonry - 2 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Boxed Masonry</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-boxed-masonry-4col.html">Boxed Masonry - 4 Columns</a></li>
                                        <li><a href="portfolio-boxed-masonry-3col.html">Boxed Masonry - 3 Columns</a></li>
                                        <li><a href="portfolio-boxed-masonry-2col.html">Boxed Masonry - 2 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Single Portfolio</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="single-portfolio-slider.html">Single Portfolio - Slider</a></li>
                                        <li><a href="single-portfolio-carousel.html">Single Portfolio - Carousel</a></li>
                                        <li><a href="single-portfolio-video.html">Single Portfolio - Video</a></li>
                                        <li><a href="single-portfolio-fullscreen-slider.html">Single Portfolio - Fullscreen Slider</a></li>
                                        <li><a href="single-portfolio-fullscreen-video.html">Single Portfolio - Fullscreen Video</a></li>
                                        <li><a href="single-portfolio-image-list.html">Single Portfolio - Image List</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#search"><i class="pe-7s-search"></i></a></li>
                        <li><a href="javascript:void(0);" class="side-menu-trigger hidden-xs"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <div id="search-wrapper">
            <button type="button" class="close">×</button>
            <div class="vertical-center text-center">
                <form>
                    <input type="search" value="" placeholder="Enter Search Term" />
                    <button type="submit" class="btn btn-primary btn-white">Search</button>
                </form>
            </div>
        </div>

        <!-- Header -->
        <header id="headerwrap" class="backstretched fullheight">
            <div class="container vertical-center">
                <div class="intro-text vertical-center text-left smoothie">
                    <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s">Bienvenue </div>
                    <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s"><span class="rotate">dans le centre équestre de</span></div>
                    <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s">Langlade </div>
                </div>
            </div>
        </header>

        <section>
            <div class="section-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mb100 wow">
                            <h2 class="section-heading">Récapitulatif</h2>
                            <h3 class="section-subheading secondary-font">Des associations cavalier-niveau</h3>
                            <br>
                            <table border="3" align="vertical-center">
                                <thead>
                                    <tr>
                                        <th colspan="2"> Cavalier </th>
                                        <th colspan="2"> Niveau </th>
                                        <th rowspan="2"> Date d'obtention </th>
                                    </tr>
                                    <tr>
                                        <th> Identifiant </th>
                                        <th> Nom / Prénom </th>
                                        <th> Identifiant </th>
                                        <th> Libellé </th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
    $oadresse = new Adresse(0,0,0,0,0);
    $ologin = new Login(0,0);
    $ocavalier = new Cavalier(0,0,0,0,$oadresse,0,0,0,$ologin);
    $oniveau = new Niveau(0,0);
    $obtention = new Obtention($ocavalier,$oniveau,0);
    $obtention->tableObtention($con);
?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th> Identifiant </th>
                                        <th> Nom / Prénom</th>
                                        <th> Identifiant </th>
                                        <th> Libellé </th>
                                        <th rowspan="2"> Date d'obtention </th>
                                    </tr>
                                    <tr>
                                        <th colspan="2"> Cavalier </th>
                                        <th colspan="2"> Niveau </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="footer-wrapper" class="footer-image-bg">
            <section class="transparent-wrapper">
                <div class="section-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="widget about-us-widget">
                                    <h4 class="widget-title"><strong>Global</strong> Coverage</h4>
                                    <p>Professionally monetize team building materials for 24/7 results. Holisticly transition corporate platforms vis-a-vis cutting-edge experiences. Dynamically strategize ubiquitous applications for premier initiatives. Interactively seize resource sucking niche markets.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="widget">
                                    <h4 class="widget-title"><strong>Latest</strong> Articles</h4>
                                    <div>
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="widget-img" src="assets/img/widget/widget1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <span class="media-heading"><a href="#">Blog Post A</a></span>
                                                <small class="muted">Posted 14 April 2015</small>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="widget-img" src="assets/img/widget/widget2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <span class="media-heading"><a href="#">Blog Post B</a></span>
                                                <small class="muted">Posted 14 April 2015</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="widget">
                                    <h4 class="widget-title">Popular Tags</h4>
                                    <div class="tagcloud">
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Local</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Business</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Media</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Photogtraphy</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Aid</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Fashion</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">News</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Cars</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Global Affairs</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Music</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Downloads</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">MP3</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="white-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul class="list-inline social-links wow">
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-12 text-center ptb">
                            <span class="copyright">Copyright 2019. Designed by DISTINCTIVE THEMES</span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
    $(document).ready(function() {
        'use strict';
        jQuery('#headerwrap').backstretch([
            "assets/img/bg/chevaux°1.jpg",
            "assets/img/bg/chevaux°2.jpg",
            "assets/img/bg/chevaux°3.jpg"
        ], {
            duration: 8000,
            fade: 500
        });
    });
    </script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-55234356-6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-55234356-6');
</script>
</body>

</html>
