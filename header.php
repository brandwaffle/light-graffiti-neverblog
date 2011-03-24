<?php
/**
 * @package WordPress
 * @subpackage Pretty_Spots
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="shortcut icon" href="http://neverblog.net/favicon.ico" type="image/x-icon">
<link rel="icon" href="http://neverblog.net/favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php wp_head(); ?>
<script type="text/javascript">  
    $(document).ready(function(){ 
        $("ul.sf-menu").supersubs({ 
            minWidth:    12,   // minimum width of sub-menus in em units 
            maxWidth:    27,   // maximum width of sub-menus in em units 
            extraWidth:  1     // extra width can ensure lines don't sometimes turn over 
                               // due to slight rounding differences and font-family 
        }).superfish();  // call supersubs first, then superfish, so that subs are 
                         // not display:none when measuring. Call before initialising 
                         // containing tabs for same reason. 
    });  
</script>
</head>
<body>

<div id="upper">
<div class="wrapper">
	
	<div id="header">
		<div id="topbar">
			<ul id="pages" class="sf-menu">
				<?php wp_list_pages('title_li='); ?>
			</ul>
			<div id="search">
				<form method="get" action="<?php bloginfo('url'); ?>">
				<a href="<?php bloginfo('rss2_url'); ?>" id="rss">rss</a>
				<input type="text" value="" name="s" id="search-input" />
				<input type="submit" id="search-submit" value="search" />
				</form>
			</div>
		</div>
	
		<div id="top">
			<?php echo Shashin::getRandom(2,64,11,11,'n','center','clear'); ?>
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<p id="blog-desc"><?php bloginfo('description'); ?></p>
		</div>
	</div>
	
	<div id="categories">
		<ul class="sf-menu">
			<?php wp_list_categories('title_li='); ?>
		</ul>
	</div>
