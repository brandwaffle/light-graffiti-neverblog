<?php if ( !function_exists('dynamic_sidebar')
    || !dynamic_sidebar('bottom-right') ) : ?>
	<ul>
		<?php wp_list_bookmarks(); ?> 
	</ul>
<?php endif; ?>