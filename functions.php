<?php
	function checkRegisteredEmail($email, $con) {
		$stmt = mysqli_prepare($con, "SELECT Email FROM profiles WHERE Email=?");
		mysqli_stmt_bind_param($stmt, "s", $email);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $emails);
		mysqli_stmt_fetch($stmt);
		mysqli_stmt_close($stmt);
		if($emails != null)
			{
				return True;
			}
		else
			{
				return False;
			}
	}

	function checkEmail($userEmail) {
		$validEmail = filter_var($userEmail, FILTER_VALIDATE_EMAIL);
		if(!$validEmail) {
			return False;
		}
		else {
			return True;
		}
	}

	function validateName($maxLen, $minLen, $name) {
		if(strlen($name) >= $minLen && strlen($name) <= $maxLen) {
			if(preg_match("/^[a-zA-Z -]+$/", $name)) {
				return True;
			}
			else {
				return False;
			}
		}
		else {
			return False;
		}
	}

	function validatePassword($maxLen, $minLen, $passRepeat, $password){
		if(strlen($password) >= $minLen &&
			strlen($password) <= $maxLen &&
			$password == $passRepeat) {
			$password = password_hash($password, PASSWORD_DEFAULT);
			if(!$password) {
				return False;
			}
			else {
				return $password;
			}
		}
		else {
			return False;
		}
	}

	function registerUser($email, $name, $password, $con) {
		$stmt = mysqli_prepare($con, "INSERT INTO profiles (Email, Name, Password) VALUES (?, ?, ?)");
		mysqli_stmt_bind_param($stmt, "sss", $email, $name, $password);
		$result = mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		if($result) {
			return True;
		}
		else {
			return False;
		}
	}

	function getUsername($name){
		$stmt = mysqli_prepare($con, "SELECT Name FROM profiles WHERE Name=?");
		mysqli_stmt_bind_param($stmt, "s", $name);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $names);
		mysqli_stmt_fetch($stmt);
		mysqli_stmt_close($stmt);
		if($names != null)
			{
				return True;
			}
		else
			{
				return False;
			}
	}

