<?php $this->load->view('_blocks/header')?>
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
		<?php echo fuel_var('body', ''); ?>
	</div>
	
<?php $this->load->view('_blocks/footer')?>
