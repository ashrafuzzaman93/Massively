	<!-- Footer -->
	<footer id="footer">
		<section>
		<?php 
		if ( is_active_sidebar( 'footer_sidebar_left' ) ) {
			dynamic_sidebar('footer_sidebar_left'); 
		}
		?>
		</section>
		<?php 
		if ( is_active_sidebar( 'footer_sidebar_right' ) ) {
			dynamic_sidebar('footer_sidebar_right'); 
		}
		?>
	</footer>

	<!-- Copyright -->
	<div id="copyright">
		<ul>
		<?php 
			$def =  __( 'Copyright &copy;', 'massively' ).' '. get_the_date('Y') . ' ' . get_bloginfo('name') . '. '.__( 'All Rights Reserved.', 'massively' );
			echo wp_kses_post( get_theme_mod( 'footer_text_option', $def ) ); 
		?>
		</ul>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>