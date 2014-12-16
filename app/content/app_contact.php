<section>
    <article>
        <h2>Envoyez-moi un message</h2>
        <p>
            Si vous avez des questions concernant une des partie de ce site ou si vous avez des questions pour un de vos projet ou d'autres sites que j'ai développer, merci de remplir le formulaire ci-dessous.
        </p>
        <form method="post" action="traitement_formulaire.php" class="contact">
            <fieldset>
                <legend>Vos coordonnées</legend>
                <p>
                    <label for="nom">Nom* :</label>
                    <input type="text" id="nom" name="nom" tabindex="1" autofocus required/>
                </p>

                <p>
                    <label for="email">Email* :</label>
                    <input type="text" id="email" name="email" tabindex="2" required/>
                </p>
            </fieldset>

            <fieldset>
                <legend>Votre message :</legend>
                <p>
                    <label for="objet">Objet* :</label>
                    <input type="text" id="objet" name="objet" tabindex="3" required/>
                </p>

                <p>
                    <label for="message">Message* :
                        <br />
                    </label>
                    <textarea id="message" name="message" tabindex="4" cols="40" rows="8" required></textarea>
                </p>
            </fieldset>

            <small>* Champs obligatoire</small>
            <div style="text-align:center;">
                <input type="submit" name="envoi" value="Envoyer le formulaire !" />
            </div>
        </form>
    </article>
</section>
