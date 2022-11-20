<?php

//Data cleaners

function mass_clean(...$vars) {
	foreach ($vars as $v) {$v = data_clean($v);}
}

function data_clean(&$var) {
	$var = filter_var($var, FILTER_SANITIZE_STRING); 
	$var = htmlspecialchars($var);
}

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
function uidExists($conn, $userInput) {
	$sql = "SELECT * FROM users WHERE displayname = ? OR Email = ?;";
	return runQuery($conn, $sql, 1, $userInput, $userInput);
}

// Insert user into users & credentials tables
function addUser($conn, $F_Name, $L_Name, $Email, $displayname, $PWD) {
	//PWD hash for credentials
	$sodium = getSalt();
	$hashedPWD = encrypt($PWD,$sodium);
	
	$query1 = "INSERT INTO users (F_Name, L_Name, Email, displayname) VALUES (?, ?, ?, ?);";
	$query2 = "INSERT INTO credentials (UN, PWD, NaCl) VALUES (?, ?, ?);";
	
	runQuery($conn, $query1, 2, $F_Name, $L_Name, $Email, $displayname);
	runQuery($conn, $query2, 2, $displayname, $hashedPWD, $sodium);
	header("location: ../login.php");
	exit();
}

//Run SQL Query
function runQuery($connector, $query, $resultType, ...$params) {
	foreach ($params as $p) {
		$p = mysqli_real_escape_string($connector,$p);
	}
	$stmt = mysqli_stmt_init($connector);
	if (!mysqli_stmt_prepare($stmt, $query)) {
	 	header("location: ./__FILE__?error=stmtfailed");
		exit();
	}
	$parTypes = "";		//Parameter type binding initialization
	foreach ($params as $p) {
		switch (gettype($p)) {
			case "string":
				$parTypes .= "s"; break;
			case "integer":
				$parTypes .= "i"; break;
			case "double":
				$parTypes .= "d"; break;
			default:
				$parTypes .= "!"; break;
		}
	}
	mysqli_stmt_bind_param($stmt, $parTypes, ...$params);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	switch ($resultType) {
		case 0:		//Fetching multiple rows
			$rows = mysqli_fetch_all($resultData, MYSQLI_ASSOC); break;
		case 1:		//Fetching a single row
			$rows = mysqli_fetch_assoc($resultData); break;
		case 2: 	//No row is fetched (INSERT statements)
			$rows = true; break;
		default:
			$rows = false; break;
	}
	if ($rows) { return $rows; }
	else { $result = false;	return $result;}
	mysqli_stmt_close($stmt);
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

//Create salt for hashing purposes
function getSalt() {
	$bytes = random_bytes(36);
	return bin2hex($bytes);
}

//Pass data to primary encryption script, get result
function encrypt($PWD, $SALT) {
	$output = '';
	if ($PWD != "") {
		$command = escapeshellcmd("python ../../py/pri.py ${PWD} ${SALT}");
		$output = exec($command);
	}
	return $output;
}

function verify($pwd1, $s, $pwd2) {
	$t = encrypt($pwd1, $s);
	return ($t == $pwd2);
}

// Log in
function loginUser($conn, $displayname, $PWD) {
	$uidExists = uidExists($conn, $displayname);

	if ($uidExists === false) {	header("location: ../login.php?error=wronglogin");	exit();	}
	$query = 'SELECT * FROM credentials WHERE UN = ?;';
	$cred = runQuery($conn, $query, 1, $displayname);
	$pwdHashed = $cred["PWD"];
	$chlor = $cred["NaCl"];
	$checkPwd = verify($PWD, $chlor, $pwdHashed);

	if ($checkPwd) {
		session_start();
		$_SESSION["userUID"] = $uidExists["UID"];
		$_SESSION["userName"] = $uidExists["displayname"];
		header("location: ../../index.php");
		exit();
		
	}
	else {
		header("location: ../login.php?error=wronglogin");
		exit();
	}
}