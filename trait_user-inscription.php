<?php
	include '../include/bdd.inc.php';
	include '../classes/entites/classe_adresse.php';
	include '../classes/entites/classe_cavalier.php';
	include '../classes/entites/classe_login.php';
	include '../classes/entites/classe_niveau.php';
	include '../classes/associations/classe_obtention.php';

	$oadresse = new Adresse('NI',$_POST['adresse'][0],$_POST['adresse'][1],$_POST['adresse'][2],$_POST['adresse'][3]);

	$ologin = new Login('NI','NI');

	$ocavalier = new Cavalier('NI',$_POST['cavalier'][0],$_POST['cavalier'][1],$_POST['cavalier'][2],$oadresse,$_POST['cavalier'][3],$_POST['cavalier'][4],$_POST['cavalier'][5],$ologin);

	$galop = $_POST['niveau'];
	$oniveau = new Niveau($galop,'Galop $galop');

	$obtention = new Obtention($ocavalier,$oniveau,$_POST['obtention']);
	$obtention->getCavalier()->getAdresse()->verifAdresse($con);
	$obtention->getCavalier()->verifCavalier($con);
	$id = $obtention->getCavalier()->getIdentifiant();

	if ($id == 'registre') {
?>
<script type="text/javascript">
	alert('!!! Un cavalier similaire a déjà été enregistré !!!')
</script>
<?php
	} elseif ($id == 'contact') {
?>
<script type="text/javascript">
	alert('!!! Des informations de contact similaires ont déjà été enregistrées !!!')
</script>
<?php
	} else {
		$obtention->nouvelleObtention($con);
		$nom = $obtention->getCavalier()->getNom();
		$prenom = $obtention->getCavalier()->getPrenom();
		$login = $obtention->getCavalier()->getLogin()->getLibelle();
		header("Location:../../index.php?identifiant=$id&nom=$nom&prenom=$prenom&statut=$login");
	}
?>