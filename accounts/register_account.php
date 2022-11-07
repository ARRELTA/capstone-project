<?php
	include 'connect.php';
	$conn = open_connection();
	//Get Data from Registration Form
	$F_Name = $_POST['F_Name'] ?? "";
	$L_Name = $_POST['L_Name'] ?? "";
	$Email = $_POST['Email' ?? ""];
	$PWD = $_POST['PWD'] ?? "";
	$displayname = $_POST['displayname'] ?? "";
	
	$stmt = $conn->prepare("insert into users(F_Name, L_Name, Email, displayname) values(?, ?, ?, ?)");
	$stmt->bind_param("ssss",$F_Name,$L_Name,$Email,$displayname);
	$stmt->execute();
	echo "Registration Complete";
	$stmt->close();
	$conn->close();
?>