<?php
/**
 * @package WordPress
 * @subpackage Pretty_Spots
 */

get_header(); ?>

	<?php query_posts($query_string.'&showposts=1'); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="feature" class="clearfix">	
			<div id="feature-date"><?php the_time('j'); ?> <span><?php the_time('M'); ?></span></div>
			<div id="feature-text">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_excerpt(); ?>
				<p class="more"><a href="<?php the_permalink(); ?>">read full entry &raquo;</a></p>
			</div>
			<div id="feature-data">
			<?php if(!has_post_thumbnail()){
			?>	
				<ul class="post-data">
					<li class="author">Posted by <?php the_author_link(); ?></li>
					<li class="comments"><?php comments_popup_link('No comments', '1 comment', '% comments'); ?></li>
					<li class="categories"><?php the_category(', ') ?></li>
					<li class="tags"><?php the_tags('', ', ', ''); ?></li>
				</ul>
			<?php 
			}else{
				set_post_thumbnail_size( 230, 180, true);
				the_post_thumbnail(); 
			}
			?>
			<!--<?php echo Shashin::getRandom(2,64,3,6,'n','center','clear'); ?>-->
			</div>	
		</div>
	<?php endwhile; endif; ?>
	
	<div id="recent">
		<h2>Recent Posts</h2>
		<ol class="post-list">
			<?php query_posts('offset=1&showposts=5'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li>
					<span class="comments"><?php comments_popup_link('No comments', '1 comment', '% comments'); ?></span>
					<span class="date"><?php the_time('M d, Y'); ?></span>
					<span class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
					<span class="categories">Posted in <?php the_category(', ') ?></span>
				</li>
			<?php endwhile; endif; ?>
		</ol>
	</div>	
	<div id="pod1" class="pod">
		<?php get_sidebar('home'); ?>
	</div>
	<div class="clear"></div>

<?php get_footer(); ?>
