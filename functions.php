<?php
/**
 * @package WordPress
 * @subpackage Pretty_Spots
 */
if ( function_exists('register_sidebar') )
	register_sidebar(array('name'=>'Home',
	'id' => 'sidebar-home',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
	));
	register_sidebar(array('name'=>'Bottom Left',
	'id' => 'sidebar-bottom-left',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
	));
	register_sidebar(array('name'=>'Bottom Right',
	'id' => 'sidebar-bottom-right',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
	));
	register_sidebar(array('name'=>'Bottom Middle',
	'id' => 'sidebar-bottom-middle',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
	));
	register_sidebar(array('name'=>'Subpage',
	'id' => 'sidebar-subpage',
	'before_widget' => '<div class="pod">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
	));
?>
