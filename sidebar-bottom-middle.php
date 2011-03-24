<?php if ( !function_exists('dynamic_sidebar')
    || !dynamic_sidebar('bottom-middle') ) : ?>
	<h2>Archives</h2>
	<ul>
		<?php wp_get_archives(); ?>
	</ul>
<?php endif; ?>