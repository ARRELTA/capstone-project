<?php
//Begin session
session_start();

//Redirect to home page if already logged in
if (isset($_SESSION["userName"]) && $_SESSION["userName"] === true) {
	header("location: index.php");
	exit;
}
?>