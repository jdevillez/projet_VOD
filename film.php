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
      <iframe width="560" height="315" src="https://www.youtube.com/embed/w1tjGOTrPZ8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="synop">
         <p>
         Suite des aventures de Diana Prince, alias Wonder Woman, Amazone devenue une super-héroïne dans notre monde. Après la Première guerre mondiale, direction les années 80 ! Cette fois, Wonder Woman doit affronter deux nouveaux ennemis, particulièrement redoutables : Max Lord et Cheetah
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
            <div class="circle">5 juin 2020</div>
         </div>
   </div>
   <div class="acteur">

   </div>
   <div class="real">

   </div>
   <?php 
      include('php/modal.php');
      include('php/footer.php');   
      include('php/script.php'); 
   ?>
</body>
</html>