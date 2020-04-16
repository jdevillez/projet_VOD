<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">

<head>
   <?php
   include('php/head.php');
   ?>
   <link rel="stylesheet" href="css/film.css">
</head>

<body>
   <?php 
      include('php/navbar.php');
      include('php/header.php');
   ?>
   <div class="entete">
      <div class="lecteur">
         <iframe width="560" height="315" src="https://www.youtube.com/embed/w1tjGOTrPZ8" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="synop">
         <p>
            Suite des aventures de Diana Prince, alias Wonder Woman, Amazone devenue une super-héroïne dans notre monde.
            Après la Première guerre mondiale, direction les années 80 ! Cette fois, Wonder Woman doit affronter deux
            nouveaux ennemis, particulièrement redoutables : Max Lord et Cheetah
         </p>
      </div>
   </div>
   <div class="detail">
      <div class="allcircle">
         <p>Durée</p>
         <div class="circle">1h45</div>
         <p>Note</p>
         <div class="circle">3/5</div>
         <p>Date de sortie</p>
         <div class="circle">5 juin</div>
      </div>
   </div>
   <div class="containeracteur">

      <div class="acteur">
         <img class="img-acteur" src="img/wonder/gadot.jpg" alt="">
         <div>Gal Gadot</div>
      </div>

      <div class="acteur">
         <img class="img-acteur" src="img/wonder/Pine.jpg" alt="">
         <div>Chris Pine</div>
      </div>

      <div class="acteur">
         <img class="img-acteur" src="img/wonder/wiig.jpg" alt="">
         <div>Kristen Wiig</div>
      </div>

      <div class="acteur">
         <img class="img-acteur" src="img/wonder/pedro.jpg" alt="">
         <div>Pedro Pascal</div>
      </div>

      <div class="acteur">
         <img class="img-acteur" src="img/wonder/wright.jpg" alt="">
         <div>Robin Wright</div>
      </div>

      <div class="acteur">
         <img class="img-acteur" src="img/wonder/nielsen.jpg" alt="">
         <div>Connie Nielsen</div>
      </div>
   </div>
   <?php
      include('php/parallax2.php');
   ?>
   <h2>Realisateur</h2>
   <div class="containerreal">
      <div class="real">
         <img class="img-real" src="img/wonder/Jenkins.jpg" alt="">
         <div>Patty JENKINS</div>
      </div>
      <p class="synopreal"> En 2011, elle signe pour mettre en scène Thor : Le Monde des ténèbres, la suite du film Thor
         sorti cette même année. En raison de désaccords artistiques avec Marvel, elle est remerciée par la production,
         malgré l'insistance de Natalie Portman pour qu'elle reste à la réalisation du film. Quelques années plus tard,
         elle est finalement annoncée à la réalisation d'un autre film de super-héros, cette fois pour DC Comics et son
         univers cinématographique : Wonder Woman.</p>
   </div>
   <?php 
      include('php/modal.php');
      include('php/footer.php');   
      include('php/script.php'); 
   ?>
</body>

</html>