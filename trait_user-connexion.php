<?php
	include('../include/bdd.inc.php');
	include('../Classes/Entites/classe_cavalier.php');
	
	$login = $_POST['cavalier'][0];
	$mdp = $_POST['cavalier'][1];
	$cavalier = new Cavalier(0,0,0,0,0,0,0,0,0,$login,$login,$mdp);
	$connexion = $cavalier->recherche_cavalier($con,$login,$mdp);	
?>