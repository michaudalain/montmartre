<footer>
            <div class="container">
                <div class="flex-container-footer">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.515968365377!2d2.338613515413101!3d48.8865031792902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e4ffe8fd717%3A0xf4aa1f0840f0e862!2sPlace%20du%20Tertre!5e0!3m2!1sfr!2sfr!4v1668887526474!5m2!1sfr!2sfr" width="750" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="footer-menus">
                        <p class="footer-title">Informations:</p>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#" title="Plan du site">Plan du site</a>
                                </li>
                                <li>
                                    <a href="#" title="CGU">CGU</a>
                                </li>
                                <li>
                                    <a href="#" title="Politique de confidentialité">Politique de confidentialité</a>
                                </li>
                                <li>
                                    <a href="#" title="Mentions légales">Mentions légales</a>
                                </li>
                            </ul>
                        </nav>
                        <p class="footer-title">Contact:</p>
                        <address>
                            <p>Adresse: 3 Rue Norvins, 75018 Paris</p> 
                            <p>Téléphone: 01 59 60 39 30</p>
                        </address>
                    </div>
                    
                </div>
            </div>
        </footer>
        <script>
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            if (document.documentElement.scrollTop > 300) {
                document.getElementById("navbar").classList.remove("navbar-transparent")
                document.getElementById("navbar").classList.add("navbar-opaque");
            } else {
                document.getElementById("navbar").classList.remove("navbar-opaque");
                document.getElementById("navbar").classList.add("navbar-transparent");
            }
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            const slides = document.getElementsByClassName("custom-slider");
            const dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
        }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    </body>
</html>