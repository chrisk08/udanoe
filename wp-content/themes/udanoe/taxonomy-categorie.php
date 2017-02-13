<?php // Affiche une seule récurence
get_header(); ?>

<div class="container">

    <div class="row">

                <?php if(have_posts()): while(have_posts()): the_post(); 

                  $urlImage = get_post_thumbnail_id();
                  $urlImage = wp_get_attachment_image_src($urlImage,'large');
                  $urlImage = $urlImage[0];
                  $title = get_the_title();
                  $content = get_the_content();


                ?>

                      <div class="col-lg-3 col-sm-6">
                        <!-- DEBUT animal -->
                        <div class="ih-item square effect7">
                          <a href="<?php echo $urlImage; ?>" data-lightbox="example-set" data-title="<?php echo $title .', '. $content; ?>">
                            <div class="img"><?php the_post_thumbnail('large'); ?></div>
                            <div class="info">
                            <h3><?php  echo $title ?></h3>
                            <p><?php echo $content; ?></p>
                            </div>
                          </a>
                        </div>
                        <!-- Fin Animal -->
                      </div>

                <?php endwhile; else: ?>
                <?php _e('Sorry, no posts') ?>
                <?php endif; ?>

    </div>

</div>

<?php get_footer(); ?>

