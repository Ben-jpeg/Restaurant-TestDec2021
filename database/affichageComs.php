<?php  //    -BASE DE DONNEE-

//ouverture connexion à la base de donnée :
require 'connexion.php';

//préparation de la requete d'affichage du contenu de la bdd: 
$pdoStat = $bdd->prepare('SELECT * FROM utilisateurs');

//exécution de la requete: 
$executeIsOk = $pdoStat->execute();

//récupération des données en une fois:
$infos = $pdoStat->fetchAll();

?>


