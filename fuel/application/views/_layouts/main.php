<?php $this->load->view('_blocks/header')?>
<?php if (empty($is_blog)) { ?>
<div id="sidebar_container">
        <div class="sidebar">
          <h3>Links to my commercial web development work</h3>
          <ul>
            <li><a href="http://www.cabfix.com">Cabfix.com personal website</a></li>
            <li><a href="http://www.cabfix.biz">Cabfix Business site</a></li>
            <li><a href="http://Cabfix.mobi">Cabfix - Mobile web app for booking taxis</a></li>
            <li><a href="http://jow.st">Jowst - Games tournaments</a></li>
	    <li><a href="http://www.gamesgrabr.com">GRABR - Social network for gamers</a></li>
          </ul>
        </div>
</div>
<?php
}
?>
	<div id="content">
		<?php echo fuel_var('body', ''); ?>
	</div>
	
<?php $this->load->view('_blocks/footer')?>
