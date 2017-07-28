<pre>
<?php 
	require_once '../lib/curl.php';
	// $url = 'https://vainvn.info/api/apisim.php?text=ê+chó&listkey=sss';
	$image = file_get_contents('everfilter/in.jpg');
	$url = "http://server-backup5.trolyfacebook.com:22103/filter/?image={$image}&mode=0";
	echo(cURL($url, 'Apache-HttpAsyncClient/4.1.2 (Java/1.8.0_101)'));
?>
</pre>