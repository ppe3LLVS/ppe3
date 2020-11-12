<?php

include 'bdd.php';
include 'class_activite.php';

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

       

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.5s">
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
                                    <div><a href="#">S'inscrire</a></div>
                                </li>
                                <li>
                                    <div><a href="#">Se connecter</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand smoothie logo logo-light" href="index.html"><img src="assets/img/leclos_inverse.png" alt="logo" ></a>
                    <a class="navbar-brand smoothie logo logo-dark" href="index.html"><img src="assets/img/leclos.png" alt="logo" ></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accueil</a>
                           
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Nos chevaux <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="header-1.html">Chevaux</a></li>
                                <li><a href="header-2.html">Poneys</a></li>
                                <li><a href="header-3.html">Tous les chevaux</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"> Les Pensions <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <!-- <li><a href="footer-1.html">Footer 1</a></li>
                                <li><a href="footer-2.html">Footer 2</a></li>
                                <li><a href="footer-3.html">Footer 3</a></li>
                                <li><a href="footer-4.html">Footer 4</a></li>
                                <li><a href="footer-5.html">Footer 5</a></li>
                                <li><a href="footer-6.html">Footer 6</a></li> -->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Nos activités <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="cours.php">Cours</a></li>
                                <li><a href="promenade.php">Promenade</a></li>
                                <li><a href="stages.php">Stages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact <span class="pe-7s-angle-down"></span></a>
                            
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
        </div> <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/bg/bg4.jpg" style="" data-speed="0.7">
            <div class="section-inner pad-top-200">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt30 wow text-center">
                            <h2 class="section-heading">Recherche d'activités</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="catalogue"><h3>Catalogue:</h3>

     

<?php
if(isset($_POST['go'])){
$ocheval = new cheval('','','','','','');
$oac = new activite('','','','','','','','','','','', $ocheval);
$requete= $oac->stage ($con);
}
    
?>













        </div>
        <form method="POST" action="" style="width: 300px; height: 620px; border-right: solid 2px black; text-align: center; margin-top: -50px;">
        <h2><u>Filtrer</u></h2><br>
        <h3>Type d'activité</h3>
  <select name="nomac"> 
              <?php
               $oac = new activite('','','','','','','','','','','',''); 
            
    $requete= $oac->afficherac($con);
           
        foreach ($requete as $oac) 
        {
            ?>
            
    
            <option value="<?php echo $oac['idac'];?>"><?php echo $oac['nomac']; ?></option><?php } ?>
        </select><br>


        <h3>Type de monture</h3>
<select name="nomac">
           <?php $SQL= "SELECT * FROM chevaux GROUP BY tailleche";
            $requete = $con->query($SQL);
            foreach ($requete as $recup) {

                $ic = $recup['idche'];
                $n =  $recup['nomche'];
                 $d =  $recup['dnche'];
                 $t =  $recup['tailleche'];
                 $iro =  $recup['idrobe'];
                 $ira =  $recup['idrace'];
            
                
            
           $ocheval = new cheval($ic,$n,$d,$t,$iro,$ira);
           $tableau = array();
           $tableau[] = $ocheval;
        foreach ($tableau as $ocheval) 
        {
            ?>
            <option value="<?php echo $ocheval->get_idche();?>"><?php echo $ocheval->get_tc(); ?></option><?php }} ?>
        </select><br>
        <h3>Date</h3>
<center><input type="date" name="date"></center>
<div class="age">
    <h3>Age</h3><center><input type="range" step="1" name="Range" value="10" min="0" max="99" style="text-align: center; width: 250px;" oninput="result.value=Range.value"></center>
    <output for="out" name="result"></output>
</div><br>
<div class="niveau">
    <h3>Niveau</h3><center><input type="range" step="1" name="Range2" value="2" min="0" max="7" style="text-align: center; width: 250px;" oninput="resultat.value=Range2.value" ></center>
    <output for="out" name="resultat"></output>
</div><br>
<input type="submit" name="go" value="Valider">
  </form>
   <br><br><br><br><br><br><br><br><br><br><br><br>



























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
            "assets/img/bg/bg1.jpg",
            "assets/img/bg/bg2.jpg",
            "assets/img/bg/bg3.jpg"
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
