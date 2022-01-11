<?php //    -BASE DE DONNEES-

//ouvertire connexion à la base de donnée :
require 'connexion.php';


//préparation de la requete d'affichage du contenu de la table Plats : 
$pdoStat = $bdd->prepare('SELECT * from plats');


//exécution de la requête  :
$execute = $pdoStat->execute();


//récupération des données en une fois : 
$choixPlats = $pdoStat->fetchAll();

