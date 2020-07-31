<div class="entry-summary">
   <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail(); ?>
   <?php endif; ?>
   <span class="summary-text">
      <a href="<?php the_permalink(); ?>">
         <h3 class="entry-title">
            <?php the_title(); ?>
         </h3>
      </a>
      <?php if (is_home() && get_field('start_date') ) : ?>
         <p class="course-date">
            <span><?php the_field("start_date") ?></span>
         <?php if ( get_field("end_date") ) : ?>
            <span> -  <?php the_field("end_date") ?></span>
         <?php endif; ?>
         </p>
         <?php endif;
         the_excerpt();
      ?>
   </span>
</div>
