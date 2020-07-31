<?php get_header(); ?>
<main id="single-content">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
         <header>
            <h1 class="entry-title">
               <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h1>
         </header>
         <div class="entry-content">
            <div class="course-info">
               <?php if ( has_post_thumbnail() ) : the_post_thumbnail(); endif; ?>
               <div>
                  <ul>
                     <li>
                     <?php if ( get_field('start_date') ) : ?>
                           <span><?php the_field("start_date") ?></span>
                        <?php if ( get_field("end_date") ) : ?>
                           <span> -  <?php the_field("end_date") ?></span>
                        <?php
                           endif;
                        endif; ?>
                     </li>
                     <li>
                        <?php if ( get_field('price') ) : the_field("price"); endif; ?>
                     </li>
                     <li>
                        <?php if ( get_field('location') ) : the_field("location"); endif; ?>
                     </li>
                  </ul>
               </div>
            </div>
            <?php the_content(); ?>
            <div class="entry-links"><?php wp_link_pages(); ?></div>
         </div>
      </article>
   <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
