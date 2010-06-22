<?php
/**
 * @package WordPress
 * @subpackage Seattle Mennonite
 */
?>
<div id="sidebar">
    <?php if ( is_active_sidebar( 'sidebar-top' ) ) : ?>
		<ul class="sidebar-top">
			<?php dynamic_sidebar( 'sidebar-top' ); ?>
		</ul>
    <?php endif; ?>
    
    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    
    <?php if ( is_active_sidebar( 'sidebar-bottom' ) ) : ?>
		<ul class="sidebar-bottom">
			<?php dynamic_sidebar( 'sidebar-bottom' ); ?>
		</ul>
    <?php endif; ?>
</div>
