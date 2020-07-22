<?php get_header(); ?>
<main id="content">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
         <section class="entry-content">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            <?php the_content(); ?>
         </section>
         <aside class="latest-courses">
            <?php
               $latest_courses = new WP_Query( array( 'posts_per_page' => 3 ) );
               if ( $latest_courses->have_posts() ) : while ( $latest_courses->have_posts() ) : $latest_courses->the_post();
                  get_template_part( 'entry-summary' );
               endwhile; endif;
            ?>
         </aside>
      </article>
   <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
