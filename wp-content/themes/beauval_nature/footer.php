    
<?php wp_footer(); ?>
    <footer class="main-footer">

        <!--  _____________  reseaux sociaux ____________   -->


        <div class="reseaux">
            <h1>Suivez nos actions</h1>
            <div class="socials">
                <a href="https://www.facebook.com/zoobeauval/"> <i class="fa fa-facebook-official"></i> </a>
                <a href="https://twitter.com/zoobeauval"> <i class="fa fa-twitter-square"></i> </a>
                <a href="https://www.youtube.com/user/zoobeauval"> <i class="fa fa-youtube-square"></i> </a>
                <a href="https://www.instagram.com/zoobeauval/"> <i class="fa fa-instagram"></i> </a>
                <a href="https://fr.pinterest.com/zoobeauval/"> <i class="fa fa-pinterest-square"></i> </a>
                <a href="https://plus.google.com/+zoobeauval"> <i class="fa fa-google-plus-square"></i> </a>
                <a href="https://www.tripadvisor.fr/Attraction_Review-g1163090-d1523840-Reviews-ZooParc_de_Beauval-Saint_Aignan_Loir_et_Cher_Centre_Val_de_Loire.html"> <i class="fa fa-tripadvisor"></i> </a>
            </div>

            <!-- __________________ lien donation _________________ -->


            <div class="lien_donation">
                <h1><a href="work_in_progress.html">Faites un don</a></h1>
                <p>
                    Aidez l’association Beauval Nature à protéger les animaux.
                </p>
            </div>
        </div>

        <!-- ___________________ liens utiles ____________________ -->


        <div class="liens_utiles row">

            <div class="barre">
                <p><span class="icon-puce"></span>
                </p>
            </div>


            <div class="col col--3-of-12"></div>
            <div class="col col--1-of-12">

                <a href="https://www.zoobeauval.com/"> <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_zoo.png" alt="" class="logo_parc" /> </a>
            </div>
            <div class="col col--2-of-12"><a href="https://www.zoobeauval.com/"><h2>En lien avec <br>le ZooParc de Beauval</h2></a></div>
            <div class="col col--2-of-12">
                <h2>Contact</h2>
                
                <?php wp_nav_menu( [
			'menu'       => 'footer-1',
			'container'  => '',
		] ); ?>
            </div>
            <div class="col col--2-of-12 mentions_legales">
                <h2>Mentions Légales</h2>
                
                <?php wp_nav_menu( [
			'menu'       => 'footer-2',
			'container'  => '',
		] ); ?>
                <p>© 2016 ZooParc de beauval</p>
            </div>

            <div class="col col--3-of-12"></div>

        </div>

        <div class="scroll_button">
            <div class="fleche">
                <a id="up">
                    <i class="fa fa-chevron-up" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </footer>

    

</body>

</html>