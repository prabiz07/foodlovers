<?php
/**
 * foodlovers functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package foodlovers
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'foodlovers_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function foodlovers_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on foodlovers, use a find and replace
		 * to change 'foodlovers' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'foodlovers', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'foodlovers' ),
				'footer'  => esc_html__('Footer Menu', 'foodlovers'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'foodlovers_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'foodlovers_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function foodlovers_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'foodlovers_content_width', 640 );
}
add_action( 'after_setup_theme', 'foodlovers_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function foodlovers_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'foodlovers' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'foodlovers' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'foodlovers_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function foodlovers_scripts() {
	// Enqueue Style 
	wp_enqueue_style( 'foodlovers-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri(). '/apps/css/main.css' );

	wp_style_add_data( 'foodlovers-style', 'rtl', 'replace' );

	// Enqueue SCripts
	wp_enqueue_script( 'foodlovers-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jquery', get_template_directory_uri(), array(), true );
	wp_enqueue_script( 'jquery-ui', get_template_directory_uri(). '/apps/js/jquery-ui.js', array(), '1.12.1', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri(). '/apps/js/bootstrap.min.js', array(), '4.5.3', true );
	wp_enqueue_script( 'waypoint', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array('jquery'), '1.6.2', true );
	wp_enqueue_script( 'counter-js', get_template_directory_uri(). '/apps/js/jquery.counterup.min.js', array(), '1.0', true );
	wp_enqueue_script( 'main-script', get_template_directory_uri(). '/apps/js/main.js', array(), '1.0.0', true );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'foodlovers_scripts' );

function load_slider_js(){
	if(is_front_page()){
		wp_enqueue_script( 'slider_script', get_template_directory_uri(). '/apps/js/slider.js', array(), '1.0.0', true );
	}
}
add_action('wp_enqueue_scripts', 'load_slider_js');

// Defining the custom action and give functionality to the action.
function main_nav(){
	do_action( 'main-nav' );
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Navigation
 */
require get_template_directory() . '/inc/main-navigation.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

