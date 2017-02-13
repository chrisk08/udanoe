<?php // Affiche une seule récurence
get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php the_title(); ?>
<?php the_post_thumbnail('large'); ?>
<?php the_content(); ?>

<?php endwhile; else: ?>
<?php _e('Sorry, no posts') ?>
<?php endif; ?>

<?php get_footer(); ?>

 ?>
