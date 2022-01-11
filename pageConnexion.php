<?php require 'database/connexionUtilisateur.php';?>

<!--HEAD-->
<?php require "components/head.php"?>
<link rel="stylesheet" href="assets/style.css">  <!--- PAGE CSS-->

<!--HEADER--> 
<?php require "components/header.php"?>

.<h2>Connexion</h2>

  <form action="" method="post">

   <input type="text" name="pseudo"   autocomplete="off"> <br>
   <input type="password" name="mdp"> <br>
   <input type="submit" name="envoi"> <br>

  </form>

<p>  Vous n'avez pas de compte ? inscrivez-vous <a href="inscription.php">ici</a> </p> 


<!--FOOTER-->
<?php require "components/footer.php"?>
 
