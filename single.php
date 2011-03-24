<?php
/**
 * @package WordPress
 * @subpackage Pretty_Spots
 */

get_header();
?>
	
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php $post_id = $post->ID; // Post ID for later use because of how we have to order content/sidebars ?>

<div id="main" class="clearfix">
	
	<div id="content">	
		<h1><?php the_title(); ?></h1>		
		<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	
	
	<script type="text/javascript"><!--
google_ad_client = "pub-8474101945237986";
/* 468x60, created 12/28/09 */
google_ad_slot = "2183064576";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
	
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
	
	<?php $post->ID = $post_id; // Re-assign post ID so we get the original post comments ?>
	<?php comments_template(); ?>
	
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
