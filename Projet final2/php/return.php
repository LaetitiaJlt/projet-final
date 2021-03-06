
<?php
// Connexion à la base de données
include ("php/config.php");

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, commentaire FROM commentaires ORDER BY ID DESC LIMIT 0, 10');
// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['commentaire']) . '</p>';
}
$reponse->closeCursor();
?>