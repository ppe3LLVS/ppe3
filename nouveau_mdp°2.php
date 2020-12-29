<?php
	include '../include/bdd.inc.php';
	include '../classes/cavalier.enc_adresse-login.php';

	session_start();

	$_SESSION['cavalier']->setAll('NI',$_POST['cavalier'][0],$_POST['cavalier'][1],'NI','NI',$_POST['cavalier'][2],$_POST['cavalier'][3]);
	$_SESSION['cavalier']->nouveauMDP($con);
?>