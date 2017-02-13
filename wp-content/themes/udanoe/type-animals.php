<?php // Affiche l'archive portfolio
get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
  <a href="<?php the_permalink(); ?>">En savoir plus</a>
<?php endwhile; else: ?>
<?php _e('Sorry, no posts') ?>
<?php endif; ?>

<?php get_footer(); ?>
