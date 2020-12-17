<?php


 // puis création de votre requete  dans l'exemple ci dessous on sélectionne les eleves d'une BDDD 
 
	include 'assets/include/bdd.inc.php';


$keyword = '%'.$_POST['keyword'].'%';  // récupère la lettre saisie dans le champ texte en provenance de JS 


$sql = "SELECT * FROM cavalier WHERE idca LIKE (:var) or nomca LIKE (:var) ORDER BY idca ASC LIMIT 0, 10";  // création de la requete avec sélection des résultats sur la lettre 
$req = $con->prepare($sql);
$req->bindParam(':var', $keyword, PDO::PARAM_STR);
$req->execute();
$list = $req->fetchAll();

foreach ($list as $res) {
	//  affichage
	$Listeeleve = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $res['nomca']);
	// sélection 
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $res['nomca']).'\')">'.$Listeeleve.'</li>';
}
?>

