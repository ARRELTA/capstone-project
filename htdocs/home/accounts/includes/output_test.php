<?php

	include_once './connect.php';
	include_once './functions.php';
	include_once './getTourneyData.php';
	$output = "";
	/*
	$Name = "LittleOnion";
	$query = "SELECT * FROM users WHERE displayname = ? OR Email = ?;";
	$output = uidExists($conn, $Name);
	echo $output["displayname"];
	*/
	
	//Python test, decomment the following lines to execute
	/*
	$Alpha = 69;
	$command = escapeshellcmd("python ../../py/output_test.py ${Alpha}");
	$output = exec($command);
	echo $output;
	*/
	
	//Submission test, decomment the following lines to execute
	printEntries(0);

?>