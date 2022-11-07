<?php

function open_connection() {
	//Database information setup
	//CHANGE IF NEED BE
	$server = "localhost";
	$database = "ssbu";
	$username = "root";
	$password = "root1234";
	
	//Database connection
	$conn = new mysqli($server,$username, $password, $database, 3311) or die('Connection Failed	: '.$conn->connect_error);
	return $conn;
}


function close_connection($conn) {$conn -> close();}
?>