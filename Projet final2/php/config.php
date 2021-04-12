<?php

// Connexion à la base de données
try
{
    $user = "julliotlae";
    $mdp = "986cafe8YTRkZWI1ZjQ2NmVkYTQxN2U1MWEwMWNk47918a15";
    $bdd = new PDO('mysql:host=localhost;dbname=pa-166_julliotlae_projetFinal;charset=utf8', $user, $mdp);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>