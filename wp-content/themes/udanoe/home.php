<?php
/*
Template Name: Home
*/
get_header(); ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="service-box">
                        <h3>Adoption</h3>
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/val1.png" alt="">
                        <p class="text-muted">Venez faire votre meilleure rencontre parmi nos animaux prêt à l'adoption.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="service-box">
                         <h3>Soins</h3>
                         <img src="<?php echo get_bloginfo('template_directory'); ?>/img/val2.png" alt="">
                        <p class="text-muted">Nous secourons et soignons les animaux abandonnés ou victime de maltraitances.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="service-box">
                        <h3>Dons</h3>
                         <img src="<?php echo get_bloginfo('template_directory'); ?>/img/val3.png" alt="">
                        <p class="text-muted">Chaque centime compte ! Votre don généreux aide, les animaux qui en ont le plus besoin.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="service-box">
                        <h3>Bénévoles</h3>
                         <img src="<?php echo get_bloginfo('template_directory'); ?>/img/val4.png" alt="">
                        <p class="text-muted">Nos pensionnaires ont besoin de vous ! Compagnie, soins, accueil des visiteurs, nettoyage...</p>
                    </div>
                </div>
            </div>
            </div>
    </section>
    <section id="apropos">
          
                <div class="container">

                <div class="row">
                        <?php query_posts('pagename=accueil'); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <div class="col-lg-5 col-sm-6">
                                         <h2><?php the_title(); ?></h2>
                                              <?php the_content(); ?>
                        </div>

                        <div class="text-center col-lg-6 col-lg-offset-1 col-sm-6 ">
                                <?php echo  the_post_thumbnail('post-thumbnail', array( 'class' => "img-responsive"));  ?>
                        </div>
                                              <?php endwhile; else : ?>
                                              <p><?php _e( 'Désolé mais il n\'y a pas d\'affichage disponibles pour cette page'); ?></p>
                                              <?php endif; ?>

                </div>

<?php get_footer(); ?>

<?php
/* Afficher les derniers adopter
     $portfolio = new WP_query(array(
                                                    'post_type' => 'portfolio',
                                                    'posts_per_page' => 3
                                              ));
                                           if($portfolio->have_posts()) : while($portfolio->have_posts()) : $portfolio->the_post();?>
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>


                                            <?php endwhile; endif; wp_reset_query(); ?>*/
