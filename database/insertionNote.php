<?php  //    -BASE DE DONNEE-

//ouverture connexion à la base de donnée :
require 'connexion.php';


//préparation de la requete d'insertion :
$pdoStat = $bdd->prepare('INSERT INTO note VALUES (NULL, :note)');


//liaison de chaque marqueurs par une valeur : 
$pdoStat->bindValue(':note', $_POST['rate'], PDO::PARAM_INT);



//exécution de la requête : 
$pdoStat->execute();
