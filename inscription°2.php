<?php
	include '../include/bdd.inc.php';
	include '../classes/obtention.enc_cavalier-niveau.php';

	session_start();

	$_SESSION['cavalier']->getAdresse()->setAll('NI', $_POST['adresse'][0], $_POST['adresse'][1], $_POST['adresse'][2], $_POST['adresse'][3]);

	$_SESSION['cavalier']->setAll('NI', $_POST['cavalier'][0], $_POST['cavalier'][1], $_POST['cavalier'][2], $_POST['cavalier'][3], $_POST['cavalier'][4], $_POST['cavalier'][5]);

	$galop = $_POST['niveau'];
	$_SESSION['niveau']->setAll($galop, 'Galop $galop');

	$_SESSION['obtention'] = new Obtention($_SESSION['cavalier'], $_SESSION['niveau'], $_POST['obtention']);
	$_SESSION['obtention']->getCavalier()->getAdresse()->verifAdresse($con);
	$_SESSION['obtention']->getCavalier()->verifCavalier($con);
	$_SESSION['id_cavalier'] = $_SESSION['obtention']->getCavalier()->getIdentifiant();

	if ($_SESSION['id_cavalier'] == 'registre') {
?>
<script type="text/javascript">
	alert('!!! Un cavalier similaire a déjà été enregistré !!!')
</script>
<?php
	} elseif ($_SESSION['id_cavalier'] == 'contact') {
?>
<script type="text/javascript">
	alert('!!! Des informations de contact similaires ont déjà été enregistrées !!!')
</script>
<?php
	} else {
		$_SESSION['obtention']->nouvelleObtention($con);
		$nom = $_SESSION['obtention']->getCavalier()->getNom();
		$prenom = $_SESSION['obtention']->getCavalier()->getPrenom();
		$login = $_SESSION['obtention']->getCavalier()->getLogin()->getLibelle();

		if ($login != 'Administrateur') {
			header('Location:../../utilisateur-index.php?identifiant='.$_SESSION['id_cavalier'].'&nom='.$nom.'&prenom='.$prenom);

		} else {
			header('Location:../../administrateur-index.php?identifiant='.$_SESSION['id_cavalier'].'&nom='.$nom.'&prenom='.$prenom);
		}
	}
?>