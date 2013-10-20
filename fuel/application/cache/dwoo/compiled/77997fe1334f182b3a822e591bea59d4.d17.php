<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!--__FUEL_MARKER__0--><h1>KKKKKK</h1>
<?php if (( (isset($this->scope["sidemenu"]) ? $this->scope["sidemenu"] : null) )) {
?>
		<?php echo $this->scope["sidemenu"];?>

		<?php 
}
 /* end template body */
return $this->buffer . ob_get_clean();
?>