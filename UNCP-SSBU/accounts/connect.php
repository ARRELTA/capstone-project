<?php
	$F_Name = $_POST['F_Name'];
	$L_Name = $_POST['L_Name'];
	$Email = $_POST['Email'];
	$PWD = $_POST['PWD'];
	$displayname = $_POST['displayname'];
	
	//Database connection
	$conn = new mysqli('localhost','root','OmegaPhiBeta','ssbu');
	if($conn->connect_error){
		die('Connection Failed	: '.$conn->connect_error);
	}else{	
		$stmt = $conn->prepare("insert into users(F_Name, L_Name, Email, displayname)
			values(?, ?, ?, ?)");
		$stmt->bind_param("ssss",$F_Name,$L_Name,$Email,$displayname);
		$stmt->execute();
		echo "Registration Complete";
		$stmt->close();
		$conn->close();
	}