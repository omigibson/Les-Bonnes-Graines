<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <header>
      <h1 class="entry-title">
         <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
      </h1>
   </header>
   <div class="entry-content">
      <?php if ( has_post_thumbnail() ) : ?>
         <a href="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false ); echo esc_url( $src[0] ); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
      <?php endif; ?>
      <?php the_content(); ?>
      <div class="entry-links"><?php wp_link_pages(); ?></div>
   </div>
   <?php get_template_part( 'entry-footer' ); ?>
</article>
