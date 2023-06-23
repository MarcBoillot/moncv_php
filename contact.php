
    <?php  
        $metaTitle = "contactez-moi";
        $metaDescription = "bienvenu sur ma page contact";
        //filtre post pour supprimer les caracteres speciaux 
        $nom = filter_input(INPUT_POST, 'nom');
        $prenom = filter_input(INPUT_POST, 'prenom');
        $mail = filter_input(INPUT_POST, 'email');
        $genre = filter_input(INPUT_POST, 'sexe' );
        $reason = filter_input(INPUT_POST, 'selection');
        $message = filter_input(INPUT_POST, 'message');
        $str = filter_input(INPUT_POST,'nom', FILTER_SANITIZE_STRING);
        $data_contact = ["$genre", "$nom", "$prenom", "$mail" ,"$reason" ,"$message" ,"$data_contact"]; 
                
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
        <form action="" class="form" method="post">
            <div class="container-right">
                <fieldset class="fieldsetmecontacter">
                    <legend class="entete-contact">Me contacter</legend>
                    <div>
                        <fieldset class="genre">
                            
                            <legend class="selection-genre">Sélectionner votre genre :</legend>
                            <label for="homme">M.</label>
                            <input type="radio" name="sexe" value=<?php echo $genre?> id="homme">
                            
                            <label for="femme">Mme.</label>
                            <input type="radio" name="sexe" value=<?php echo $genre?> id="femme">
                           
                            <?php 
                            if (empty($_POST['sexe'])){
                                echo '*Veuillez remplir le champs*';
                            }
                            ?>
                        </fieldset><br>
                    </div>
                    <div>
                        <label for="nameinput" class=text-danger>Votre nom</label>
                        <input type="text" name="nom" id="nameinput" placeholder="Dupont" value=<?php echo $nom?>>

                        <?php
                            if ($str || strlen($nom) < 3) {
                                echo("*Non valide*");
                            } else {
                                echo("Valide");
                            }
                        ?>
                        <?php 
                            if (empty($_POST['nom'])){
                                echo '*Veuillez remplir le champs*';
                            }
                        ?>
                    </div><br>
                    <div>
                        <label for="nameinput">Votre prenom</label>
                        <input type="text" name="prenom" id="nameinput" placeholder="Pierre" value=<?php echo $prenom?>>

                        <?php
                            if ($str || strlen($prenom) < 3) {
                                echo "*Non valide*";
                            } else {
                                echo("Valide");
                            }
                        ?>
                        <?php 
                            if (empty($_POST['prenom'])){
                                echo '*Veuillez remplir le champs*';
                            }
                        ?>
                    </div><br>
                    <div>

                        <label for="emailinput">Votre e-mail</label>
                        <input type="email" name="email" id="emailinput" placeholder="exemple@mail.fr" value=<?php echo $mail ?>> 
                
                        <?php
                            if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
                                echo("*Email non valide*");
                            } else {
                                echo("Valide");
                            }
                        ?>
                        <?php 
                            if (empty($_POST['email'])){
                                echo '*Veuillez remplir le champs*';
                            }
                        ?>

                    </div><br>
                    <div>
                            <legend>Raison du contact</legend>

                            <label for="raison" >Proposition d'emploi</label>
                            <input type="radio" name="selection" value=<?php echo $reason ?> class=text-danger id=proposition_d_emploi> 
                        
                            <label for="raison" >Demande d'informations</label>
                            <input type="radio" name="selection" value=<?php echo $reason ?> id=Demande_information>  
                           
                            <label for="raison">Prestation</label>
                            <input type="radio" name="selection" value=<?php echo $reason ?> id=prestation> 
                            <?php
                                if (empty($_POST['selection'])){
                                    echo '*Veuillez remplir le champs*';}
                            ?>
                    </div>
                    <div>
                        <label for="message"></label>
                        <textarea name="message" id="message" cols="60" rows="20" placeholder="Ecrivez votre message" class="fieldtextarea" value=<?php echo $message ?>></textarea><br>

                        <?php
                            if (strlen($message) < 10) {
                                echo("*Non valide*");
                            } else {
                                echo("Valide");
                            }
                        ?>
                        <?php 
                            if (empty($_POST['message'])){
                                echo '*Veuillez remplir le champs*';
                            }
                        ?>
                    </div>
                    <div>
                        <input type="submit" value="Envoyer un mail" name="envoyer">
                        <input type="reset" name="buton" value="Annuler">
                        <?php
                        if (!empty($_POST['nom']) && !empty($_POST['prenom'])&& !empty($_POST['email'])&& !empty($_POST['sexe'])&&!empty($_POST['selection'])&&!empty($_POST['message'])){
                            var_dump($_SERVER['REQUEST_METHOD']); 
                            file_put_contents("contact/contact_$date.txt", implode("\n", $data_contact) );   
                        }
                        
                        ?>
                    </div>
                </fieldset>
            </div>
        </form>

    </div>

</body>