<?php
/**
 * Cryptomania functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Cryptomania
 */

if ( ! function_exists( 'cryptomania_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cryptomania_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Cryptomania, use a find and replace
		 * to change 'cryptomania' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cryptomania', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'cryptomania' ),
			'menu-2' => esc_html__( 'Footer', 'cryptomania' ),
			'menu-3' => esc_html__( 'Language', 'cryptomania' )
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
		add_theme_support( 'custom-background', apply_filters( 'cryptomania_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'cryptomania_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cryptomania_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'cryptomania_content_width', 640 );
}
add_action( 'after_setup_theme', 'cryptomania_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cryptomania_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cryptomania' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cryptomania' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cryptomania_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cryptomania_scripts() {
	wp_enqueue_style( 'cryptomania-style', get_stylesheet_uri() );

	wp_enqueue_style( 'cryptomania-opensans-font', 'https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600');

	wp_enqueue_style( 'cryptomania-opensanscondensed-font', 'https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700');

	wp_enqueue_script( 'cryptomania-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'cryptomania-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/dist/app.min.js', '', '', true);

	wp_enqueue_script( 'vendor-js', get_template_directory_uri() . '/assets/js/dist/vendor.min.js', '', '', false);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cryptomania_scripts' );

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
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require get_template_directory() . '/inc/jetpack.php';
// }

/**
 * Apply theme's stylesheet to the visual editor.
 */
function cryptomania_add_editor_styles() {
 add_editor_style( get_stylesheet_uri() );
}

add_action( 'admin_init', 'cryptomania_add_editor_styles' );

/**
* Registered image sizes.
*/

/* adding croped image for portfolio grid and srcset alternatives*/
add_image_size( 'testimonial_img', 300, 300, true );
add_image_size( 'testimonial_img@2x', 600, 600, true );
add_image_size( 'testimonial_img@3x', 900, 900, true );

add_image_size( 'pgsec_img', 300, 300, false );
add_image_size( 'pgsec_img@2x', 600, 600, false );
add_image_size( 'pgsec_img@3x', 900, 900, false );
add_image_size( 'pgsec_img@4x', 1200, 1200, false );

/* Setting sizes attribute for testemonial images */
function cryptomania_testimonials_sizes_attr( $attr, $attachment, $size ) {
	if ( $size === 'testimonial_img' ) {
		$attr['sizes'] = '(min-width: 1200) 300px, (min-width: 970) 30vw, (min-width: 850) 40vw, (min-width: 740px) 26vw, (min-width: 500px) 28vw, 55vw';
	} else if ( $size === 'pgsec_img' ) {
		$attr['sizes'] = '(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw';
	}
	return$attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'cryptomania_testimonials_sizes_attr', 10 , 3 );


/*
Removes width and height attr from image srcset (responsive) images
*/
function cryptomania_remove_img_attr ($html) {
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}

add_filter( 'post_thumbnail_html', 'cryptomania_remove_img_attr' );

/*
Replaces src attributes with data-src for lazyloading images
*/
function cryptomania_lazy_load_post_thumbnail_attr( $attr, $attachment, $size ) {

   if ( isset( $attr['srcset'] ) ) {
		 $data_src = $attr['src'];
		 unset( $attr['src'] );
		 $data_srcset = $attr['srcset'];
		 unset( $attr['srcset'] );

		 $attr['data-src']   = $data_src;
		 $attr['data-srcset']   = $data_srcset;
   }

   return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'cryptomania_lazy_load_post_thumbnail_attr', 20, 3);

/*
Icons config
*/
function cryptomania_my_header_elements() { ?>
<ul class="social">
	<li><a href="#"><span class="icon-arrow-down"></span></a></li>
	<li><a href="#"><span class="icon-arrow-left"></span></a></li>
	<li><a href="#"><span class="icon-arrow-right"></span></a></li>
	<li><a href="#"><span class="icon-check"></span></a></li>
	<li><a href="#"><span class="icon-email1"></span></a></li>
 	<li><a href="#"><span class="icon-Icon_Facebook_blank"></span></a></li>
 	<li><a href="#"><span class="icon-Icon_Twitter_blank"></span></a></li>
	<li><a href="#"><span class="icon-wololo"></span></a></li>
</ul>
 <?php
}
add_action( 'hybrid_header', 'cryptomania_my_header_elements' );
