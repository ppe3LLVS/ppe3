<?php
	include '../include/bdd.inc.php';
	include '../classes/entites/classe_adresse.php';
	include '../classes/entites/classe_login.php';
	include '../classes/entites/classe_cavalier.php';

	session_start();
	
	$oadresse = new Adresse('NI','NI','NI','NI','NI');
	$ologin = new Login('NI','NI');
	$ocavalier = new Cavalier('NI','NI','NI','NI',$oadresse,'NI',$_POST['cavalier'][0],$_POST['cavalier'][1],$ologin);

	switch ($_POST['action']) {
		case 'VALIDER':
			$ocavalier->rechercheCavalier($con);
			$identifiant = $ocavalier->getIdentifiant();
			if ($identifiant == 'introuvable') {
?>
<script type="text/javascript">
	alert('!!! Adresse mail ou mot de passe invalide !!!')
</script>
<?php
			} else {
				$nom = $ocavalier->getNom();
				$prenom = $ocavalier->getPrenom();
				header("Location:../../votre_compte.php?identifiant=$identifiant&nom=$nom&prenom=$prenom");
			}
			break;

		case 'MOT DE PASSE OUBLIE':
			$mail = $ocavalier->getMail();
			header("Location:../../nouveau_mdp.php?courriel=$mail");
			break;
		
		default:
			# code...
			break;
	}
?>