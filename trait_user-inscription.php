<?php
	include('../include/bdd.inc.php');
	include('../Classes/Entites/classe_cavalier.php');
	include('../Classes/Entites/classe_niveau.php');
	include('../Classes/Associations/classe_obtention.php');

	$idniv = $_POST['niveau'];
	$galop = $idniv-1;
	$libelle = "Galop '$galop'";
	$oniveau = new Niveau($idniv,$libelle);
	
	$nom = $_POST['cavalier'][0];
	$prenom = $_POST['cavalier'][1];
	$ddn = $_POST['cavalier'][2];
	$adresse = $_POST['cavalier'][3];
	$lieu = $_POST['cavalier'][4];
	$cp = $_POST['cavalier'][5];
	$ville = $_POST['cavalier'][6];
	$telephone = $_POST['cavalier'][7];
	$email = $_POST['cavalier'][8];
	$login = $_POST['cavalier'][9];
	$mdp = $_POST['cavalier'][10];	
	$ocavalier = new Cavalier('0',$nom,$prenom,$ddn,$adresse,$lieu,$cp,$ville,$telephone,$email,$login,$mdp);

	$date = $_POST['obtention'];

	$nbdoublons = $ocavalier->verification_doublons($con,$nom,$prenom,$ddn,$adresse,$lieu,$cp,$ville,$telephone,$email,$login,$mdp);

	if ($nbdoublons == 0) {
		$ocavalier->nouveau_cavalier($con,$nom,$prenom,$ddn,$adresse,$lieu,$cp,$ville,$telephone,$email,$login,$mdp);
		$ocavalier->recuperation_id($con);

		$obtention = new Obtention($ocavalier,$oniveau,$date);
		$obtention->nouvelle_obtention($con);

		$id = $ocavalier->get_id();
		header("Location:../../index.php?identifiant='$id'");
	}
	else {
		$ocavalier->erreur();
	}
?>