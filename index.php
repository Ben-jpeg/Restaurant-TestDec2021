<!--HEAD-->
<?php session_start();?>

<?php require "components/head.php"?>
<!--- PAGE CSS-->
<link rel="stylesheet" href="assets/style.css">  
 
<!--HEADER--> 
<?php require "components/header.php"?>


 <main>
                                 <!--Image d'accueil--> 
                                     <!--Carousel-->
    <section class="carouselSection">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/pic25.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/pic26.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/pic27.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/pic28.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
                             
<hr> <!-- ----------------------------------------------------------------------------------------------->
                              <!-- Articles/contenus à sélectionner-->
  <h2>Bienvenue</h2>
  <p class="intro">Bienvenue sur le site internet de votre restaurant <b> le Four Chette </b>.
Les goûts et les parfums transalpins s’incrustent dans nos recettes, portés par de précieux ingrédients que nous importons, directement des producteurs établis aux quatre coins du monde entier. Commandez et emportez nos réalisations culinaires ou venez les savourer sur place !
N'hésitez pas à venir vous délecter d'une ambiance raffiné et chaleureuse ainsi que d'une grande convivialité. </p>
<hr> <!-- ----------------------------------------------------------------------------------------------->

        <!-- section 01-->
        <article class="flex jcc aic">
                 <div class="textSide">
                      <ul class="textSection">
                          <li class="sectionTitle">Plat du jour </li>
                          <li class="sectionDesc">-Salade aux champignons corse <br> -Collier de veau à la sauce spéciale ciboulettes <br> -Tarte patissière au citron et framboise. <br>  <a class="recipie" href="">voir la recette</a></li>
                      </ul>
                 </div>

                 <div class="picSide">
                      <img class="imgbody" src="img/pic10.png" alt="plat du jour">
                 </div>
        </article>

        <!-- section 02-->
        <article class="flex jcc aic">
                <div class="picSide">
                      <img class="imgbody" src="img/pic3.jpg" alt="menus à disposition">
                </div>

                <div class="textSide">
                      <ul class="textSection">
                          <li class="sectionTitle">Menus</li>
                          <li class="sectionDesc">Les plats et menus à disposition selon vos envies du jour. <a class="recipie" href="menus.php"> <br>Voir la carte des plats à disposition</a>
                                                                                                             
                      </ul>
                </div>
        </article>

        <!-- section 03-->
        <article class="flex jcc aic">
                 <div class="textSide">
                     <ul class="textSection">
                         <li class="sectionTitle"> <a class="livreLink" href="avis.php">Livre d'or</a></li>
                         <li class="sectionDesc">Avis et commentaires des clients.</li>
                     </ul>
                 </div>

                 <div class="picSide">
                      <img class="imgbody" src="img/pic24.jpg" alt="commentaires des clients">
                 </div>
        </article>
 
<hr> <!-- ----------------------------------------------------------------------------------------------->
        
      <p class="tacenter punchline">Nous aimons ce que nous faisons. Vous aimerez aussi !</p>

   </main>   


<!-- FOOTER-->
<?php require "components/footer.php"?>