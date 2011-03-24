<?php
/**
 * @package WordPress
 * @subpackage Pretty_Spots
 */

get_header();
?>

<div id="main" class="clearfix">

	<div id="content">	
		<h1>Page Not Found</h1>		
		<p>So sorry, but the page you tried to see does not exist. Try <a href="<?php bloginfo('url'); ?>">going to our home page</a> or search below.</p>
		<?php get_search_form(); ?>
	</div>

	<div id="side">
		<?php get_sidebar('subpage'); ?>
	</div>

</div>

<?php get_footer(); ?>