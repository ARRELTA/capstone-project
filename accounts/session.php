<?php
//Begin session
session_start();

//Redirect to home page if already logged in
if (isset($_SESSION["userid"]) && $_SESSION["userid"] === true) {
	header("location: index.php");
	exit;
}
?>