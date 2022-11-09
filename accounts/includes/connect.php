<?php


	$server = "localhost";
	$username = "root";
	$password = "root1234";
	$database = "ssbu";
	
	
	//Database connection
	$conn = mysqli_connect($server, $username, $password, $database,3311);
	
	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}