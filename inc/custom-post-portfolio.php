<?php
/**
 * Custom Post Type - Portfolio
 *
 * @package Digital_Colby_V3
 */

/*
 * Custom post type for Portfolio Items
 */
function dcv3_portfolio_post_type() {
// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Portfolio', 'Post Type General Name', 'dcv3' ),
		'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'dcv3' ),
		'menu_name'           => __( 'Portfolio', 'dcv3' ),
		'parent_item_colon'   => __( 'Parent Portfolio Item', 'dcv3' ),
		'all_items'           => __( 'All Portfolio Items', 'dcv3' ),
		'view_item'           => __( 'View Portfolio Item', 'dcv3' ),
		'add_new_item'        => __( 'Add New Portfolio Item', 'dcv3' ),
		'add_new'             => __( 'Add New', 'dcv3' ),
		'edit_item'           => __( 'Edit Portfolio Item', 'dcv3' ),
		'update_item'         => __( 'Update Portfolio Item', 'dcv3' ),
		'search_items'        => __( 'Search Portfolio Items', 'dcv3' ),
		'not_found'           => __( 'Not Found', 'dcv3' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'dcv3' ),
	);

	$args = array(
		'label'               => __( 'portfolio', 'dcv3' ),
		'description'         => __( 'Listing of Portfolio', 'dcv3' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'		  => array( 'types', 'category', 'post_tag'),
        'menu_icon'           => 'dashicons-images-alt2',
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'Portfolio', $args );
}
add_action( 'init', 'dcv3_portfolio_post_type', 0 );

// these taxonomies are used for the portfolio filtering on the front page
register_taxonomy( "portfolio-categories", 
	array( 	"portfolio" ), 
	array( 	"hierarchical" => true,
			"labels" => array('name'=>"Creative Fields",'add_new_item'=>"Add New Field"), 
			"singular_label" => __( "Field" ), 
			"rewrite" => array( 'slug' => 'fields', // This controls the base slug that will display before each term 
			                    'with_front' => false)
		 ) 
);
