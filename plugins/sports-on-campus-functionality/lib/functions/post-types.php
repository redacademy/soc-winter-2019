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