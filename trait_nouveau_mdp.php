<?php
	include '../include/bdd.inc.php';
	include '../classes/entites/classe_adresse.php';
	include '../classes/entites/classe_login.php';
	include '../classes/entites/classe_cavalier.php';

	$oadresse = new Adresse('NI','NI','NI','NI','NI');

	$ologin = new Login('NI','NI');

	$ocavalier = new Cavalier('NI',$_POST['cavalier'][0],$_POST['cavalier'][1],'NI',$oadresse,'NI',$_POST['cavalier'][2],$_POST['cavalier'][3],$ologin);
	$ocavalier->nouveauMDP($con);
?>