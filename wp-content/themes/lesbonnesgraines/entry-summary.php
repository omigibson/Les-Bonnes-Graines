<div class="entry-summary">
   <a href="<?php the_permalink(); ?>">
      <?php if ( has_post_thumbnail() ) : ?>
         <?php the_post_thumbnail(); ?>
      <?php endif; ?>
      <h3 class="entry-title">
         <?php the_title(); ?>
      </h3>
      <?php the_excerpt(); ?>
   </a>
</div>
