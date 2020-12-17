<?php
	include '../include/bdd.inc.php';
    include '../classes/entites/classe_adresse.php';
    include '../classes/entites/classe_login.php';
	include '../classes/entites/classe_cavalier.php';
	include '../classes/entites/classe_niveau.php';
	include '../classes/associations/classe_obtention.php';

	$oadresse = new Adresse('NI',$_POST['adresse'][0],$_POST['adresse'][1],$_POST['adresse'][2],$_POST['adresse'][3]);

	$ologin = new Login('NI','NI');

	$ocavalier = new Cavalier($_GET['identifiant'],$_POST['cavalier'][0],$_POST['cavalier'][1],'NI',$oadresse,$_POST['cavalier'][2],$_POST['cavalier'][3],$_POST['cavalier'][4],$ologin);
	$ocavalier->modifCavalier($con);
	$id = $ocavalier->getIdentifiant();
	$nom = $ocavalier->getNom();
	$prenom = $ocavalier->getPrenom();

	header("Location:../../index.php?identifiant=$id&nom=$nom&prenom=$prenom"); 
?>