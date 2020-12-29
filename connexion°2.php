<?php
	include '../include/bdd.inc.php';
	include '../classes/cavalier.enc_adresse-login.php';

	session_start();

	$_SESSION['cavalier']->setAll('NI', 'NI', 'NI', 'NI', 'NI', $_POST['cavalier'][0], $_POST['cavalier'][1]);

	switch ($_POST['action']) {
		case 'VALIDER':
			$_SESSION['cavalier']->rechercheCavalier($con);
			$_SESSION['id_cavalier'] = $_SESSION['cavalier']->getIdentifiant();
			if ($_SESSION['id_cavalier'] != 'introuvable') {
				$nom = $_SESSION['cavalier']->getNom();
				$prenom = $_SESSION['cavalier']->getPrenom();
				$login = $_SESSION['cavalier']->getLogin()->getLibelle();
				
				if ($login != 'Administrateur') {
					header('Location:../../utilisateur-index.php?identifiant='.$_SESSION['id_cavalier'].'&nom='.$nom.'&prenom='.$prenom);

				} else {
					header('Location:../../administrateur-index.php?identifiant='.$_SESSION['id_cavalier'].'&nom='.$nom.'&prenom='.$prenom);

				}
			} else {
?>
<script type="text/javascript">
	alert('!!! Adresse mail ou mot de passe invalide !!!')
</script>
<?php
				
			}
			break;

		case 'MOT DE PASSE OUBLIE':
			$mail = $_SESSION['cavalier']->getMail();
			header("Location:../../nouveau_mdp.php?courriel=$mail");
			break;
		
		default:
			# code...
			break;
	}
?>