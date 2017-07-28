<pre>
<?php
	require_once 'lib/curl.php';
	$myXMLData = cURL('http://vnexpress.net/rss/tin-moi-nhat.rss');

	$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
	// 
	// echo json_encode($xml->channel, JSON_PRETTY_PRINT);
	print_r(/*json_decode*/(/*json_encode*/($xml->channel))/*->item*/);
?>