<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
		<title><!--__FUEL_MARKER__0-->home page : My Website</title>
		<meta charset="UTF-8" />
	<meta name="ROBOTS" content="ALL" />
	<meta name="MSSmartTagsPreventParsing" content="true" />

	<meta name="keywords" content="<!--__FUEL_MARKER__1-->" />
	<meta name="description" content="<!--__FUEL_MARKER__2-->" />

	<link href="/assets/css/style.css?c=943948800" media="all" rel="stylesheet"/>
			
	<script src="/assets/js/jquery.js?c=943948800" type="text/javascript" charset="utf-8"></script>
	<script src="/assets/js/main.js?c=943948800" type="text/javascript" charset="utf-8"></script>
	<script src="/assets/js/jquery.easing-sooper.js?c=943948800" type="text/javascript" charset="utf-8"></script>
	<script src="/assets/js/jquery.sooperfish.js?c=943948800" type="text/javascript" charset="utf-8"></script>
	<script src="/assets/js/modernizr-1.5.min.js?c=943948800" type="text/javascript" charset="utf-8"></script>
			
		<base href="http://local.cms/" />	
</head>


<body class="<!--__FUEL_MARKER__3--> ">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">DAVE<span class="logo_colour">GILL</span></a></h1>
          <h2>For development.</h2>
        </div>
      </div>
	<div id="main">
  <div id="main">
    <div id="site_content">
		
	<div id="content">
		<!--__FUEL_MARKER__4--><?php echo fuel_nav(array('container_tag_id'=>'main', 'item_id_prefix'=>'main_'));?>

<h1>KKKKKK</h1>
<?php echo fuel_block("This Block");?>	</div>
	
		</div>
	</div>
	<div id="footer">
		<div id="footer_top">
		
		</div>
		<div id="footer_bot">
			<div id="copyright">FUEL CMS is a product by <a href="http://www.thedaylightstudio.com" target="_blank">Daylight Studio</a>. <br />Copyright &copy; 2012 Daylight Studio,  All Rights Reserved.</div>
		</div>
	</div>
</div>

</body>
</html><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>