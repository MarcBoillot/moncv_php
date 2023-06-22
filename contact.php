
    <?php 
        
        $metaTitle = "contactez-moi";
        $metaDescription = "bienvenu sur ma page contact";
        require('header.php');
    ?>

    <div class="container-contact">
        <div class="container-left">
            <div class="location">
                <i class="fa-solid fa-location-dot fa-4x"></i>
                <p>Location</p>
                <iframe class="location-map"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d176.50911192520107!2d4.890288862896087!3d44.940704116631714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1683885240241!5m2!1sfr!2sfr"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="telephone">
                <i class="fa-sharp fa-solid fa-phone-volume fa-4x"></i>
                <p>06-03-22-38-68</p>
            </div>
            <div class="mail">
                <i class="fa-solid fa-envelope fa-4x"></i>
                <p>marc.boillot@le-campus-numerique.fr</p>
            </div>
        </div>
        <form action="https://httpbin.org" class="form" method="post">
            <div class="container-right">
                <fieldset class="fieldsetmecontacter">
                    <legend class="entete-contact">Me contacter</legend>
                    <div>
                        <label for="emailinput">Votre e-mail</label>
                        <input type="text" name="email" id="emailinput" placeholder="exemple@mail.fr" required>
                    </div><br>
                    <div>
                        <label for="nameinput">Votre nom</label>
                        <input type="text" name="firstname" id="nameinput" placeholder="Dupont">
                    </div><br>
                    <div>
                        <fieldset class="genre">
                            <legend class="selection-genre">Sélectionner votre genre :</legend>
                            <label for="homme">HOMME</label>
                            <input type="radio" name="sexe" value="homme" id="homme">
                            <label for="femme">FEMME</label>
                            <input type="radio" name="sexe" value="femme" id="femme">
                        </fieldset><br>

                    </div>
                    <div>
                        <label for="message"></label>
                        <textarea name="message" id="message" cols="60" rows="20" placeholder="Ecrivez votre message" class="fieldtextarea" required></textarea><br>
                    </div>
                    <div>
                        <input type="submit" value="Envoyer un mail">
                        <input type="reset" name="buton" value="Annuler">
                    </div>
                </fieldset>
            </div>


        </form>

    </div>
    <footer>
        <div>
            <p>Adresse : 71 Quai Maurice Barjon 26500 Bourg-les-Valence</p>
        </div>
        <div>
            <p>Numéro de Téléphone : 06-03-22-38-68</p>
        </div>
    </footer>
</body>