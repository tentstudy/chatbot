<?php 
	$url = "http://sandbox.api.simsimi.com/request.p?" . http_build_query($_GET);
	
	$data = file_get_contents($url);
	$data = json_decode($data)->response;
	echo '
		{
		 "messages": [
		   {"text": "'. $data .'"}
		 ]
		}
	';


?>