<?php
/**
 * think functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package think
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'think_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function think_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on think, use a find and replace
		 * to change 'think' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'think', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'think' ),
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
				'think_custom_background_args',
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
add_action( 'after_setup_theme', 'think_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function think_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'think_content_width', 640 );
}
add_action( 'after_setup_theme', 'think_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function think_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'think' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'think' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'think_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function think_scripts() {
    wp_enqueue_style( 'think-navigation', get_template_directory_uri() . '/dist/app.css');

	wp_enqueue_script( 'think-navigation', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true );

}
add_action( 'wp_enqueue_scripts', 'think_scripts' );

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

// Register projects custom post type

function projects_post_type() {
    register_post_type( 'projects',
        // WordPress CPT Options Start
        array(
            'labels' => array(
                'name' => __( 'Projects' ),
                'singular_name' => __( 'Project' )
            ),
            'has_archive' => true,
            'public' => true,
            'rewrite' => array('slug' => 'projects'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'categories', 'excerpt'),
            'taxonomies' => array('project-type'),
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,

        )
    );
}

add_action( 'init', 'projects_post_type' );

// Add new taxonomy, make it hierarchical (like categories)

add_action( 'init', 'create_project_taxonomies', 0 );

function create_project_taxonomies()
{

    $labels = array(
        'name' => _x( 'Project type', 'taxonomy general name' ),
        'singular_name' => _x( 'Project type', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Project type' ),
        'popular_items' => __( 'Popular Project type' ),
        'all_items' => __( 'All Project types' ),
        'parent_item' => __( 'Parent Project type' ),
        'parent_item_colon' => __( 'Parent Project type:' ),
        'edit_item' => __( 'Edit Project type' ),
        'update_item' => __( 'Update Project type' ),
        'add_new_item' => __( 'Add New Project type' ),
        'new_item_name' => __( 'New Recording Project type' ),
        'menu_name' => __( 'Project type' ),
    );
    register_taxonomy('project-type',array('projects'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_in_nav_menus'          => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'project-type' ),
    ));
}





// Register and load the widget
function wpb_load_widget() {
    register_widget( 'wpb_widget' );
}

add_action( 'widgets_init', 'wpb_load_widget' );

require('widgets/next-post-widget.php');

