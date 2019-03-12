<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function university() {

	$labels = array(
		'name'                  => 'Universities',
		'singular_name'         => 'University',
		'menu_name'             => 'Universities',
		'name_admin_bar'        => 'University',
		'archives'              => 'University Archives',
		'attributes'            => 'University Attributes',
		'parent_item_colon'     => 'Parent University:',
		'all_items'             => 'All Universities',
		'add_new_item'          => 'Add New University',
		'add_new'               => 'Add New',
		'new_item'              => 'New University',
		'edit_item'             => 'Edit University',
		'update_item'           => 'Update University',
		'view_item'             => 'View University',
		'view_items'            => 'View Universities',
		'search_items'          => 'Search University',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into university',
		'uploaded_to_this_item' => 'Uploaded to this university',
		'items_list'            => 'Universities list',
		'items_list_navigation' => 'Universities list navigation',
		'filter_items_list'     => 'Filter universities list',
	);
	$args = array(
		'label'                 => 'University',
		'description'           => 'University Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'university', $args );

}
add_action( 'init', 'university', 0 );

// Register Event Post Type
function events() {

	$labels = array(
		'name'                  => 'Events',
		'singular_name'         => 'Event',
		'menu_name'             => 'Events',
		'name_admin_bar'        => 'Events',
		'archives'              => 'Event Archives',
		'attributes'            => 'Event Attributes',
		'parent_item_colon'     => 'Parent Event:',
		'all_items'             => 'All Events',
		'add_new_item'          => 'Add NewEvent',
		'add_new'               => 'Add New Event',
		'new_item'              => 'New Event',
		'edit_item'             => 'Edit Event',
		'update_item'           => 'Update Event',
		'view_item'             => 'View Event',
		'view_items'            => 'View Events',
		'search_items'          => 'Search Event',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Event',
		'uploaded_to_this_item' => 'Uploaded to this event',
		'items_list'            => 'Events list',
		'items_list_navigation' => 'Events list navigation',
		'filter_items_list'     => 'Filter Events list',
	);
	$args = array(
		'label'                 => 'Event',
		'description'           => 'Post Type for Events',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,

	);
	register_post_type( 'event', $args );

}
add_action( 'init', 'events', 0 );

// Register Custom Post Type
function testimonials() {

	$labels = array(
		'name'                  => _x( 'Testimonials Types', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Testimonials', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Testimonials', 'text_domain' ),
		'name_admin_bar'        => __( 'Testimonials Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Testimonials', 'text_domain' ),
		'description'           => __( 'Testimonials Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'testimonials_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',

		'show_in_rest'          => true,
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'testimonials', 0 );

// Register Custom Post Type
function blog_posts() {

	$labels = array(
		'name'                  => _x( 'Blog Posts', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Blog Post', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Blog Posts', 'text_domain' ),
		'name_admin_bar'        => __( 'Blog Post', 'text_domain' ),
		'archives'              => __( 'Blog Posts Archives', 'text_domain' ),
		'attributes'            => __( 'Blog Posts Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Blog Posts:', 'text_domain' ),
		'all_items'             => __( 'All Blog Posts', 'text_domain' ),
		'add_new_item'          => __( 'Add New Blog Post', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Blog Post', 'text_domain' ),
		'edit_item'             => __( 'Edit Blog Post', 'text_domain' ),
		'update_item'           => __( 'Update Blog Post', 'text_domain' ),
		'view_item'             => __( 'View Blog Post', 'text_domain' ),
		'view_items'            => __( 'View Blog Posts', 'text_domain' ),
		'search_items'          => __( 'Search Blog Post', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into blog post', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this blog post', 'text_domain' ),
		'items_list'            => __( 'Blog Posts list', 'text_domain' ),
		'items_list_navigation' => __( 'Blog Posts list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter blog posts list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Blog Post', 'text_domain' ),
		'description'           => __( 'Blog Posts Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'blog_posts', $args );

}
add_action( 'init', 'blog_posts', 0 );