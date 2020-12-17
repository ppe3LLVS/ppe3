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


                            

                                <h3> rentrez un nouveau cheval </h3>
                                
                            <div class="container">
                                <table>
                                <form name = "validation" method="post" action = "trait_chevaux.php">
                                    <div class="input_container">
                                
                                    <thead>
                                        <th>nom cheval</th>
                                        <th>date de naissance</th>
                                        <th>taille du cheval en centimètres</th>
                                        <th>couleur de la robe du cheval</th>
                                        <th>race du cheval</th>
                                    </thead>
                                    <tr>
                                         <td><input type = "texte" name = "nomche"> </td><br>
                                         <td><input type = "date" name = "dnche"> </td>
                                         <td><input type = "texte" name = "tailleche"></td> <br>
                                         <td><input type="text" id="robe_id" name="robe" onkeyup="autocomplet_ro()">
                                         <input type="hidden" id="robe_id2" name="robe2" >
                                         <ul id="nom_list_idro"></ul></td>
                                        <td> 
                                            <input type="text" id="race_id" name="race" onkeyup="autocomplet_ra()"> 
                                            <input type="hidden" id="race_id2" name="race2" >
                                            <ul id="nom_list_idra"></ul>
                                        </td> <br>
                                        <td>
                                            <input type = "submit" value = "enregistrer" name = "ajouterchev">
                                        </td>
                                    </tr>
                                    </div>
                                </form>
                                </table>
                            </div>


    <!--<script src="assets/js/jquery.js"></script> -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script type="text/javascript" src="script_ro.js"></script>
    <script type="text/javascript" src="script_ra.js"></script>

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