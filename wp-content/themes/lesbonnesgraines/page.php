<?php get_header(); ?>
<main id="content">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
         <?php if ( !is_front_page()) : ?>
            <header class="header">
               <h1 class="entry-title"> <?php the_title() ?> </h1>
            </header>
         <?php endif ?>
         <div class="entry-content">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            <?php the_content(); ?>
         </div>
      </article>
   <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
