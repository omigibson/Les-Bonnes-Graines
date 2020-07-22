<?php get_header(); ?>
<main id="content">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
         <div class="entry-content">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            <?php the_content(); ?>
         </div>
      </article>
   <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
