<?php get_header(); ?>
<!-- Main -->
<div id="main">

	<!-- Featured Post -->
	<?php
		$query	= new WP_Query(array(
			'post_type'		=> 'post',
			'meta_key'		=> 'massievly_featured_post',
			'meta_value'	=> 1,
		));

		if ( $query->have_posts() && $query->found_posts > 0 ) :
			while ( $query->have_posts() ) : $query->the_post();
				get_template_part('template-parts/posts/featured', 'post');
			endwhile;
		endif;
		wp_reset_postdata();
	?>

	<!-- Posts -->
	<section class="posts">
	<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();

				get_template_part('template-parts/posts/content', get_post_format() );
				
			endwhile;
	?>
	</section>

	<!-- Footer -->
	<footer>
		<div class="pagination">
		<?php 
			the_posts_pagination( array(
				'screen_reader_text'	=> ' ',
				'prev_text'	=> 'Previous',
				'next_text'	=> 'Next'
			) ); 
		?>
		</div>
	</footer>
	<?php else: ?>
		<h1><?php _e('Nothing Post Found!!', 'massively'); ?></h1>
	<?php endif; ?>
</div>
<?php get_footer(); ?>