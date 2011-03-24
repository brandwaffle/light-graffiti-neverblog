<?php
/**
 * @package WordPress
 * @subpackage Pretty_Spots
 */

get_header();
?>

<div id="main" class="clearfix">
	<div id="content">	
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	 	  <?php /* If this is a category archive */ if (is_category()) { ?>
			<h1><?php single_cat_title(); ?></h1>
	 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
			<h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
	 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
	 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<h1>Archive for <?php the_time('F, Y'); ?></h1>
	 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<h1>Archive for <?php the_time('Y'); ?></h1>
		  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
			<h1>Author Archive</h1>
	 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h1>Blog Archives</h1>
	 	  <?php } ?>
		<ol class="post-list">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
			<li>
				<span class="comments"><?php comments_popup_link('No comments', '1 comment', '% comments'); ?></span>
				<span class="date"><?php the_time('M d, Y'); ?></span>
				<span class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
				<span class="categories">Posted in <?php the_category(', ') ?></span>
			</li>
		<?php endwhile; endif; ?>
		</ol>
		<p align="center"><?php posts_nav_link(); ?></p>
	</div>
	<div id="side">
		<?php get_sidebar('subpage'); ?>
	</div>
</div>
<?php get_footer(); ?>
