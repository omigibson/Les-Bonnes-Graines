<?php get_header(); ?>
<main id="single-content">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
         <header>
            <h2 class="entry-title">
               <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h2>
         </header>
         <div class="entry-content">
            <div class="image-and-info">
               <?php if ( has_post_thumbnail() ) : the_post_thumbnail(); endif; ?>
               <div class="course-info">
                  <h3>Om kursen</h3>
                  <ul>
                     <li>
                     <?php if ( get_field("start_date") ) : ?>
                           <span>Datum: <?php the_field("start_date") ?></span>
                        <?php if ( get_field("end_date") ) : ?>
                           <span> -  <?php the_field("end_date") ?></span>
                        <?php
                           endif;
                        endif; ?>
                     </li>
                     <li>
                        <?php if ( get_field("price") ) : echo "Pris: €" . get_field("price"); endif; ?>
                     </li>
                     <li>
                        <?php if ( get_field("location") ) : echo "Plats: " . get_field("location"); endif; ?>
                     </li>
                  </ul>
                  <p><?php if ( get_field("additional_info") ) : the_field("additional_info"); endif; ?></p>
               </div>
            </div>
            <div class="post-content"><?php the_content(); ?></div>
         </div>
      </article>
   <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
