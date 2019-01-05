<!-- Featured Post -->
<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'post', 'featured' ) ) ?>>
	<header class="major">
		<span class="date"><?php echo esc_html( get_the_date('M d, Y') ); ?></span>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p><?php echo wp_trim_words( get_the_content(), 30 ); ?></p>
	</header>
	<a href="<?php the_permalink(); ?>" class="image main">
		<?php  
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} else {
				echo '<img src="'. get_theme_file_uri() .'/images/pic02.jpg" alt="'. esc_attr( get_the_title() ) .'" />';
			}
		?>
	</a>
	<ul class="actions special">
		<li><a href="<?php the_permalink(); ?>" class="button large"><?php _e( 'Full Story', 'massively' ); ?></a></li>
	</ul>
</article>