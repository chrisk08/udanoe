</section>
    <footer>
        <section id="bottom-top">
                <div class="container">
        <div class="row">
               <div class="col-lg-12 text-left">
                    <h2>Ils ont retrouvés une famille</h2>
               </div>     
        </div>
        </div>
                 <div class="container">
       <div class="row">
               <div class="col-sm-6 col-md-3">
         
            <!-- normal -->
            <div class="ih-item square effect3 bottom_to_top"><a href="#" class="verrou">
                <div class="img"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/chien.jpg" alt="img"></div>
                <div class="info">
                  <h3>Nala</h3>
                </div></a></div>
            <!-- end normal -->
         
          </div>
         <div class="col-sm-6 col-md-3">
         
            <!-- normal -->
            <div class="ih-item square effect3 top_to_bottom"><a href="#" class="verrou">
                <div class="img"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/chien.jpg" alt="img"></div>
                <div class="info">
                  <h3>Pepito</h3>
                </div></a></div>
            <!-- end normal -->
         
          </div>
                 <div class="col-sm-6 col-md-3">
         
            <!-- normal -->
            <div class="ih-item square effect3 bottom_to_top"><a href="#" class="verrou">
                <div class="img"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/chien.jpg" alt="img"></div>
                <div class="info">
                  <h3>Mistigri</h3>
                </div></a></div>
            <!-- end normal -->
         
          </div>
         <div class="col-sm-6 col-md-3">
         
            <!-- normal -->
            <div class="ih-item square effect3 top_to_bottom"><a href="#" class="verrou">
                <div class="img"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/chien.jpg" alt="img"></div>
                <div class="info">
                  <h3>Zippo</h3>
                </div></a></div>
            <!-- end normal -->
         </div>

     </div>
</div>
        </section>
        <section id="bottom-bottom">
        <div class="container">
            <div class="row">
                    <div class="footer-col  col-md-4 text-center">
                        <h3>Refuge asso U.D.A.NOE</h3>
                        <p>30 rue de la centrale
                        <br>02800 Beautor</p>
                    </div>
                    <div class="footer-col col-md-4 text-center">
                        <h3>Suivez-nous</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fb-logo"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4 text-center">
                        <h3>Restez informés</h3>
                        <form action="#" method="post" class="newsletter">
                    <input type="text" value="" id="news_email" placeholder="Votre adresse e-mail">
                    <button type="submit" id="inscription_newsletter"><span class="glyphicon glyphicon-envelope"></span></button>
                  </form>
                    </div>
                </div>
                </div>
        </section>
    </footer>

    <?php wp_reset_query (); ?> 
    <?php wp_footer(); ?>
    <?php if (is_tax( 'categorie') ) : ?>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/lightbox.min.js"></script>
        <script>
        lightbox.option({
          'alwaysShowNavOnTouchDevices': true,
          'positionFromTop' : 300
        })
    <?php endif; ?>
</script>

</body>

</html>
