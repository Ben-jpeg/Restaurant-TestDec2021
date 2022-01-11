<?php  //    -BASE DE DONNEE-

//ouverture connexion à la base de donnée :
require 'connexion.php';

//préparation de la requete d'insertion: 
$pdoStat = $bdd->prepare('INSERT INTO utilisateurs VALUES(NULL, :pseudo,:commentaire, :note)');

//liaison de chaque marqueur par une valeur: 
$pdoStat->bindValue(':pseudo', $_POST['name'], PDO::PARAM_STR);
$pdoStat->bindValue(':commentaire', $_POST['comment'], PDO::PARAM_STR);
$pdoStat->bindValue(':note', $_POST['rate'], PDO::PARAM_INT);

//exécution de la requete: 
$pdoStat->execute();


if ($pdoStat) {
    $message = 'Infos ajoutés en BDD';
}else {
   $message = 'echec';
}  ?>


<!-------------------------------------------------------->


<!--           Page d'insertion --             -->

<!--HEAD-->
<?php require "../components/head.php"?>
 
<!--HEADER--> 
<?php require "../components/header.php"?>

<br><br><br><br><br>
<p class="comPosted tacenter" > Votre commentaire a bien été ajouté. </p>

<div class="divBack">
      <p>  <a class="pageBack" href="../avis.php">Revenir sur la page Avis & Commentaires</a> </p> <br>
      <p> <a class="pageBack" href="../index.php">Revenir en page d'accueil</a> </p>
</div>





<!-- FOOTER-->
<?php require "../components/footer.php"?>

                               



