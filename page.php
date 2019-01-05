<?php get_header(); ?>
	<!-- Main -->
	<div id="main">
	<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();

				the_content();

				if ( !post_password_required() ) {
					$defaults = array(
						'before'	=> '<div class="link-pages">'. __( 'Pages: ', 'massively' ),
						'after'		=> '</div>'
					);
					wp_link_pages( $defaults );
				}
			endwhile;
		endif;
	?>
	</div>
<?php get_footer(); ?>