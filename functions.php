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

function seattlemennonite_section() {
    global $wp_query;
    if ( is_page() ) {
        if ( $wp_query->post->post_parent ) {
			return get_page( $wp_query->post->post_parent );
		} else {
		    return $wp_query->post;
		}
    }
}

add_filter('body_class','seattlemennonite_body_classes');
function seattlemennonite_body_classes($classes, $class) {
    $section = seattlemennonite_section();
    if ( $section ) {
        $classes[] = 'section-' . $section->post_name;
    }
	return $classes;
}

?>