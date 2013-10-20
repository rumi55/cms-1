<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!--__FUEL_MARKER__0--><h1>KKKKKK</h1>
<div id="blocks">
			<?php 
$_fh0_data = (isset($this->scope["blocks"]) ? $this->scope["blocks"] : null);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['block'])
	{
/* -- foreach start output */
?>

				<div class="block">
				<?php echo fuel_block((isset($this->scope["block"]) ? $this->scope["block"] : null));?>

				</div>

			<?php 
/* -- foreach end output */
	}
}?>

		</div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>