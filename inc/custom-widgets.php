<?php
	
	function massively_register_widgets() {
		register_widget('massively_address');
	}
	add_action( 'widgets_init', 'massively_register_widgets' );

	class massively_address extends WP_Widget {
		public function __construct() {
			$des = array(
				'description'	=> __( 'Input your address.', 'massively' )
			);
			parent::__construct( 'massively_address_widget', __( 'Massively &mdash; Addess Widget', 'massively' ), $des );
		}


		public function widget( $args, $instance ) {
	?>
		<section class="split contact">
			<section class="alt">
				<h3><?php _e( 'Address', 'massively' ); ?></h3>
				<p style="line-height: 20px;"><?php echo !empty($instance['addr']) ? $instance['addr'] : ''; ?></p>
			</section>
			<section>
				<h3><?php _e( 'Phone', 'massively' ); ?></h3>
				<p><a href="<?php echo !empty($instance['phn']) ? 'tel:'.$instance['phn'] : '#'; ?>"><?php echo !empty($instance['phn']) ? $instance['phn'] : ''; ?></a></p>
			</section>
			<section>
				<h3><?php _e( 'Email', 'massively' ); ?></h3>
				<p><a href="<?php echo !empty($instance['mail']) ? 'mailto:'.$instance['mail'] : '#'; ?>"><?php echo !empty($instance['mail']) ? $instance['mail'] : ''; ?></a></p>
			</section>
			<section>
				<h3><?php _e( 'Social', 'massively' ); ?></h3>
				<ul class="icons alt">
					<?php if ( !empty( get_theme_mod('massively_fb_text') ) ) : ?>
						<li>
							<a href="http://<?php echo get_theme_mod('massively_fb_text'); ?>" class="icon alt fa-facebook">
								<span class="label"><?php _e( 'Facebook', 'massively' ); ?></span>
							</a>
						</li>
					<?php endif; ?>

					<?php if ( !empty( get_theme_mod('massively_twitter_text') ) ) : ?>
						<li>
							<a href="http://<?php echo get_theme_mod('massively_twitter_text'); ?>" class="icon alt fa-twitter">
								<span class="label"><?php _e( 'Twitter', 'massively' ); ?></span>
							</a>
						</li>
					<?php endif; ?>

					<?php if ( !empty( get_theme_mod('massively_ins_text') ) ) : ?>
						<li>
							<a href="http://<?php echo get_theme_mod('massively_ins_text'); ?>" class="icon alt fa-instagram">
								<span class="label"><?php _e( 'Instagram', 'massively' ); ?></span>
							</a>
						</li>
					<?php endif; ?>

					<?php if ( !empty( get_theme_mod('massively_git_text') ) ) : ?>
						<li>
							<a href="http://<?php echo get_theme_mod('massively_git_text'); ?>" class="icon alt fa-github">
								<span class="label"><?php _e( 'GitHub', 'massively' ); ?></span>
							</a>
						</li>
					<?php endif; ?>
				</ul>
			</section>
		</section>

	<?php
		}

		public function form( $instance ) {
	?>
	
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id('title') ); ?>"><?php _e( 'Title: ', 'massively' ); ?></label>
			<input type="text" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" value="<?php echo !empty($instance['title']) ? esc_attr( $instance['title'] ) : '' ?>" class="widefat">
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id('addr') ); ?>"><?php _e( 'Address:', 'massively' ); ?></label>
			<textarea name="<?php echo esc_attr( $this->get_field_name('addr') ); ?>" id="<?php echo esc_attr( $this->get_field_id('addr') ); ?>" rows="3" class="widefat"><?php echo !empty($instance['addr']) ? esc_html( $instance['addr'] ) : '' ?></textarea>
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id('phn') ); ?>"><?php _e( 'Phone:', 'massively' ); ?> </label>
			<input type="text" name="<?php echo esc_attr( $this->get_field_name('phn') ); ?>" id="<?php echo esc_attr( $this->get_field_id('phn') ); ?>" value="<?php echo !empty($instance['phn']) ? esc_attr( $instance['phn'] ) : ''; ?>" class="widefat">
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id('mail') ); ?>"><?php _e( 'Email:', 'massively' ); ?> </label>
			<input type="text" name="<?php echo esc_attr( $this->get_field_name('mail') ); ?>" id="<?php echo esc_attr( $this->get_field_id('mail') ); ?>" value="<?php echo !empty($instance['mail']) ? esc_attr( $instance['mail'] ) : ''; ?>" class="widefat">
		</p>
		
	<?php
		}
	} 
	?>