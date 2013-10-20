<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<?php if (!empty($is_blog)) : ?>
	<title><?php echo $CI->fuel_blog->page_title($page_title, ' : ', 'right')?></title>
	<?php else : ?>
	<title><?php echo fuel_var('page_title', '')?></title>
	<?php endif ?>
	<meta charset="UTF-8" />
	<meta name="ROBOTS" content="ALL" />
	<meta name="MSSmartTagsPreventParsing" content="true" />

	<meta name="keywords" content="<?php echo fuel_var('meta_keywords')?>" />
	<meta name="description" content="<?php echo fuel_var('meta_description')?>" />

	<?php echo css('style'); ?>
	<?php echo css($css); ?>
	
	<?php echo js('jquery, main, jquery.easing-sooper, jquery.sooperfish, modernizr-1.5.min'); ?>
	<?php echo js($js); ?>
	
	<?php if (!empty($is_blog)) : ?>
	<?php echo $CI->fuel_blog->header()?>
	<?php endif; ?>
	<base href="<?php echo site_url()?>" />	
</head>
<body class="<?php echo fuel_var('body_class', 'Body Class');?>">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">DAVE<span class="logo_colour">GILL</span></a></h1>
          <h2>For web &amp; mobile development</h2>
        </div>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">
	<?php 
	$menu= fuel_nav(array('render_type' => 'array','first_class'=>'','last_class'=>'','container_tag_id' => 'nav', 'container_tag_class' => 'sf_menu', 'item_id_prefix' => 'topmenu_')); 
	foreach($menu as $item){
		echo('<li><a href="' .$item['location'] . '">' .$item['label'] .'</a></li>');
	}
?>
	</ul>
        </div>
      </nav>
  <div id="main">
    <div id="site_content">
	