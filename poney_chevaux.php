<?php 
include'assets/include/header.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="assets/img/ico/apple-touch-icon-57x57.png">

    <title>Kompleet by Distinctive Themes</title>

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

        <!--<div class="preloader">
            <div class="preloader-img">
                <span class="loading-animation animate-flicker"><img src="assets/img/loading.GIF" alt="loading"/></span>
            </div>
        </div>-->

        <!-- Navigation -->
         

        <div id="search-wrapper">
            <button type="button" class="close">×</button>
            <div class="vertical-center text-center">
                <form>
                    <input type="search" value="" placeholder="Enter Search Term" />
                    <button type="submit" class="btn btn-primary btn-white">Search</button>
                </form>
            </div>
        </div>

        <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/bg/bg2.jpg" data-speed="0.7">
            <div class="section-inner pad-top-200">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt30 wow text-center">
                            <h2 class="section-heading">nos chevaux</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="section-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                


                                <?php

                                include ("assets/class/chevaux.php");
                                include ("bdd.inc.php");

 ?>
                                <script>
                                    $(document).ready(function() {
                                        $('#userTable').DataTable();
                                    });
                                </script>
                                <?php

                                 //Afficher


                                     $orace = new race ("", ""); 
                                     $orobe = new robe ("", "");
                                     $unchev = new chevaux ("", "", "", "", $orace, $orobe);
                                     $paramro = "";
                                     $paramra = "";
                                      $Reqche = $unchev->afficherche($con);
                                     
                                



                                    ?>
                                    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
                                    <?php
                                    
//tableau 
                                    ?>
                                    
                                        <table id="userTable">
                                            
                                                <thead>
                                                    <th>nom</th>
                                                    <th>date</th>
                                                    <th>taille (cm)</th>
                                                    <th>couleur robe</th>
                                                    <th>race</th>
                                                </thead>
                                                <tbody>
<?php
                                                foreach ($Reqche as $unchev1)
                                                    {
                                                        $idche = $unchev1 ['idche'];
                                                        $nomche = $unchev1 ['nomche'];
                                                        $dnche = $unchev1 ['dnche'];
                                                        $tailleche = $unchev1 ['tailleche'];  
                                                        $idrace = $unchev1 ['idrace'];
                                                        $paramra = ' AND idrace =' .$idrace;
                                                        $Reqra = $orace->afficherace($con, $paramra);
                                                        $idrobe = $unchev1 ['idrobe'];
                                                        $paramro = ' AND idrobe ='.$idrobe;      
                                                        $Reqro = $orobe->afficherobe($con, $paramro);
                                                        $o = $Reqro -> fetch();
                                                        $a = $Reqra -> fetch();

                                                if ($tailleche < 148) {            
?>
                                                <tr>
                                                    <td><?php echo $nomche," ";?></td>
                                                    <td><?php echo $dnche," ";?></td>
                                                    <td><?php echo $tailleche," ";?></td>
                                                    <td><?php echo $o['librobe'], " ";?></td>
                                                    <td><?php echo $a['librace']," ";?></td>
                                                </tr>
            <?php } 
        }?> 
    </tbody>
</table>



                                <div class="col-xs-12 col-sm-6 mb50">
                                    <div class="summary entry-summary">

                                        <div class="product-rating mb">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 product-tabs mt">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a data-toggle="tab" href="#tab-description">Description</a>
                                        </li>

                                        <li class="reviews_tab">
                                            <a data-toggle="tab" href="#tab-reviews">Reviews (3)</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content mb">
                                        <div class="tab-pane active" id="tab-description">
                                            <p>On insensible possession oh particular attachment at excellence in. The books arose but miles happy she. It building contempt or interest children mistress of unlocked no. Offending she contained mrs led listening resembled. Delicate marianne absolute men dashwood landlord and offended. Suppose cottage between and way. Minuter him own clothes but observe country. Agreement far boy otherwise rapturous.</p>
                                        </div>

                                        <div class="tab-pane fade" id="tab-reviews">
                                            <div id="reviews">
                                                <div id="comments">
                                                    <div id="comments-list" class="gap">
                                                        <div class="media">
                                                            <div class="pull-left">
                                                                <img class="avatar comment-avatar" src="http://lorempixel.com/80/80/people/9" alt="">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="well">
                                                                    <div class="media-heading">
                                                                        <strong>Dave Evans</strong>&nbsp; <small>30th Jan, 2015</small>
                                                                        <div class="pull-right">
                                                                            <span class="glyphicon glyphicon-star"></span>
                                                                            <span class="glyphicon glyphicon-star"></span>
                                                                            <span class="glyphicon glyphicon-star"></span>
                                                                            <span class="glyphicon glyphicon-star"></span>
                                                                            <span class="glyphicon glyphicon-star"></span>
                                                                        </div>
                                                                    </div>
                                                                    <p>Was are delightful solicitude discovered collecting man day. Resolving neglected sir tolerably but existence conveying for. Day his put off unaffected literature partiality inhabiting.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media">
                                                            <div class="pull-left">
                                                                <img class="avatar comment-avatar" src="http://lorempixel.com/80/80/people/5" alt="">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="well">
                                                                    <div class="media-heading">
                                                                        <strong>Dave Evans</strong>&nbsp; <small>30th Jan, 2015</small>
                                                                        <div class="pull-right">
                                                                            <span class="glyphicon glyphicon-star"></span>
                                                                            <span class="glyphicon glyphicon-star"></span>
                                                                            <span class="glyphicon glyphicon-star"></span>
                                                                            <span class="glyphicon glyphicon-star"></span>
                                                                            <span class="glyphicon glyphicon-star"></span>
                                                                        </div>
                                                                    </div>
                                                                    <p>Wicket longer admire do barton vanity itself do in it. Preferred to sportsmen it engrossed listening. Park gate sell they west hard for the. Abode stuff noisy manor blush yet the far. Up colonel so between removed so do.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media">
                                                            <div class="pull-left">
                                                                <img class="avatar comment-avatar" src="http://lorempixel.com/80/80/people/6" alt="">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="well">
                                                                    <div class="media-heading">
                                                                        <strong>Dave Evans</strong>&nbsp; <small>30th Jan, 2015</small>
                                                                        <div class="pull-right">
                                                                            <span class="glyphicon glyphicon-star"></span>
                                                                            <span class="glyphicon glyphicon-star"></span>
                                                                            <span class="glyphicon glyphicon-star"></span>
                                                                            <span class="glyphicon glyphicon-star"></span>
                                                                            <span class="glyphicon glyphicon-star"></span>
                                                                        </div>
                                                                    </div>
                                                                    <p>Quitting informed concerns can men now. Projection to or up conviction uncommonly delightful continuing. In appetite ecstatic opinions hastened by handsome admitted.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div id="comment-form" class="gap">
                                                        <div class="mb">
                                                            <h3 class="single-section-title"><strong>Leave</strong> A Review</h3>
                                                        </div>
                                                        <form class="form-horizontal" role="form">
                                                            <div class="form-group">
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control" placeholder="Name">
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <input type="email" class="form-control" placeholder="Email">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <textarea rows="8" class="form-control" placeholder="Comment"></textarea>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-theme">Submit Comment</button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                             <!--                              <div class="col-md-12">
                                    <div class="mb50">
                                        <h3 class="single-section-title">Related Items</h3>
                                    </div>

                                    <div class="row">
                                        <ul class="owl-carousel-paged wow fadeIn list-unstyled" data-items="2" data-items-tablet="[768,2]" data-items-mobile="[479,1]">
                                            <li class="nopadding-lr">
                                                <div class="hover-item mb30">
                                                    <img src="assets/img/bg/103136.jpg" class="img-responsive smoothie" alt="">
                                                    <div class="overlay-item-caption smoothie"></div>
                                                    <div class="hover-item-caption smoothie">
                                                        <div class="vertical-center smoothie">
                                                            <a href="#" class="smoothie btn btn-primary">View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-excerpt">
                                                    <h4 class="pull-right">$24.99</h4>
                                                    <h4><a href="#">Slim-Fit Shirt</a></h4>
                                                    <p>Taste oh spoke about no solid of hills up shade. Occasion so bachelor humoured striking by attended doubtful be it.</p>
                                                </div>
                                            </li>
                                            <li class="nopadding-lr">
                                                <div class="hover-item mb30">
                                                    <img src="assets/img/shop/shop2.jpg" class="img-responsive smoothie" alt="">
                                                    <div class="overlay-item-caption smoothie"></div>
                                                    <div class="hover-item-caption smoothie">
                                                        <div class="vertical-center smoothie">
                                                            <a href="#" class="smoothie btn btn-primary">View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-excerpt">
                                                    <h4 class="pull-right">$24.99</h4>
                                                    <h4><a href="#">Slim-Fit Shirt</a></h4>
                                                    <p>Taste oh spoke about no solid of hills up shade. Occasion so bachelor humoured striking by attended doubtful be it.</p>
                                                </div>
                                            </li>
                                            <li class="nopadding-lr">
                                                <div class="hover-item mb30">
                                                    <img src="assets/img/shop/shop3.jpg" class="img-responsive smoothie" alt="">
                                                    <div class="overlay-item-caption smoothie"></div>
                                                    <div class="hover-item-caption smoothie">
                                                        <div class="vertical-center smoothie">
                                                            <a href="#" class="smoothie btn btn-primary">View</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item-excerpt">
                                                    <h4 class="pull-right">$24.99</h4>
                                                    <h4><a href="#">Slim-Fit Shirt</a></h4>
                                                    <p>Taste oh spoke about no solid of hills up shade. Occasion so bachelor humoured striking by attended doubtful be it.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    -->
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
                        <div class="col-md-6 text-left match-height">
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

                        <div class="col-md-6 text-right match-height">
                            <div class="vertical-center">
                                <span class="copyright">Copyright 2019. Designed by DISTINCTIVE THEMES</span>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    <div class="flexpanel">
        <div class="viewport-wrap">
            <div class="viewport">
                <div class="widget mb50">
                    <h4 class="widget-title">Latest Articles</h4>
                    <div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Panic In London</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">New iPhone News</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Our Year In Review</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget4.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">jQuery Tutorial</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget5.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Sheen Interview</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget mb50">
                    <h4 class="widget-title"><strong>Latest</strong> Articles</h4>
                    <div class="tagcloud">
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Local</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Business</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Media</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Photogtraphy</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Aid</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Fashion</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">News</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Cars</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Global Affairs</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Music</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Downloads</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">MP3</a>
                    </div>
                </div>
                <div class="widget about-us-widget mb50">
                    <h4 class="widget-title">About Kompleet</h4>
                    <p>Professionally monetize team building materials for 24/7 results. Holisticly transition corporate platforms vis-a-vis cutting-edge experiences. Dynamically strategize ubiquitous applications for premier initiatives. Interactively seize resource sucking niche markets.</p>
                </div>
            </div>
        </div>
    </div>

    <!--<script src="assets/js/jquery.js"></script>-->
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
            "assets/img/bg/bg1.jpg",
            "assets/img/bg/bg2.jpg",
            "assets/img/bg/bg3.jpg"
        ], {
            duration: 8000,
            fade: 500
        });
    });
    </script>

</body>

</html>