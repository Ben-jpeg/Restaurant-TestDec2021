<?php //    -BASE DE DONNEE-

//ouverture connexion à la base de donnée :
$bdd = new PDO("mysql:host=localhost;dbname=resto;charset=utf8", 'root', '');

if(isset ($_POST['envoi'])) {

    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){ 

        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']);
        $insertUser = $bdd->prepare('INSERT INTO users(pseudo, mdp)VALUES(?, ?)');
        $insertUser->execute(array($pseudo, $mdp));

        echo '<b style=color:green>Vous êtes bien inscrit</b>';

    } else {
       echo'<b style=color:red> Veuillez compléter tout les champs !</b>' ;
    }
} ?>




