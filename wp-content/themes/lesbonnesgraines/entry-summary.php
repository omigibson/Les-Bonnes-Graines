<div class="entry-summary">
   <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail(); ?>
   <?php endif; ?>
   <span class="summary-text">
      <a href="<?php the_permalink(); ?>">
         <h3 class="entry-title">
            <?php the_title(); ?>
         </h3>
         <?php echo is_home() ? "<p class='course-date'>" . get_field("start_date") . " - " . get_field("end_date") . "</p>" : null ?>
         <?php the_excerpt(); ?>
      </a>
   </span>
</div>
