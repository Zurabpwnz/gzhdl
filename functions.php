<?php
/**
 * GZhDL functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GZhDL
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'gzhdl_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gzhdl_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on GZhDL, use a find and replace
		 * to change 'gzhdl' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gzhdl', get_template_directory() . '/languages' );

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
//				'top-menu' => esc_html__( 'Top menu', 'gzhdl' ),
				'footer-1' => esc_html__( 'Foooter-1', 'gzhdl' ),
				'footer-2' => esc_html__( 'Foooter-2', 'gzhdl' ),
				'footer-3' => esc_html__( 'Foooter-3', 'gzhdl' ),
				'footer-4' => esc_html__( 'Foooter-4', 'gzhdl' ),
				'footer-5' => esc_html__( 'Foooter-5', 'gzhdl' ),
                'copyright-menu' => esc_html__('Копирайт меню', 'tlc'),
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
				'gzhdl_custom_background_args',
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
				'width'       => 284,
				'height'      => 40,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'gzhdl_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gzhdl_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gzhdl_content_width', 640 );
}
add_action( 'after_setup_theme', 'gzhdl_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gzhdl_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'gzhdl' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'gzhdl' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gzhdl_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gzhdl_scripts() {
	wp_enqueue_style('gzhdl-style', get_stylesheet_uri(), array(), '');
	wp_enqueue_style('style-vendors', get_template_directory_uri() . '/assets/css/vendors~main.css', '', '');
	wp_enqueue_style('style-main', get_template_directory_uri() . '/assets/css/main.css', '', '');
	wp_enqueue_style('style-fix', get_template_directory_uri() . '/assets/css/fix.css', '', '');

	wp_enqueue_script('gzhdl-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '', true);

	wp_enqueue_script('api-maps', '//api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=5d4f0920-0fbc-4a34-a50d-2e3634fda2f9', array(), false, true);

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//yandex.st/jquery/2.2.3/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script('script-vendors', get_template_directory_uri() . '/assets/js/vendors~main.js', array(), false, true);
	wp_enqueue_script('script-main', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action( 'wp_enqueue_scripts', 'gzhdl_scripts' );

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


/**
 * Customize breadcrumbs.
 */
require get_template_directory() . '/inc/customize/breadcrumbs.php';


/**
 * Customize pagination.
 */
require get_template_directory() . '/inc/customize/pagination.php';


/**
 * Customize theme-options
 */
require get_template_directory() . '/inc/customize/theme-options.php';


/**
 * Customize fix upload svg files
 */
require get_template_directory() . '/inc/customize/fix-svg.php';


/**
 * Customize post views
 */
require get_template_directory() . '/inc/customize/post-views.php';


/*
 * excerpt_length
 */
require get_template_directory() . '/inc/customize/excerpt.php';


/*
 * Reviews rating
 */
require get_template_directory() . '/inc/customize/reviews_rating.php';


/*
 * Star ratings
 */
require get_template_directory() . '/inc/customize/star-ratings.php';


/* file comments */
function get_attachment_url_image_comment($comment_id)
{
	$meta_key = 'attachment_id';
	$attachment_id = get_comment_meta($comment_id, $meta_key, true);
	$full_img_url = wp_get_attachment_image_url($attachment_id, 'full');

	return $full_img_url;
}


// удаляет H2 из шаблона пагинации
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2);
function my_navigation_template($template, $class)
{
	/*
	Вид базового шаблона:
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>
	';
}

/*
 * add_image_size
 */
add_image_size( 'service-thumb', 300, 300, true );
add_image_size( 'stock-thumb', 190, 190, true );
add_image_size( 'certificates-thumb', 262, 360, true );
//add_image_size( 'category-thumb', 345, 480, true );
//add_image_size( 'object-thumb', 440, 400, true );


/*
 * CF7 clear tags
 */
// Contact Form 7 remove auto added p tags
add_filter('wpcf7_autop_or_not', '__return_false');

//add_filter('wpcf7_form_elements', function( $content ) {
//    $dom = new DOMDocument();
//    $dom->preserveWhiteSpace = false;
//    $dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
//
//    $xpath = new DomXPath($dom);
//    $spans = $xpath->query("//span[contains(@class, 'wpcf7-form-control-wrap')]" );
//
//    foreach ( $spans as $span ) :
//        $children = $span->firstChild;
//        $span->parentNode->replaceChild( $children, $span );
//    endforeach;
//
//    return $dom->saveHTML();
//});


