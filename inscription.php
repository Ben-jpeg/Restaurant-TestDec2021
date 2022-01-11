<?php session_start(); ?>

<?php require "database/insertionUtilisateur.php"?> 

<!--HEAD-->
<?php require "components/head.php"?>
<link rel="stylesheet" href="assets/style.css">  <!--- PAGE CSS-->

<!--HEADER--> 
<?php require "components/header.php"?>

.<h2>Inscription</h2>

 <form action="" method="post" align="center">
     <input type="text" name="pseudo" autocomplete="off">  <br><br>
     <input type="password" name="mdp"> <br><br>

     <input type="submit" name="envoi">

     <br><br>
  </form>

<!--FOOTER-->
<?php require "components/footer.php"?>
 
