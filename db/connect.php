<?php
	require_once __DIR__ . '/' . 'config.php';
	// Create connection
	$conn = new mysqli(hostName, username, password, database);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>