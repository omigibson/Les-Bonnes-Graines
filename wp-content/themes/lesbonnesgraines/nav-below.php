<?php $args = array(
'prev_text' => sprintf( esc_html__( '%s older', 'lesbonnesgraines' ), '<span class="meta-nav">&larr;</span>' ),
'next_text' => sprintf( esc_html__( 'newer %s', 'lesbonnesgraines' ), '<span class="meta-nav">&rarr;</span>' )
);
the_posts_navigation( $args ); ?>