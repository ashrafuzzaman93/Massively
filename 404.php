<?php get_header(); ?>
	<!-- Main -->
	<div id="main">
		<div class="error" style="text-align: center;">
			<img src="<?php echo get_theme_file_uri() ?>/images/404-Error.png" alt="404 Error">
			<p style="text-align: center;"><?php _e( 'Back to', 'massively' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Home', 'massively' ); ?></a> </p>
		</div>	
	</div>
<?php get_footer(); ?>