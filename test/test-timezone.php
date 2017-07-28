<?php 
	$time = $_GET['time'];
	date_default_timezone_set('UTC');
	$i =2;
		$time = date("d/m/Y H:i:s", strtotime("{$time} hour"));
	// $time = date("d/m/Y H:i:s");
	file_put_contents('time.txt', $time);

?>