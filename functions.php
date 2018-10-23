<?php
/**
 * Amazing Blog functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Amazing_Blog
 */

/**
 * require amazing_blog int.
 */
require get_template_directory() . '/inc/init.php';

if ( ! function_exists( 'amazing_blog_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function amazing_blog_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Amazing Blog, use a find and replace
	 * to change 'amazing-blog' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'amazing-blog', get_template_directory() . '/languages' );

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

	add_image_size( 'amazing-blog-header-image', 1361, 533, true );
	add_image_size( 'amazing-blog-blog-image', 710, 320, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'amazing-blog' ),
		'social' => esc_html__( 'Header Social', 'amazing-blog' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'gallery',
		'image',
		'quote',
		'link',
		'status',
		'video',
		'audio',
		'chat'
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'amazing_blog_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // amazing_blog_setup
add_action( 'after_setup_theme', 'amazing_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function amazing_blog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'amazing_blog_content_width', 640 );
}
add_action( 'after_setup_theme', 'amazing_blog_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function amazing_blog_scripts() {
	global $amazing_blog_customizer_all_values;

	/*google font*/
	$amazing_blog_font_family_site_identity = $amazing_blog_customizer_all_values['amazing-blog-font-family-site-identity'];
	$amazing_blog_font_family_h1_h6 = $amazing_blog_customizer_all_values['amazing-blog-font-family-h1-h6'];

	wp_enqueue_style( 'amazing-blog-googleapis-site-identity', '//fonts.googleapis.com/css?family='.$amazing_blog_font_family_site_identity.'', array(), '' );/*added*/
	wp_enqueue_style( 'amazing-blog-googleapis-heading', '//fonts.googleapis.com/css?family='.$amazing_blog_font_family_h1_h6.'', array(), '' );/*added*/

	wp_enqueue_style( 'amazing-blog-googleapis', '//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,400italic|Arapey:400,400italic', array(), '' );/*added*/

	// Style
	wp_enqueue_style( 'mmenu', get_template_directory_uri() . '/assets/frameworks/mmenu/css/jquery.mmenu.all.css' );/*added*/
	
	wp_enqueue_style( 'amazing-blog-style', get_stylesheet_uri() );
    
	// Script
	wp_enqueue_script('easing', get_template_directory_uri() . '/assets/frameworks/jquery.easing/jquery.easing.js', array('jquery'), '0.3.6', 1);

	wp_enqueue_script( 'mmenu', get_template_directory_uri() . '/assets/frameworks/mmenu/js/jquery.mmenu.min.all.js', array('jquery'), '4.7.5', false );

	wp_enqueue_script('amazing-blog-custom', get_template_directory_uri() . '/assets/js/evision-custom.js', array('jquery'), '1.0.1', 1);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'amazing_blog_scripts' );


/**
 * Enqueue admin scripts and styles.
 */
function amazing_blog_widgets_admin_scripts( $hook ) {

	if ( 'widgets.php' == $hook ) {
		wp_enqueue_media();
		wp_enqueue_script( 'amazing-blog-widgets-script', get_template_directory_uri() . '/assets/js/widgets.js', array( 'jquery' ), '1.0.0' );
	}

}
add_action( 'admin_enqueue_scripts', 'amazing_blog_widgets_admin_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/*update to pro added*/
require_once( trailingslashit( get_template_directory() ) . 'trt-customize-pro/amazing-blog/class-customize.php' );
