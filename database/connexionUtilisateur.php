<?php session_start();
$bdd = new PDO("mysql:host=localhost;dbname=resto;charset=utf8", 'root', '');  

if(isset($_POST['envoi'])){

     if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']);
        
        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND mdp = ?');
        $recupUser->execute(array($pseudo, $mdp)); /* va nous renvoyer un tableau contenant tous nos éléments */

              if ($recupUser->rowCount() > 0) {
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['mdp'] = $mdp;
                $_SESSION['id_user'] = $recupUser->fetch()['id_user'];
                header('Location:index.php');
                
              } else {
                echo '<b style=color:red> Votre pseudo ou mot de passe est incorrect.Veuillez réessayer </b>';
       }
     }else {
        echo 'Veuillez compléter tous les champs';
     }

} 
?> 






