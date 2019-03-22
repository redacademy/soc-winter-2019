<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Sport_On_Campus_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function Sport_On_Campus_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'Sport_On_Campus_body_classes' );

//display the all the universities
function soc_get_universities()
{
	$args = array('post_type' => 'university', 'posts_per_page' => -1, 'order'=>'ASC');
	$universities = get_posts($args);
	return $universities;
}


function soc_get_testimonial_category()
{
	$args = array('post_type' => 'testimonial', 'posts_per_page' => -1, 'order'=>'DESC');
	$testimonial = get_posts($args);
	return $testimonial;
}

function soc_get_events()
{
	$args = array('post_type' => 'event', 'posts_per_page' => -1, 'orderby' => 'title', 'order'=>'DESC');
	$event = get_posts($args);
	return $event;
}

// function soc_post_refined()
// {
// 	$args = array('post_type' => 'post', 'posts_per_page' => 9, 'orderby' => 'title', 'order'=>'ASC');
// 	$post = get_posts($args);
// 	return $post;
// }

add_action( 'pre_get_posts', function ( $query ) {
    if ( ($query->is_archive()||$query->is_home() )&& $query->is_main_query() ) {
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
    }
});
