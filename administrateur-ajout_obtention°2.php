<?php
	include '../include/bdd.inc.php';
	include '../classes/obtention.enc_cavalier-niveau.php';

	session_start();

	$_SESSION['obtention']->getCavalier()->setAll($_POST['cavalier'], 'NI', 'NI', 'NI', 'NI', 'NI', 'NI');
	$_SESSION['obtention']->getNiveau()->setAll($_POST['niveau'], 'NI');
	$_SESSION['obtention']->setDate($_POST['obtention']);
	$_SESSION['obtention']->nouvelleObtention($con);

	header('Location:../../administrateur-ajout_obtention.php');
?>