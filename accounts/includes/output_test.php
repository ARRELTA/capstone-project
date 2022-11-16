<?php

	include_once './connect.php';
	include_once './functions.php';
	$output = "";
	$Name = "LittleOnion";
	$query = "SELECT * FROM users WHERE displayname = ? OR Email = ?;";
	$output = uidExists($conn, $Name);
	echo $output["displayname"];
	
	
	//Python test, decomment the following lines to execute
	/*
	$Alpha = "And"; $Beta = "Goodbye";
	
	$command = escapeshellcmd("python ../../py/output_test.py ${Alpha} ${Beta}");
	$output = exec($command);
	echo $output;
	*/
?>