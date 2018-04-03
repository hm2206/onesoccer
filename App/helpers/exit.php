<?php
	include "../Controllers/Core.php";
	session_destroy();

	$core = new Core;

	header("location: " . $core->url_link['principal']);

?>