<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <?php
   include('php/head.php');
   ?>
    <link rel="stylesheet" href="css/liste_film.css">
</head>

<body>
    <?php
    include('php/navbar.php');
    include('php/header.php');
   ?>
    <h1 class="title_film">Nos Films<h1>
            <div class="vl"></div>
            <div class="all">
                <div class="nav_film">
                    <ul>
                        <li class="title_nav">Genre</li>
                        <li>
                            <div>
                                <input type="checkbox" id="action" name="action">
                                <label for="action">Action</label>
                            </div>
                        </li>

                        <li>
                            <div>
                                <input type="checkbox" id="sf" name="sf">
                                <label for="sf">SF</label>
                            </div>
                        </li>
                        <li>
                            <div>
                                <input type="checkbox" id="action" name="action">
                                <label for="action">Action</label>
                            </div>
                        </li>

                        <li>
                            <div>
                                <input type="checkbox" id="aventure" name="aventure">
                                <label for="aventure">Aventure</label>
                            </div>
                        </li>
                        <li>
                            <div>
                                <input type="checkbox" id="comedie" name="comedie">
                                <label for="comedie">Comedie</label>
                            </div>
                        </li>

                        <li>
                            <div>
                                <input type="checkbox" id="horreur" name="horreur">
                                <label for="horreur">Horreur</label>
                            </div>
                        </li>
                        <li>
                            <div>
                                <input type="checkbox" id="policier" name="policier">
                                <label for="policier">Policier</label>
                            </div>
                        </li>

                        <li>
                            <div>
                                <input type="checkbox" id="thriller" name="thriller">
                                <label for="thriller">Thriller</label>
                            </div>
                        </li>
                        <li class="title_nav">Note</li>
                        <li>
                            <div>
                                <input type="checkbox" id="un" name="un">
                                <label for="un">1/5</label>
                            </div>
                        </li>

                        <li>
                            <div>
                                <input type="checkbox" id="deux" name="deux">
                                <label for="deux">2/5</label>
                            </div>
                        </li>
                        <li>
                            <div>
                                <input type="checkbox" id="trois" name="trois">
                                <label for="trois">3/5</label>
                            </div>
                        </li>

                        <li>
                            <div>
                                <input type="checkbox" id="quatre" name="quatre">
                                <label for="quatre">4/5</label>
                            </div>
                        </li>
                        <li>
                            <div>
                                <input type="checkbox" id="cinq" name="cinq">
                                <label for="cinq">5/5</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="axeldroite">
                    <a href="film.php" class="versfilm">
                        <div class="cardaxel">
                            <img class="poster-img" src="img/slider/slider.webp" alt="">
                            <div class="titrefilm">Wonderwoman</div>
                            <div class="infoaxel">
                                <div class="textaxel">
                                    <p>4.5/5</p>
                                    <p>2h12</p>
                                    <p>Thriller</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="versfilm">
                        <div class="cardaxel">
                            <img class="poster-img" src="img/slider/slider1.webp" alt="">
                            <div class="titrefilm">En Avant</div>
                            <div class="infoaxel">
                                <div class="textaxel">
                                    <p>3.3/5</p>
                                    <p>3h29</p>
                                    <p>Thriller, Biopic</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="versfilm">
                        <div class="cardaxel">
                            <img class="poster-img" src="img/slider/slider4.webp" alt="">
                            <div class="titrefilm">La bonne épouse</div>
                            <div class="infoaxel">
                                <div class="textaxel">
                                    <p>3.3/5</p>
                                    <p>1h45</p>
                                    <p>Drame</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="versfilm">
                        <div class="cardaxel">
                            <img class="poster-img" src="img/slider/slider3.webp" alt="">
                            <div class="titrefilm">The demon inside</div>
                            <div class="infoaxel">
                                <div class="textaxel">
                                    <p>3.9/5</p>
                                    <p>2h08</p>
                                    <p>Biopic,Drame</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="" class="versfilm">
                        <div class="cardaxel">
                            <img class="poster-img" src="img/slider/slider5.webp" alt="">
                            <div class="titrefilm">Vivarium</div>
                            <div class="infoaxel">
                                <div class="textaxel">
                                    <p>3.7/5</p>
                                    <p>1h42</p>
                                    <p>Animation, Fantastique</p>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>


            <?php
            include('php/modal.php');
    include('php/footer.php');   
    include('php/script.php'); 
   ?>
</body>

</html>