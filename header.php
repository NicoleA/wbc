<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body>
<div id="page" <?php if (is_home()) echo " class=\"singlecol\""; ?><?php if (is_page()) echo " class=\"singlecol\""; ?><?php if (is_archive()) echo " class=\"singlecol\""; ?>>
<div id="header">
  <div id="headerimg">
    <h1><a href="<?php echo get_settings('home'); ?>/">
      <?php bloginfo('name'); ?>
      </a></h1>
    <div class="description">
      <?php bloginfo('description'); ?>
    </div>
  </div>
</div>
<!-- navigation ................................. -->
<div id="navigation">
  <ul>
    <li<?php if (is_home()) echo " class=\"selected\""; ?>><a href="<?php bloginfo('url'); ?>">Home</a></li>
    <?php
		$pages = get_pages('exclude=41');
		if ($pages) {
			foreach ($pages as $page) {
				$page_id = $page->ID;
   				$page_title = $page->post_title;
   				$page_name = $page->post_name;
   				if ($page_name == "archives") {
   					(is_page($page_id) || is_archive() || is_search() || is_single())?$selected = ' class="selected"':$selected='';
   					echo "<li".$selected."><a href=\"".get_page_link($page_id)."\">Archives</a></li>\n";
   				}
   				elseif($page_name == "home") {"";
   				}
				elseif($page_name == "about") {
   					(is_page($page_id))?$selected = ' class="selected"':$selected='';
   					echo "<li".$selected."><a href=\"".get_page_link($page_id)."\">About</a></li>\n";
   				}
   				elseif ($page_name == "about_short") {/*ignore*/}
           	 	else {
            		(is_page($page_id))?$selected = ' class="selected"':$selected='';
            		echo "<li".$selected."><a href=\"".get_page_link($page_id)."\">$page_title</a></li>\n";
            	}
    		}
    	}
		?>
  </ul>
</div>
<!-- /navigation -->
<hr />
