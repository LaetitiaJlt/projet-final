<?php
// Connexion à la base de données
include ("config.php");

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare(
	'INSERT INTO commentaires(id, pseudo, commentaire) 
	VALUES(NULL, ?, ?)'
);

$req->execute(array($_POST['pseudo'] , $_POST['commentaire']));

if($req == true){
	$message = 'go to sleep';
}else{
	$message='essaye encore';
}
header('Location: https://julliotlae.sites.3wa.io/Projet%20final2/index.php#form');
exit();
?>

