<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><p>This is testing the creation of modules in FUEL cms.</p>

<p>This is the second paragraph.</p><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>