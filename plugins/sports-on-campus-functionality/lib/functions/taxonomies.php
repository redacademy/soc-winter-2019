<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function testimonial_category() {

	$labels = array(
		'name'                       => _x( 'Testimonial Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Testimonial Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Testimonial Categories', 'text_domain' ),
		'all_items'                  => __( 'All Testimonials', 'text_domain' ),
		'parent_item'                => __( 'Parent Testimonial', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Testimonial:', 'text_domain' ),
		'new_item_name'              => __( 'New Testimonial Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Category', 'text_domain' ),
		'edit_item'                  => __( 'Edit Testimonial', 'text_domain' ),
		'update_item'                => __( 'Update Testimonial', 'text_domain' ),
		'view_item'                  => __( 'View Testimonial', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Testimonials with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Testimonials', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Testimonials', 'text_domain' ),
		'search_items'               => __( 'Search Testimonials', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Testimonials', 'text_domain' ),
		'items_list'                 => __( 'Testimonials list', 'text_domain' ),
		'items_list_navigation'      => __( 'Testimonials list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'testimonial_category', array( 'testimonial' ), $args );

}
add_action( 'init', 'testimonial_category', 0 );

// Register Custom Taxonomy
function university_sport() {

	$labels = array(
		'name'                       => 'Sports',
		'singular_name'              => 'Sport',
		'menu_name'                  => 'Sports',
		'all_items'                  => 'All Sports',
		'parent_item'                => 'Parent Sport',
		'parent_item_colon'          => 'Parent Sport:',
		'new_item_name'              => 'New Sport Name',
		'add_new_item'               => 'Add New Sport',
		'edit_item'                  => 'Edit Sport',
		'update_item'                => 'Update Sport',
		'view_item'                  => 'View Sport',
		'separate_items_with_commas' => 'Separate sport with commas',
		'add_or_remove_items'        => 'Add or remove sport',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular sports',
		'search_items'               => 'Search sports',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No sports',
		'items_list'                 => 'Sports list',
		'items_list_navigation'      => 'Sports list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'university_sport', array( 'university' ), $args );

}
add_action( 'init', 'university_sport', 0 );
