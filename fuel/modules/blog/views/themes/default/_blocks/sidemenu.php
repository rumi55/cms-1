<?php foreach($blocks as $block){ ?>
<div class="right" id="blog_<?=$block?>">
	<?=$this->fuel_blog->block($block)?>
</div>
<?php } ?>
