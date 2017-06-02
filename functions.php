<?php
/**
 * AMZ Rocket Official functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AMZ_Rocket_Official
 */

if ( ! function_exists( 'amzrocket_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function amzrocket_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on AMZ Rocket Official, use a find and replace
	 * to change 'amzrocket' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'amzrocket', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'amzrocket' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'amzrocket_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'amzrocket_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function amzrocket_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'amzrocket_content_width', 640 );
}
add_action( 'after_setup_theme', 'amzrocket_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function amzrocket_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'amzrocket' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'amzrocket' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'amzrocket_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function amzrocket_scripts() {

	// ============ CSS
	wp_enqueue_style( 'amzrocket-style', get_stylesheet_uri() );

	wp_enqueue_script( 'amzrocket-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// Fontawesome
	wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/css/fa/css/font-awesome.min.css' );

	// Google Fonts
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Raleway:200,400,700,900' );

	// Foundation Grid
	wp_enqueue_style( 'foundation', get_template_directory_uri().'/css/foundation.css' );

	// Main and Front CSS
	wp_enqueue_style( 'main', get_template_directory_uri().'/css/main.css' );
	if (is_front_page()) wp_enqueue_style( 'front', get_template_directory_uri().'/css/front.css' );


	// ============ JAVASCRIPT
	wp_enqueue_script( 'amzrocket-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	// JQuery (FOOTER)
	wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
    wp_enqueue_script( 'jquery' );

    // GSAP
	wp_enqueue_script( 'GSAP', 'http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js', false, false, true);

	// ScrollMagic
	wp_enqueue_script( 'scrollmagic-main', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js', false, false, true);
	wp_enqueue_script( 'scrollmagic-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', false, false, true);
	wp_enqueue_script( 'scrollmagic-indicators', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js', false, false, true);

	// Main and Front JS
	wp_enqueue_script( 'main-js', get_template_directory_uri().'/js/main.js', false, false, true );
	if (is_front_page()) wp_enqueue_script( 'front-js', get_template_directory_uri().'/js/front.js', false, false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'amzrocket_scripts' );

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
