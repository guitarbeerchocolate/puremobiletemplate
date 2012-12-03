<?php
class page
{
	function __construct($t = NULL)
	{
		include 'includes/htmltop.inc.php';
		include 'includes/meta.inc.php';
		echo '<title>'.$t.'</title>';
		include 'includes/styles.inc.php';
		include 'includes/scripts.inc.php';
		include 'includes/endheadbodystart.inc.php';
		include 'includes/header.inc.php';
	}

	function end()
	{
		include 'includes/footer.inc.php';
		include 'includes/endbody.inc.php';
	}

	function __destruct()
	{
	
	}
}
?>