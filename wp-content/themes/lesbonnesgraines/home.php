<?php get_header(); ?>
<main id="courses">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'entry' ); ?>
   <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
