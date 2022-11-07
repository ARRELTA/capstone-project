<?php

if (isset($_POST["submit"])) {
	
	$displayname = $_POST["displayname"];
	$PWD = $_POST["PWD"];
	
	require_once "connect.php";
	require_once "functions.php";
	
	
	if (emptyInputLogin($displayname, $PWD) === true) {
		header("location: ../login.php?error=emptyinput");
			exit();
	}

loginUser($conn, $displayname, $PWD);

} else {
	header("location: ../login.php");
	exit();
}