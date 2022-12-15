<?php
require_once "header.php";
?> 
<div class="container">
    <div class="brand-xl">
        <p >Au Coeur de Montmartre</p>
    </div>
</div>
<main>
    <div class="content-half-header">      
        <div class="container">
            <h1>Réservez votre séjour</h1>
            <div class="flex-container-col">
                <div class="flex-container form-align">
                    <div class="flex-container-col width-50">
                        <div>
                            <h2>Nous contacter</h2>
                            <p>
                                Minions ipsum jiji me want bananaaa! Jeje tank yuuu! Belloo! Me want bananaaa! wiiiii hana dul sae bappleees jiji me want bananaaa! Ti aamoo! me want bananaaa! Daa hahaha bappleees. Uuuhhh aaaaaah poulet tikka masala ti aamoo! Para tú ti aamoo! Wiiiii pepete la bodaaa. Me want bananaaa! gelatooo jiji wiiiii hana dul sae bappleees gelatooo aaaaaah. La bodaaa po kass chasy butt po kass baboiii gelatooo aaaaaah.
                            </p>
                        </div>
                        <div class="flex-list">
                            <i class="fa-solid fa-location-dot"></i><p>3 Rue Norvins, 75018 Paris</p>
                        </div>
                        <div class="flex-list">
                            <i class="fa-sharp fa-solid fa-phone"></i><p>01 59 60 39 30</p>
                        </div>
                        <div class="flex-list">
                            <i class="fa-solid fa-envelope"></i><p>demo@monmartre.com</p>
                        </div>
                    </div>
                    <div class="contact-form">
                        <div class="flex-container-col">
                            <p>A partir de <span class="tarif-nuitee">105 €</span> par nuit</p>
                            <div class="flex-container-col">
                                <label for="nom">Nom</label>
                                <input type="text" name="name" id="name">
                            </div>
                            <div class="flex-container-col">
                                <label for="prenom">Prenom</label>
                                <input type="text" name="prenom" id="prenom">
                            </div>
                            <div class="flex-container-col">
                                <label for="mail">Email</label>
                                <input type="mail" name="mail" id="mail">
                            </div>
                        </div>
                        <div class="flex-container form-align">
                            <div class="flex-container-col">
                                <label for="start">Arrivée</label>
                                <input type="date" name="start" id="start" value="2022-12-16">
                            </div>
                            <div class="flex-container-col">
                                <label for="end">Départ</label>
                                <input type="date" name="end" id="end" value="2022-12-18">
                            </div>
                        </div>
                        <label for="message">Message</label>
                        <textarea name="message" id="message" cols="30" rows="5"></textarea>
                        <button>Envoyer</button>
                    </div>
                </div>      
            </div>
        </div>            
    </div>
</main>
<?php
require_once "footer.php";
?>