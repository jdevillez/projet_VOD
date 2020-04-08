<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
   <?php
   include('php/head.php');
   ?>
    <link rel="stylesheet" href="css/contact.css">

</head>

<body>
    <?php include('php/navbar.php'); 
    ?>
   <div class="gd">
    <div class="droite">

        <div class=""><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2576.648415942066!2d4.713769615877838!3d49.77387014376323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea0e0e0033a365%3A0xa27dc640e0999d76!2sM%C3%A9tropolis!5e0!3m2!1sfr!2sfr!4v1585899559873!5m2!1sfr!2sfr"
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe></div>
    </div>
    <div class="gauche">
    <form id="contact" action="php/back/traitement_mail.php" method="post">
            <h3>
                <center>Contact</center>
            </h3>
            <fieldset>
                <input placeholder="Nom" name="nom" id="nom" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Adresse" name="adresse" id="adresse" type="text" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input placeholder="Mail" name="mail" id="mail" type="email" tabindex="3" required>
            </fieldset>
            <fieldset>
                <input placeholder="telephone" name="telephone" id="telephone" type="text" tabindex="4" required>
            </fieldset>
            <fieldset>
                <textarea id="sujet" name="sujet" id="sujet" rows="3" cols="33" placeholder="Votre message.."></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
            </fieldset>
        </form>
    </div>
</div>
<div class="ouverture">
    <h4>HORRAIRE D'OUVERTURE</h4>
    <div class="vl"></div>
    <p> Lundi - 13h30 / 1h<br>
    Mardi - 13h30 / 1h<br>
    Mercredi - 13h30 / 1h<br>
    jeudi - 13h30 / 1h<br> 
    Vendredi - 13h30 / 1h<br>
    Samedi - 13h30 / 1h<br> 
    Dimanche - 9hh30 / 17h<br>
      </p> 
</div>
    <?php 
    include('php/modal.php');
    include('php/footer.php');
    include('php/script2.php'); 
    ?>
</body>

</html>