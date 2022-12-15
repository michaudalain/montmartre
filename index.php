<?php 
require_once "header.php";
?>
<div class="container">
    <div class="brand-xl">
        <p >Au Coeur de Montmartre</p>
    </div>
    <div class="container-booking">
        <div class="flex-container flex-center">
            <p>Réservez votre séjour</p>
        </div>
        <div class="flex-container flex-center">
            <div class="flex-container-col">
                <label>Arrivée</label>
                <input type="date" name="start" value="2022-12-21" id="">
            </div>
            <div class="flex-container-col">
                <label>Départ</label>
                <input type="date" name="end" value="2022-12-31" id="">
            </div>
            <a href="contact.html" title="Réserver mon séjour">RESERVER</a>
        </div>
    </div>        
</div>
<main>
    <div class="content">      
        <div class="container">
            <h1>Partez à la découverte de Montmartre</h1>
            <div class="flex-container">
                <div class="flexbox-left-66">
                    <p>
                        À quelques rues du <strong>Sacré-Cœur</strong>, ce quartier charmant est toujours vibrant. La <strong>Place du Tertre</strong> est l’une des plus visitées de Paris. Savourez-y le génie créatif des nombreux artistes qui exercent à Montmartre, c’est peut-être l’occasion de trouver un petit souvenir.
                    </p>
                    <p>
                        Petit appartement baigné de lumière,confortable et chaleureux,au 7ème et dernier étage avec un ascenseur,exposé plein sud,donnant sur une <strong>jolie terrasse</strong> qui domine tout Paris où vous pourrez prendre vos repas et vous détendre en admirant la ville et ses plus beaux monuments à toute heure du jour et de la nuit.Situé juste au pied du Sacré Coeur et du funiculaire qui permet de monter au sommet de la butte Montmartre,dans une petite rue...
                    </p>
                    <div class="flex-container">
                        <a href="#" data-fancybox="gallerie" data-src="img/terrasse.webp" data-caption="Vue sur les toits de Paris">
                            <img class="img-width-auto img-scale-anim" src="img/terrasse.webp" alt="Terrasse avec vue sur les toits">
                        </a>
                    </div>
                    <div class="flex-container">
                        <div class="img-left">
                            <a href="#" data-fancybox="gallerie" data-src="img/sacre-coeur.jpg" data-caption="Le sacre coeur">
                                <img class="img-scale-anim" src="img/sacre-coeur.jpg" alt="Le sacre coeur">
                            </a>
                        </div>
                        <div class="img-right">
                            <a href="#" data-fancybox="gallerie" data-src="img/montmarte-paris.jpg" data-caption="Rue pavée">
                                <img class="img-scale-anim" src="img/montmarte-paris.jpg" alt="Rue pavée">
                            </a>
                        </div>
                    </div>
                    <p>
                        Natoque penatibus et magnis dis parturient montes nascetur ridiculus. Adipiscing elit pellentesque habitant morbi tristique senectus. Vitae auctor eu augue ut lectus arcu bibendum at varius. Nisi lacus sed viverra tellus in. Vestibulum lectus mauris ultrices eros in cursus turpis. Suspendisse potenti nullam ac tortor vitae purus. Neque laoreet suspendisse interdum consectetur libero id. Lorem dolor sed viverra ipsum nunc aliquet. Suscipit tellus mauris a diam maecenas sed enim ut. Elementum facilisis leo vel fringilla est ullamcorper eget nulla. Ultricies integer quis auctor elit.
                    </p>
                    <div class="slider-container">
                        <div class="custom-slider fade">
                            <div class="slide-index">1 / 8</div>
                            <img class="slide-img" src="img/montmarte-paris.jpg" alt="Montmartre">
                            <div class="slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                        <div class="custom-slider fade">
                            <div class="slide-index">2 / 8</div>
                            <img class="slide-img" src="img/Place-artistes.jpg" alt="Place du tertre">
                            <div class="slide-text">Place du Tertre</div>
                        </div>
                        <div class="custom-slider fade">
                            <div class="slide-index">3 / 8</div>
                            <img class="slide-img" src="img/sacre-coeur.jpg" alt="Le sacré-coeur">
                            <div class="slide-text">Le Sacré-Coeur</div>
                        </div>
                        <div class="custom-slider fade">
                            <div class="slide-index">4 / 8</div>
                            <img class="slide-img" src="img/hd-wallpaper-7188619_1920.jpg" alt="Rue pavée">
                            <div class="slide-text">Rue pavée</div>
                        </div>
                        <div class="custom-slider fade">
                            <div class="slide-index">5 /8</div>
                            <img class="slide-img" src="img/cabaret-4613374_1920.jpg" alt="Cabaret">
                            <div class="slide-text">Cabaret</div>
                        </div>
                        <div class="custom-slider fade">
                            <div class="slide-index">6 / 8</div>
                            <img class="slide-img" src="img/le-paris-de-dalida-moulin-de-la-galette-paris-zigzag-e1519407796306.webp" alt="Le moulin de la galette">
                            <div class="slide-text">Le moulin de la galette</div>
                        </div>
                        <div class="custom-slider fade">
                            <div class="slide-index">7 / 8</div>
                            <img class="slide-img" src="img/moulin-rouge-392147_1920.jpg" alt="Le moulin de la galette">
                            <div class="slide-text">Le moulin rouge</div>
                        </div>
                        <div class="custom-slider fade">
                            <div class="slide-index">8 / 8</div>
                            <img class="slide-img" src="img/visite-questo-montmartre-ceetiz-1 (1).jpg" alt="Maison typique du quartier">
                            <div class="slide-text">Maison typique du quartier</div>
                        </div>
                        <a class="prev" onclick="plusSlides(-1)" title="Image précédente">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)" title="Image suivante">&#10095;</a>
                    </div>
                    <br>
                    <div class="slide-dot">
                        <span class="dot" onclick="currentSlide(1)"></span> 
                        <span class="dot" onclick="currentSlide(2)"></span> 
                        <span class="dot" onclick="currentSlide(3)"></span> 
                        <span class="dot" onclick="currentSlide(4)"></span> 
                        <span class="dot" onclick="currentSlide(5)"></span> 
                        <span class="dot" onclick="currentSlide(6)"></span> 
                        <span class="dot" onclick="currentSlide(7)"></span> 
                        <span class="dot" onclick="currentSlide(8)"></span> 
                    </div>
                    <p>
                        Natoque penatibus et magnis dis parturient montes nascetur ridiculus. Adipiscing elit pellentesque habitant morbi tristique senectus. Vitae auctor eu augue ut lectus arcu bibendum at varius. Nisi lacus sed viverra tellus in. Vestibulum lectus mauris ultrices eros in cursus turpis. Suspendisse potenti nullam ac tortor vitae purus. Neque laoreet suspendisse interdum consectetur libero id. Lorem dolor sed viverra ipsum nunc aliquet. Suscipit tellus mauris a diam maecenas sed enim ut. Elementum facilisis leo vel fringilla est ullamcorper eget nulla. Ultricies integer quis auctor elit.
                    </p>
                    <p>
                        Dictum at tempor commodo ullamcorper a lacus vestibulum. Fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis. Ullamcorper morbi tincidunt ornare massa eget egestas. Ut aliquam purus sit amet luctus venenatis. Vitae purus faucibus ornare suspendisse sed nisi lacus. Rhoncus mattis rhoncus urna neque viverra justo. Dui sapien eget mi proin sed libero. Justo laoreet sit amet cursus sit amet dictum sit amet.
                    </p>
                </div>
                <aside class="flexbox-right-33">
                    <h2>Actualités</h2>
                    <div class="news-container">
                        <a href="#">
                            <img  src="img/Expo.jpg" alt="expo">
                        </a>
                        <h3>Exposition Dans les Bois</h3>
                        <p class="img-description">
                            27 otobre 2022 - 19 décembre 2022
                        </p>
                    </div>
                    <div class="news-container">
                        <a  href="presentation.html" title="Présentation de l'appartement en location">
                            <img src="img/sejour.webp" alt="le séjour">
                        </a>
                        <h3>Découvrez votre logement</h3>
                        <p class="img-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Massa enim nec dui nunc mattis enim ut. Quisque sagittis purus sit amet volutpat
                        </p>
                    </div>
                    <div class="banner-pub">
                        <p>Retrouvez-nous sur</p>
                        <a  href="https://www.airbnb.fr/a/stays/Montmartre--Paris--%C3%8Ele-de-France--France?c=.pi0.pk393578423_138015655613&localized_ghost=true&gclid=Cj0KCQiA1NebBhDDARIsAANiDD14HwQUKAJbv-eoANVNLbwsE7cd__D05GnN2AD2SAtdeyDuT0XURPIaAgF_EALw_wcB&_set_bev_on_new_domain=1668683423_NDA0N2M3OTIwNmFh">
                            <img src="img/Airbnb_Logo.svg.png" alt="le séjour">
                        </a>
                    </div>
                    
                </aside>                 
            </div>
        </div>            
    </div>
</main>
<?php
require_once "footer.php";
?>