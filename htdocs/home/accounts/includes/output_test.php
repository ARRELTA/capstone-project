<?php

	include_once './connect.php';
	include_once './functions.php';
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
	if (isset($_POST["CREATE"])) {echo "CREATION REQUEST RECIEVED";}
	elseif (isset($_POST["ALTER"])) {
		$command = escapeshellcmd("python ../../py/output_test.py ${PWD}");
		$output = exec($command);}
	elseif (isset($_POST["DESTROY"])) {echo "DESTROY REQUEST RECIEVED";}
	else {echo "UNKNOWN REQUEST RECIEVED";}
	
?>