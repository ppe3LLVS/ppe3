<?php 
include'assets/include/header_ad.inc.php';
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
                                                    <th>modifier</th>
                                                    <th>supprimer</th>
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
                                                                        
?>
                                                <tr>
                                                    <td><?php echo $nomche," ";?></td>
                                                    <td><?php echo $dnche," ";?></td>
                                                    <td><?php echo $tailleche," ";?></td>
                                                    <td><?php echo $o['librobe'], " ";?></td>
                                                    <td><?php echo $a['librace']," ";?></td>
                                                    <td>
    <style type="text/css">
        body{
            height: 100vh;
            background-color: #aaa;
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }

        .yellow{
            --bg-color:#f1c40f;
            --shadow:#f39c12;
        }

        .card{
            --card-height:50;
            --card-width:75;

            overflow: hidden;
            transition: all 0.5s ease-out;
            position: relative;
            width: var(--card-width);
            height: var(--card-height);
            background-color: #333;
            border-radius: 10px;
            box-shadow: 0px 0px 10px black;
            display: flex;
        }

        .card:hover {
            transition: box-shadow 0.5s, background-color 0.35s;
            box-shadow: 0px 0px 50px var(--shadow, gray);
            background-color: var(--bg-color, gray);
        }

        a{
            text-decoration: none;
        }

        .card h2{
            margin: auto;
            z-index: 1;
            color: white;
            text-decoration: none;
            z-index: 1000;
            border: 2px solid transparent;
            padding: 10px;

            transition: all 0.25s ease-out;
        }

        /*.card:hover h2{
            border: 2px solid white;
        }*/

        .card .circle{
            --cicle-size: 15px;

            position: absolute;
            width: var(--cicle-size);
            height: var(--cicle-size);
            border-radius: 50%;
            background-color: transparent;
            margin: auto;
            right: calc((var(--card-width) - var(--cicle-size)) / 2);
            bottom: calc((var(--card-height) - var(--cicle-size)) / 2);
            transition: transform 0.25s ease-out;
            z-index: 0;
        }

        .card:hover .circle{
            transform: scale(6);
            background-color: var(--bg-color, gray);
        }
    </style>
</head>
<body>

    <a href="" class="card yellow">
        <h2></h2>
        <div class="circle"></div>
    </a>
                                                </td>
                                                <td>
                                                        <meta charset="utf-8">
    <title>Home</title>
    <style type="text/css">
        body{
            height: 100vh;
            background-color: #aaa;
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }

        .red{
            --bg-color :#e74c3c;
            --shadow : #c0392b;
        }
        .card{
            --card-height:50;
            --card-width:75;

            overflow: hidden;
            transition: all 0.5s ease-out;
            position: relative;
            width: var(--card-width);
            height: var(--card-height);
            background-color: #333;
            border-radius: 10px;
            box-shadow: 0px 0px 10px black;
            display: flex;
        }

        .card:hover {
            transition: box-shadow 0.5s, background-color 0.35s;
            box-shadow: 0px 0px 50px var(--shadow, gray);
            background-color: var(--bg-color, gray);
        }

        a{
            text-decoration: none;
        }

        .card h2{
            margin: auto;
            z-index: 1;
            color: white;
            text-decoration: none;
            z-index: 1000;
            border: 2px solid transparent;
            padding: 10px;

            transition: all 0.25s ease-out;
        }

        /*.card:hover h2{
            border: 2px solid white;
        }*/

        .card .circle{
            --cicle-size: 15px;

            position: absolute;
            width: var(--cicle-size);
            height: var(--cicle-size);
            border-radius: 50%;
            background-color: transparent;
            margin: auto;
            right: calc((var(--card-width) - var(--cicle-size)) / 2);
            bottom: calc((var(--card-height) - var(--cicle-size)) / 2);
            transition: transform 0.25s ease-out;
            z-index: 0;
        }

        .card:hover .circle{
            transform: scale(6);
            background-color: var(--bg-color, gray);
        }
    </style>
</head>
<body>

    <a href="trait_chevaux.php?sup=<?php echo $idche; ?>" class="card red">
        <h5></h5>
        <div class="circle"></div>
    </a>
</td>
                                                </tr>
            <?php } ?> 
    </tbody>
</table>
<a href="ajouter_che.php">
    <h5>ajouter un cheval</h5>
</a>


                               

    <!--<script src="assets/js/jquery.js"></script> -->
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
