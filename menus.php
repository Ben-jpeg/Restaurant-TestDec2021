<!--HEAD-->
<?php session_start(); ?>

<?php require "components/head.php"?>
<!--- PAGE CSS-->
<link rel="stylesheet" href="assets/style.css">  

<!--HEADER--> 
<?php require "components/header.php"?>

<main>    

    <h2>Menus à la carte</h2>
    <p>Voici les menus actuellement proposés par l'établissement</p>

  
<?php require 'database/affichageMenus.php' ?>
            <ul>
                <?php foreach($choixMenus as $choixMenu): ?>
                                                                     <br>
                  <li class="flex jcc" >
                     <blockquote>

                        <h3>* <?php echo $choixMenu['nom'] ?>* </h3>         <br> <br>

<!-- Mettre une illustration du plat/concept du nom du menu ? -->

                        <p>-entrée: <?php echo $choixMenu['entree'] ?></p>
                        <p>-plat:  <?php echo $choixMenu['plat'] ?></p>     
                        <p>-dessert:  <?php echo $choixMenu['dessert'] ?></p>     

                     </blockquote>
                  </li>
                                                                    
                 <?php endforeach; ?>
            </ul>



<br>
<hr><!-- ----------------------------------------------------------------->



</main>   


<!-- FOOTER-->
<?php require "components/footer.php"?>
