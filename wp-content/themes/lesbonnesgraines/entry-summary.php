<a class="entry-summary" href="<?php the_permalink(); ?>">
   <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail(); ?>
   <?php endif; ?>
   <span class="summary-text">
         <h3 class="entry-title">
            <?php the_title(); ?>
         </h3>
         <?php the_excerpt(); ?>
   </span>
</a>
