<?php
/**
 * @package WordPress
 * @subpackage Seattle Mennonite
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
<div id="container">
    <div id="header">
	    <h1>
	        <a href="<?php echo get_option('home'); ?>/">
	            <?php bloginfo('name'); ?>
	        </a>
	    </h1>
	    
	    <?php 
	        $section = seattlemennonite_section();
	        $section_slug = $section ? $section->post_name : 'home'; 
	    ?>
	    <p class="section-title">
	        <?php if ($section_slug == 'about'): ?>
	            <a href="<?php print get_permalink($section->ID); ?>">About</a>
	        <?php elseif ($section_slug == 'current-events'): ?>
	            <a href="<?php print get_permalink($section->ID); ?>">Events</a>
	        <?php elseif ($section_slug == 'leadership'): ?>
	            <a href="<?php print get_permalink($section->ID); ?>">Leadership</a>
	        <?php elseif ($section_slug == 'ministries'): ?>
	            <a href="<?php print get_permalink($section->ID); ?>">Ministries</a>
	        <?php elseif ($section_slug == 'worship'): ?>
	            <a href="<?php print get_permalink($section->ID); ?>">Worship</a>
	        <?php elseif ($section_slug == 'photos'): ?>
	            <a href="<?php print get_permalink($section->ID); ?>">Photos</a>
            <?php else: ?>
	            <a href="<?php echo get_option('home'); ?>/">Welcome</a>
	        <?php endif; ?>
	    </p>
	    
	    <div id="header-content">
	        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
    		<?php endif; ?>
	    </div>
	</div>
	<div id="body">