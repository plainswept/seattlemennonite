<?php
/**
 * @package WordPress
 * @subpackage Seattle Mennonite
 */

get_header(); ?>

<div id="content">
    <?php if (have_posts()) : ?>

    	<?php while (have_posts()) : the_post(); ?>

    		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    			<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    			<p class="post-byline">
    			    <?php the_time('F jS, Y') ?>
    			    &mdash; <?php the_author() ?>
    			</p>
    			<?php the_content('Read the rest of this entry &raquo;'); ?>
    			<p class="post-postedin">
    			    <?php the_tags('Tags: ', ', ', '<br />'); ?>
    			    <?php if ( ! in_category('Uncategorized') ) : ?>
    			        Posted in <?php the_category(', ') ?> |
    			    <?php endif; ?>
    			    <?php edit_post_link('Edit', '', ' | '); ?> 
    			    <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
    			</p>
    		</div>

    	<?php endwhile; ?>

    	<?php if (next_posts_link() || previous_posts_link()): ?>
    		<?php next_posts_link('&laquo; Older Entries') ?> | <?php previous_posts_link('Newer Entries &raquo;') ?>
    	<?php endif ?>

    <?php else : ?>

    	<h2>Not Found</h2>
    	<p>Sorry, but you are looking for something that isn't here.</p>
    	<?php get_search_form(); ?>

    <?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>