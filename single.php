<?php
/**
 * @package WordPress
 * @subpackage Seattle Mennonite
 */

get_header();
?>
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<p class="post-byline">
			    <?php the_time('F jS, Y') ?>
			    &mdash; <?php the_author() ?>
			</p>
			<?php the_content(); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<p class="post-postedin">
			    <?php the_tags('Tags: ', ', ', '<br />'); ?>
			    Posted in <?php the_category(', ') ?>
			    <?php edit_post_link('Edit', ' | ', ''); ?> 
			</p>

		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

    <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
