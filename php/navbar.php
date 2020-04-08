<div class="navbarp">
        <img class="logo_nav" src="img/allo.png" alt="logo">
        <a href="index.php">Accueil</a>
        <a href="liste_film.php">Film</a>
        <a href="contact.php">Contact</a>
        <p id="bjr"><?php if (isset($_SESSION['username'])) {echo ' Bienvenue' . $_SESSION['username'] . ' !' ;}?></p>
        <i class="fas fa-user-circle fa-2x"></i>
</div>

