<?php
/**
 * @package WordPress
 * @subpackage Seattle Mennonite
 */

automatic_feed_links();

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
	    'name' => __('Header'),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
    
	register_sidebar(array(
	    'name' => __('Sidebar'),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
}

add_filter('body_class','seattlemennonite_body_classes');
function seattlemennonite_body_classes($classes, $class) {
    global $wp_query;
    if ( is_page() ) {
        if ( $wp_query->post->post_parent ) {
			$classes[] = 'section-' . get_page( $wp_query->post->post_parent )->post_name;
		} else {
		    $classes[] = 'section-' . $wp_query->post->post_name;
		}
    }
	return $classes;
}


?>