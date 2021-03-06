<?php
/**
 * giver functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package giver
 */

if ( ! defined( 'GIVER_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'GIVER_VERSION', '1.0.1' );
}

if ( ! function_exists( 'giver_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function giver_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on giver, use a find and replace
		 * to change 'giver' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'giver', get_template_directory() . '/languages' );

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


		// add_theme_support( 'custom-header', array( 'header-text' => false ) );

		/* custom-header */
		$args = array(
    	'width'         => 1920,
    	'height'        => 500,
		);
		add_theme_support( 'custom-header', $args );

		/* Editor style */
		add_editor_style();

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'giver' ),
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
				'giver_custom_background_args',
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
add_action( 'after_setup_theme', 'giver_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function giver_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'giver_content_width', 640 );
}
add_action( 'after_setup_theme', 'giver_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function giver_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'giver' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'giver' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'giver_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function giver_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '3.7.0', 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '3.7.0', 'all' );
	wp_enqueue_style( 'giver-style', get_stylesheet_uri(), array(), GIVER_VERSION );
	wp_style_add_data( 'giver-style', 'rtl', 'replace' );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '3.3.7', true );
	wp_enqueue_script( 'giver-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery' ), '1.0.0', true );
	wp_enqueue_script( 'giver-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'giver_scripts' );


/**
 * Google Fonts
 */

function giver_google_font_url() {
    $font_url = '';
    if ( 'off' !== esc_html__( 'on', 'giver' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Open Sans:wght@300,400|Quicksand:wght@400,500,600,700&display=swap' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
