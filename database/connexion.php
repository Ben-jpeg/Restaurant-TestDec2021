<?php     //CONNEXION  BASE DE DONNEES
$user='root';
$pw='';

try
{
    $bdd = new PDO("mysql:host=localhost;dbname=resto;charset=utf8", $user, $pw);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
    catch(PDOException $e){
      echo "Erreur : " . $e->getMessage() . "<br/>";
    }
    ?>

