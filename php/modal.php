<!-- CONNEXION -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">CONNEXION</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="connexion" action="php/back/connexion.php" method="post">
                        <div class="form-group">
                            <label for="lemail">Email :</label>
                            <input type="email" class="form-control" id="lemail" name="lemail"
                                aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">Nous partegerons jamais votre
                                email</small>
                        </div>
                        <div class="form-group">
                            <label for="lmdp">Mot de passe</label>
                            <input type="password" class="form-control" id="lmdp" name="lmdp"
                                placeholder="Password">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                        </div>
                        <button name="submit" type="submit" id="connexion-submit" data-submit="...Sending">Envoyer</button>
                    </form>
                </div>
            
            </div>
        </div>
    </div>

    <!-- FROM INSCRIPTION -->

    <div id="ex1" class="modal">
                <form id="inscription" action="php/back/inscription.php" method="post">
            
            <fieldset>
                <input placeholder="Nom" name="inom" id="inom" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Prenom" name="iprenom" id="iprenom" type="text" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input placeholder="Mail" name="iemail" id="iemail" type="email" tabindex="3" required>
            </fieldset>
            <fieldset>
            <input placeholder="Mot de passe" name="imdp" id="imdp" type="password" tabindex="4" required>
            </fieldset>
            <fieldset>
            <input placeholder="confirmer mot de passe" name="cmdp" id="cmdp" type="password" tabindex="4" required>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="inscription-submit" data-submit="...Sending">Envoyer</button>
            </fieldset>
        </form>
  <a href="#" rel="modal:close">Close</a>
</div>