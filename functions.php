<?php
	
/*-----------------------------*/
/* Theme Bootstrapping */
/*-----------------------------*/
if ( !function_exists('massively_theme_setup') ) {

	function massively_theme_setup() {

		/* REGISTER TEXT DOMAIN FOR TRANSLATION */
		load_theme_textdomain('massively');

		/* GETTING RSS FEED LINKS */
		add_theme_support( 'automatic-feed-links' );

		/* GETTING TITLE TAG */
		add_theme_support('title-tag');

		/* GETTING POST THUMBNAIL */
		add_theme_support('post-thumbnails');

		// add_theme_support('custom-header');

		/* GETTING BACKGROUND OPTIONS */
		add_theme_support('custom-background');			

		/* GETTING POST FORMATS */ 
		add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );

		/*
	     * Switch default core markup for search form, comment form, and comments
	     * to output valid HTML5.
	     */
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) ); // 

		/* REGISTER NAV MENU */
		register_nav_menu( 'mainmenu', __( 'Main Menu', 'massively' ) );

		if ( ! isset( $content_width ) ) $content_width = 900;
	}
	add_action('after_setup_theme', 'massively_theme_setup');
}


/*-----------------------------*/
/* Sidebar register */
/*-----------------------------*/
function massively_register_sidebar() {
	$args = array(
		'id'			=> 'footer_sidebar_left',
		'name'			=> __( 'Footer Left Sidebar', 'massively' ),
		'description'	=> __( 'Set your footer widgets from widgets area.', 'massively' ),
		'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
		'after_section'	=> '</div>'
	);
	register_sidebar($args);

	$args1 = array(
		'id'			=> 'footer_sidebar_right',
		'name'			=> __( 'Footer Right Sidebar', 'massively' ),
		'description'	=> __( 'Set your footer widgets from widgets area.', 'massively' )
	);
	register_sidebar($args1);
}
add_action( 'widgets_init', 'massively_register_sidebar' );


/*-----------------------------*/
/* Include theme assets */
/*-----------------------------*/
function massively_theme_assets() {

	$var = '1.0.0';

	/* CSS */
	wp_enqueue_style( 'font-awesome', get_theme_file_uri('/assets/css/font-awesome.min.css'), null, $var );
	wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Merriweather:300,700,300italic,700italic|Source+Sans+Pro:900', null, $var );
	wp_enqueue_style( 'main-css', get_theme_file_uri('/assets/css/main.css'), null, $var );
	wp_enqueue_style( 'noscript-css', get_theme_file_uri('/assets/css/noscript.css'), null, $var );
	wp_enqueue_style( 'theme-css', get_stylesheet_uri(), '', $var );

	/* JavaScripts */
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'scrollex-js', get_theme_file_uri('/assets/js/jquery.scrollex.min.js'), null, $var );
	wp_enqueue_script( 'scrolly-js', get_theme_file_uri('/assets/js/jquery.scrolly.min.js'), null, $var );
	wp_enqueue_script( 'browser-js', get_theme_file_uri('/assets/js/browser.min.js'), null, $var );
	wp_enqueue_script( 'breakpoints-js', get_theme_file_uri('/assets/js/breakpoints.min.js'), null, $var );
	wp_enqueue_script( 'util-js', get_theme_file_uri('/assets/js/util.js'), null, $var );
	wp_enqueue_script( 'main-js', get_theme_file_uri('/assets/js/main.js'), array('jquery'), $var, true );

	if( is_singular() && comments_open() && ( get_option( 'thread_comments' ) == 1) ) {
        // Load comment-reply.js (into footer)
        wp_enqueue_script( 'comment-reply', 'wp-includes/js/comment-reply', array(), false, true );
    }
}
add_action('wp_enqueue_scripts', 'massively_theme_assets');


/*-----------------------------*/
/* REQUIRED FILES */
/*-----------------------------*/
require_once('inc/custom-widgets.php');
require_once('inc/customizer.php');
require_once( get_theme_file_path( '/inc/tgm.php' ) );
require_once( get_theme_file_path( '/inc/acf-metabox.php' ) );

/* HIDE ACF UI MENU */
add_filter('acf/settings/show_admin', '__return_false');

/*-----------------------------*/
/* CUSTOM STYLES ADD */
/*-----------------------------*/

function massively_custom_css_styles() {
	?>
	<style>
		<?php if ( !empty( get_background_image() ) ) : ?>
			.bg{
				background-image: url("<?php echo esc_url( get_theme_file_path( '/images/overlay.png' ) ); ?>"), linear-gradient(0deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url( <?php echo get_background_image(); ?> ) !important;
			}
		<?php endif; ?>
	</style>
	<?php
}
add_action( 'wp_head', 'massively_custom_css_styles' );