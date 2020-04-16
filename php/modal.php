<!-- CONNEXION -->



    <div id="ex2" class="modal">
                <form id="connexion" action="php/back/connexion.php" method="post">
            
            <fieldset>
            <label for="inom">Email :</label>
                <input placeholder="Mail" name="lemail" id="lemail" type="email" tabindex="3" required>
            </fieldset>
            <fieldset>
            <label for="inom">Mot de passe :</label>
            <input placeholder="Mot de passe" name="lmdp" id="lmdp" type="password" tabindex="4" required>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="inscription-submit" data-submit="...Sending">Envoyer</button>
            </fieldset>
        </form>
  <a href="#" rel="modal:close">Close</a>
</div>

    <!-- FROM INSCRIPTION -->

    <div id="ex1" class="modal">
                <form id="inscription" action="php/back/inscription.php" method="post">
            
            <fieldset>
                <label for="inom">Nom :</label><br>
                <input placeholder="Nom" name="inom" id="inom" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
            <label for="iprenom">Prenom : </label>
                <input placeholder="Prenom" name="iprenom" id="iprenom" type="text" tabindex="2" required>
            </fieldset>
            <fieldset>
            <label for="iemail">Email :</label>
                <input placeholder="Mail" name="iemail" id="iemail" type="email" tabindex="3" required>
            </fieldset>
            <fieldset>
            <label for="imdp">Mot de passe :</label>
            <input placeholder="Mot de passe" name="imdp" id="imdp" type="password" tabindex="4" required>
            </fieldset>
            <fieldset>
            <label for="imdp">Mot de passe :</label>
            <input placeholder="confirmer mot de passe" name="cmdp" id="cmdp" type="password" tabindex="4" required>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="inscription-submit" data-submit="...Sending">Envoyer</button>
            </fieldset>
        </form>
  <a href="#" rel="modal:close">Close</a>
</div>

