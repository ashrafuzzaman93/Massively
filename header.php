<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class( array('is-preload') ); ?>>

		<!-- Wrapper -->
		<div id="wrapper" class="fade-in">

			<!-- Intro -->
			<?php  
				$getCustomTitle = get_theme_mod( 'header_custom_title' );
				$getCustomDesc = get_theme_mod( 'header_custom_description' );

				if ( is_home() && ( !empty( $getCustomTitle ) || !empty( $getCustomDesc ) ) ) :
			?>
				<div id="intro">
					<h1><?php echo !empty( $getCustomTitle ) ? wp_kses_post( $getCustomTitle ) : ''; ?></h1>
					<p><?php echo !empty( $getCustomDesc ) ? wp_kses_post( $getCustomDesc ) : ''; ?></p>
					<ul class="actions">
						<li><a href="#header" class="button icon solo fa-arrow-down scrolly"><?php _e( 'Continue', 'massively' ); ?></a></li>
					</ul>
				</div>
			<?php endif; ?>
				
			<!-- Header -->
			<header id="header">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><?php bloginfo( 'name' ); ?></a>
			</header>

			<!-- Nav -->
			<nav id="nav">
			<?php  
				if ( has_nav_menu('mainmenu') ) {
					$args = array(
						'theme_location'	=> 'mainmenu',
						'container'			=> 'ul',
						'menu_class'		=> 'links',
					);
					wp_nav_menu($args);
				} else {
					echo '<ul class="links">
							<li class="current-menu-item"><a href="">'. __( 'Home', 'massively' ) .'</a></li>
						  </ul>';
				}
			?>
				<ul class="icons">
					<?php if ( !empty( get_theme_mod('massively_fb_text') ) ) : ?>
						<li>
							<a href="<?php echo esc_url( get_theme_mod('massively_fb_text') ); ?>" class="icon fa-facebook">
								<span class="label"><?php _e( 'Facebook', 'massively' ); ?></span>
							</a>
						</li>
					<?php endif; ?>

					<?php if ( !empty( get_theme_mod('massively_twitter_text') ) ) : ?>
						<li>
							<a href="<?php echo esc_url( get_theme_mod('massively_twitter_text') ); ?>" class="icon fa-twitter">
								<span class="label"><?php _e( 'Twitter', 'massively' ); ?></span>
							</a>
						</li>
					<?php endif; ?>

					<?php if ( !empty( get_theme_mod('massively_ins_text') ) ) : ?>
						<li>
							<a href="<?php echo esc_url( get_theme_mod('massively_ins_text') ); ?>" class="icon fa-instagram">
								<span class="label"><?php _e( 'Instagram', 'massively' ); ?></span>
							</a>
						</li>
					<?php endif; ?>

					<?php if ( !empty( get_theme_mod('massively_git_text') ) ) : ?>
						<li>
							<a href="<?php echo esc_url( get_theme_mod('massively_git_text') ); ?>" class="icon fa-github">
								<span class="label"><?php _e( 'GitHub', 'massively' ); ?></span>
							</a>
						</li>
					<?php endif; ?>
				</ul>
			</nav>
