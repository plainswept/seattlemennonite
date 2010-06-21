<?php
/**
 * @package WordPress
 * @subpackage Seattle Mennonite
 * Template Name: Calendar
 */

get_header(); ?>

<div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
		<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
		<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	</div>
	<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	<iframe src="https://www.google.com/calendar/hosted/seattlemennonite.com/embed?mode=MONTH&amp;height=500&amp;wkst=1&amp;bgcolor=%23F8F8F8&amp;src=seattlemennonite.com_5ku5djgpiqsbnefncduuqg05ig%40group.calendar.google.com&amp;color=%23AB8B00&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " width="500" height="500" frameborder="0" scrolling="no"></iframe>
</div>	
<?php get_sidebar(); ?>
<?php get_footer(); ?>