<?php session_start();
if (!$_SESSION['mdp']){
    header('Location: pageConnexion.php');}?>

<!--HEAD-->
<?php require "components/head.php"?>
<!--- PAGE CSS-->
<link rel="stylesheet" href="assets/style.css">  
<!--HEADER--> 
<?php require "components/header.php"?>


<main>    

    <h2>Avis et commentaires</h2>
    <p>C'est dans ce "livre d'or" que nos clients écrivent leurs retours et notent sur 5 leur ressenti.</p>


    <?php require 'database/affichageComs.php' ?>

        <ul>
            <?php foreach($infos as $info): ?> <br>

                  <li class="flex jcc" >

                     <blockquote>
                        <h3> <?php echo $info['pseudo'] ?> - <?php echo $info['note'] ?>/5★</h3> <br>
                        <p> <?php echo $info['commentaire'] ?> </p>
                     </blockquote>

                  </li>

            <?php endforeach; ?> 
        </ul>


 <br>
 <hr><!-- ----------------------------------------------------------------->

       <h4> Vous souhaitez également partager votre avis ?</h4>
       <p> Notez et commentez votre passage au sein de notre établissement</p>

<!-- formulaire pour recueillir les commentaires des clients-->
    <form action="database/insertionComs.php" method='post'> 
               
          <!-- nom/pseudo client-->  
          <input type="text" id='name' name='name' required > <br>   
           
             <!-- note étoiles-->
             <div class="rate" name="rate">                  
                 <input type="radio" id="star5" name="rate" value="5" required />
                 <label for="star5" title="5 étoiles"></label>
                 <input type="radio" id="star4" name="rate" value="4" required>
                 <label for="star4" title="4 étoiles"></label>
                 <input type="radio" id="star3" name="rate" value="3" required/>
                 <label for="star3" title="3 étoiles"></label>
                 <input type="radio" id="star2" name="rate" value="2" required />
                 <label for="star2" title="2 étoiles"></label>
                 <input type="radio" id="star1" name="rate" value="1" required/>
                 <label for="star1" title="1 étoile"></label>
             </div>

             <br> <br>
             
              <!-- commentaire du client-->
              <textarea name="comment" cols="50" rows="10" placeholder="Ecrivez votre commentaire ici" required></textarea> 
              <button>poster</button>

    </form>

</main>   

<!-- FOOTER-->
<?php require "components/footer.php"?>








