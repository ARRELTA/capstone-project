<?php
	include 'connect.php';
	$conn = open_connection();
	//Get Data from Login Form
	$Username = $_POST['Username'] ?? "";
	$Password = $_POST['Password'] ?? "";
	
	$stmt = $conn->prepare("SELECT * FROM credentials WHERE UN = ? AND PWD = ?");
	$stmt->bind_param("ss",$Username, $Password);
	$stmt->execute();
	echo "Login Complete";
	$stmt->close();
	$conn->close();
?>