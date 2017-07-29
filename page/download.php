<?php
		$contentTypes=array(
		"txt" => "text/plain",
		"html"=> "text/html",
		"htm" => "text/html",
		"php" => "text/plain",

		"exe" => "application/octet-stream",
		"pdf" => "application/pdf",
		"csv" => "application/csv",
		"zip" => "application/zip",
		"doc" => "application/msword",
		"xls" => "application/vnd.ms-excel",
		"ppt" => "application/vnd.ms-powerpoint",

		"gif" => "image/gif",
		"png" => "image/png",
		"jpeg"=> "image/jpg",
		"jpg" => "image/jpg",
		
		"mp4" => "video/mp4",
		"3gp" => "video/3gp"
	);
	$file = $_GET['url']; 
	$filename = urldecode($_GET['name']);
	$format = explode('.', $filename)[1];
	$contentType = array_key_exists($format, $contentTypes) ? $contentTypes[$format] : 'text/plant';
	header("Content-Description: File Transfer"); 
	header("Content-Type: {$contentType}"); 
	header("Content-Disposition: attachment; filename='" . $filename . "'"); 
	readfile ($file);
	exit();
?>