<?php
/**
 * Digital Colby functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Digital_Colby_V3
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'dcv3_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dcv3_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Digital Colby, use a find and replace
		 * to change 'dcv3' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'dcv3', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'dcv3' ),
				'menu-2' => esc_html__( 'Footer Menu', 'dcv3' ),
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
				'dcv3_custom_background_args',
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
add_action( 'after_setup_theme', 'dcv3_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dcv3_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'dcv3_content_width', 640 );
}
add_action( 'after_setup_theme', 'dcv3_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dcv3_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'dcv3' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'dcv3' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'dcv3_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dcv3_scripts() {

	// STYLES 

	// fontawesome
	wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() . '/assets/vendor/font-awesome-5/css/fontawesome-all.min.css', array(), _S_VERSION );

	// bootstrap
	// wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), _S_VERSION );
	// wp_enqueue_style( 'bootstrap-styles-alt', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap-flatly.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap-styles-lux', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap-lux.min.css', array(), _S_VERSION );




	// flickity
	wp_enqueue_style( 'dcv3-flickity-styles', get_template_directory_uri() . '/assets/vendor/metafizzy/flickity.min.css', array(), _S_VERSION );

	// custom theme styles
	wp_enqueue_style( 'dcv3-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'dcv3-style', 'rtl', 'replace' );



	// SCRIPTS

	// jquery scrolling
	wp_enqueue_script( 'dcv3-jquery-easing-js', get_template_directory_uri() . '/assets/vendor/jquery-easing/jquery.easing.min.js', array('jquery'), _S_VERSION, true );


	// bootstrap bundle w/jQuery
	wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), _S_VERSION, true );

	// flickity
	wp_enqueue_script( 'dcv3-flickity-js', get_template_directory_uri() . '/assets/vendor/metafizzy/flickity.pkgd.min.js', array(), _S_VERSION, true );


	// izotope
	wp_enqueue_script( 'dcv3-izotope-js', get_template_directory_uri() . '/assets/vendor/metafizzy/isotope.pkgd.min.js', array(), _S_VERSION, true );

	// imagesloaded
	wp_enqueue_script( 'dcv3-imagesloaded-js', get_template_directory_uri() . '/assets/vendor/metafizzy/imagesloaded.pkgd.js', array(), _S_VERSION, true );


	// baguettebox
	// wp_enqueue_script( 'dcv3-baguettebox-js', get_template_directory_uri() . '/assets/vendor/baguetteBox/baguetteBox.js', array(), _S_VERSION, true );



	// custom theme scripts
	wp_enqueue_script( 'dcv3-scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dcv3_scripts' );

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
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}









/**
 * CUSTOM FUNCTIONS START BELOW
 * below are some optional additions to theme functionality
 * feel free to edit or delete to suit your needs
 */


/**
 * Include custom navwalker
 */
require_once get_template_directory() . '/inc/bs4navwalker.php';


/*
 * Load the theme options page.
 */
require get_template_directory() . '/inc/theme-options/theme-options.php';

/*
 * Custom post type for Portfolio Items
 */
// require get_template_directory() . '/inc/custom-post-portfolio.php';




function dcv3_alphabetize_query_order( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
    }
}
add_action( 'pre_get_posts', 'dcv3_alphabetize_query_order' );




// numbered pagination
function dcv3_numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="paged-navigation"><ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
 
    echo '</ul></div>' . "\n";
}



