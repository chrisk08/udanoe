<?php
/*
Template Name: 404
*/
get_header(); ?>
    <div class="container">
        <div class="row">
                  
                    <div class="col-lg-6 col-md-6"> <img src="<?php echo get_bloginfo('template_directory'); ?>/img/404.jpg" alt="Image page d'erreur 404" class="img-responsive">  </div>
                    <div class="col-lg-6 col-md-6">
                      <p>La page que vous recherchez n'éxiste peut-être pas ou a été déplacée et n'est plus disponible.<BR>
                      Vous pouvez : 
                      </p>
                    
                      <ul>
                        <li>Retounrez sur la page d'accueil par <a href="http://localhost/udanoe/">ici</a></li>
                        <li>Signaler une page qui aurait dû être disponible par <a href="http://localhost/udanoe/index.php/contact/">ici</a></li>
                      </ul>
                      
                    </div>

            </div> <!-- Fin Ligne 404 -->

      </div>

<?php get_footer(); ?>
