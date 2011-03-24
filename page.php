<?php
/**
 * @package WordPress
 * @subpackage Pretty_Spots
 */

get_header();
?>
	
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="main" class="clearfix">
	
	<div id="content">	
		<h1><?php the_title(); ?></h1>		
		<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		<?php edit_post_link('Edit this page', '<p>', '</p>'); ?>
		
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
		<?php get_sidebar('subpage'); ?>
	</div>
	<?php comments_template(); ?>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>