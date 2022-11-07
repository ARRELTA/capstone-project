<?php

//Error & validation functions

// Check empty input
function emptyInputSignup($F_Name, $L_Name, $Email, $PWD, $cPWD, $displayname) {
	$result;
	if (empty($F_Name) || empty($L_Name) || empty($Email) || empty($PWD) || empty($cPWD) || empty($displayname)) {
		$result = true;
	}
	else {
		$result = false;
	}
		return $result;
}	

// Check invalid displayname (no special chars)
function invalidUname($displayname) {
	$result;
if (!preg_match("/^[a-zA-Z0-9]*$/", $displayname)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Check invalid email (default email filter)
function invalidEmail($Email) {
	$result;
	if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Check if PWD less than 8 chars
function pwdLength($PWD) {
	$result;
	if (strlen($PWD) < 8) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Matching password check
function pwdConfirm($PWD, $cPWD) {
	$result;
	if ($PWD !== $cPWD) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Check for existing username and email (users table)
function uidExists($conn, $displayname) {
	$sql = "SELECT * FROM users WHERE displayname = ? OR Email = ?;";
		$stmt = mysqli_stmt_init($conn); 
		if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../register.php?error=stmtfailed");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "ss", $displayname, $displayname);
	mysqli_stmt_execute($stmt);

// "Get result" returns the results from a prepared statement
	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}
	

// Insert user into users DB
function registerUser($conn, $F_Name, $L_Name, $Email, $displayname, $PWD) {
  $sql = "INSERT INTO users (F_Name, L_Name, Email, displayname, PWD) VALUES (?, ?, ?, ?, ?);";

	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../register.php?error=stmtfailed");
		exit();
	}

//PWD hash for users table (temp method in place of salt/python hashing)
	$hashedPwd = password_hash($PWD, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "sssss", $F_Name, $L_Name, $Email, $displayname, $hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header("location: ../register.php?error=none");
	exit();
}

// Check for empty input login
function emptyInputLogin($displayname, $PWD) {
	$result;
	if (empty($displayname) || empty($PWD)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Log in
function loginUser($conn, $displayname, $PWD) {
	$uidExists = uidExists($conn, $displayname);

	if ($uidExists === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}

	$pwdHashed = $uidExists["PWD"];
	$checkPwd = password_verify($PWD, $pwdHashed);

	if ($checkPwd === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}
	elseif ($checkPwd === true) {
		session_start();
		$_SESSION["userid"] = $uidExists["UID"];
		$_SESSION["useruid"] = $uidExists["displayname"];
		header("location: ../index.php?error=none");
		exit();
	}
}