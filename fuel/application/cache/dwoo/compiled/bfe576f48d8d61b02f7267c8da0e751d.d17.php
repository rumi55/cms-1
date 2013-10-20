<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
		<title><!--__FUEL_MARKER__0-->Dave Gill - PHP Web developemnt and Lamp Maintenance</title>
		<meta charset="UTF-8" />
	<meta name="ROBOTS" content="ALL" />
	<meta name="MSSmartTagsPreventParsing" content="true" />

	<meta name="keywords" content="<!--__FUEL_MARKER__1-->Jquery PHP Sencha LAMP MySQl" />
	<meta name="description" content="<!--__FUEL_MARKER__2-->Development of web sites, APIs using PHP MySQL and Linux. Mobile web app development using Sencha and Phonegap" />

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
          <h2>For web &amp; mobile development</h2>
        </div>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">
	<li><a href="home">Home Page</a></li><li><a href="/blog">My Blog</a></li><li><a href="/test">Test</a></li>	</ul>
        </div>
      </nav>
  <div id="main">
    <div id="site_content">
	<div id="sidebar_container">
        <div class="sidebar">
          <h3>Latest News</h3>
          <h4>New Website Launched</h4>
          <h5>1st January, 2013</h5>
          <p>January sees the redesign of the website. Take a look around and let me know what you think.<br /></p>
        </div>
        <div class="sidebar">
          <h3>Links to my commercial web development work</h3>
          <ul>
            <li><a href="http://www.cabfix.com">Cabfix.com personal website</a></li>
            <li><a href="http://www.cabfix.biz">Cabfix Business site</a></li>
            <li><a href="http://Cabfix.mobi">Cabfix mobile web app</a></li>
            <li><a href="http://jow.st">Jowst</a></li>
          </ul>
        </div>
</div>	
	<div id="content">
		<!--__FUEL_MARKER__4--><p>I am lucky that I work in a beautiful area of the country which has an active digital community. I work with businesses doing web development and have a good reputation.</p>
<p>I am highly skilled, fluent in many technical languages and able to solve complex problems. I have high standards and always produce the highest quality work.</p>
<p>Services I can provide:-</p>
<ul>
    <li>Web applications</li>
    <li>CMS</li>
    <li>Mobile web applications</li>
    <li>Intranets</li>
    <li>Extranets</li>
    <li>e-Commerce sites</li>
    <li>Windows applications</li>
</ul>
<p>
I can offer all of these developments tailored towards your needs and with a personal and friendly approach.
</p>
<p><strong>Contact me to find out more.</strong></p>	</div>
	
  </div>
    <footer>
      <p>Copyright &copy; Dave Gill 2012</p>
    </footer>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>