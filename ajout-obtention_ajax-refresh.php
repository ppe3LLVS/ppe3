<?php
	include 'assets/include/bdd.inc.php';

	session_start();

	$numero = '%'.$_POST['numero'].'%';
	$sql = 'SELECT idca, nomca, preca FROM cavaliers WHERE idca LIKE (:var) ORDER BY idca ASC LIMIT 0, 10';
	$req = $con->prepare($sql);
	$req->bindParam(':var', $numero, PDO::PARAM_STR);
	$req->execute();
	$liste = $req->fetchAll();
	foreach ($liste as $res) {
		//  affichage
		$cavaliers = str_replace($_POST['numero'], '<b>'.$_POST['numero'].'</b>', $res['idca'].' - '.$res['nomca'].' '.$res['']);
		// sélection
	    echo '<li onclick="set_item(\''.str_replace("'", "\'", $res['idca'].'\', \''.str_replace("'", "\'", $res['nomca'].'\', \''.str_replace("'", "\'", $res['preca'].'\')">'.$cavaliers.'</li>';
	}
?>