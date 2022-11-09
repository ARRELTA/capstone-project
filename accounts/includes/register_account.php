<?php
	if (isset($_POST['submit'])) {
	
		$F_Name = $_POST['F_Name'];
		$L_Name = $_POST['L_Name'];
		$Email = $_POST['Email'];
		$PWD = $_POST['PWD'];
		$cPWD = $_POST['cPWD'];
		$displayname = $_POST['displayname'];
		
		require_once './connect.php';
		require_once './functions.php';
		
//Error messages

	//Check for empty fields
		if (emptyInputSignup($F_Name, $L_Name, $Email, $displayname, $PWD, $cPWD) !== false) {
			header("location: ../register.php?error=emptyinput");
			exit();
		}
	//Invalid username/email checks	
		if (invalidUname($displayname) !== false) {
			header("location: ../register.php?error=invalidUname");
			exit();
		}
		if (invalidEmail($Email) !== false) {
			header("location: ../register.php?error=invalidEmail");
			exit();
		}
	// Check PWD length
		if (pwdLength($PWD) !== false) {
			header("location: ../register.php?error=passwordTooshort");
			exit();
		}
			
	//Check for matching password fields	
		if (pwdConfirm($PWD, $cPWD) !== false) {
			header("location: ../register.php?error=passwordMismatch");
			exit();
		}
	//Check for exisitng username
		if (uidExists($conn, $displayname) !== false) {
			header("location: ../register.php?error=usernametaken");
			exit();
		}

		//Registration
		addUser($conn, $F_Name, $L_Name, $Email, $displayname, $PWD);
	}	else {
		header("location: ../register.php");
		exit();
}