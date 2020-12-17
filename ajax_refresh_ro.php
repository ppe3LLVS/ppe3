<?php


 // puis création de votre requete  dans l'exemple ci dessous on sélectionne les eleves d'une BDDD 
 
	include 'bdd.inc.php';


$keyword = '%'.$_POST['keyword'].'%';  // récupère la lettre saisie dans le champ texte en provenance de JS 


$sql = "SELECT * FROM robe WHERE idrobe LIKE (:var) or librobe LIKE (:var) ORDER BY idrobe ASC LIMIT 0, 10";  // création de la requete avec sélection des résultats sur la lettre 
$req = $con->prepare($sql);
$req->bindParam(':var', $keyword, PDO::PARAM_STR);
$req->execute();
$list = $req->fetchAll();

foreach ($list as $res) {
	//  affichage
	$Listeeleve = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>',$res['librobe']);
	// sélection 
    echo '<li onclick="set_item4(\''.str_replace("'", "\'", $res['librobe']).'\', \''.str_replace("'", "\'", $res['idrobe']).'\')">'.$Listeeleve.'</li>';
}
?>