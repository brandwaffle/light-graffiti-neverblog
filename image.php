<?php
/**
 * @package WordPress
 * @subpackage Pretty_Spots
 */

get_header();
?>
<div id="main" class="clearfix">		
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="content">	
			<h1><?php the_title(); ?></h1>
			<p class="attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></p>
			<?php the_content(); ?>	
			<p><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment">&laquo; Return to "<?php echo get_the_title($post->post_parent); ?>"</a></p>
		</div>	
		<div id="side">
			<p class="post-date"><?php the_date('M j, Y'); ?></p>
			<ul class="post-data">
				<li class="author">Posted by <?php the_author_link(); ?></li>
				<li class="comments"><a href="#comments"><?php comments_number('No comments', '1 comment', '% comments' ); ?></li>
				<li class="categories"><?php the_category(', ') ?></li>
				<li class="tags"><?php the_tags('', ', ', ''); ?></li>
			</ul>		
			<?php get_sidebar('subpage'); ?>
		</div>
		<?php comments_template(); ?>	
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>