<?php
/**
 * @package WordPress
 * @subpackage Pretty_Spots
 */

get_header();
?>

<div id="main" class="clearfix">

	<div id="content">	
		<h1>Search for "<?php the_search_query(); ?>"</h1>
		<?php if (have_posts()) : ?>
			<ol class="post-list">
			<?php while (have_posts()) : the_post(); ?>		
				<li>
					<span class="comments"><?php comments_popup_link('No comments', '1 comment', '% comments'); ?></span>
					<span class="date"><?php the_time('M d, Y'); ?></span>
					<span class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
					<span class="categories">Posted in <?php the_category(', ') ?></span>
				</li>
			<?php endwhile; ?>
			</ol>
			<p align="center"><?php posts_nav_link(); ?></p>
		<?php else : ?>
			<p>No posts found. Try a different search?</p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div>

	<div id="side">
		<?php get_sidebar('subpage'); ?>
	</div>

</div>

<?php get_footer(); ?>