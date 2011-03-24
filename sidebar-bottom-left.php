<?php if ( !function_exists('dynamic_sidebar')
    || !dynamic_sidebar('bottom-left') ) : ?>
	<h2>Tags</h2>
	<?php wp_tag_cloud('smallest=8&largest=8'); ?>
<?php endif; ?>