<?php
	session_start();
	if(isset($_SESSION["LoggedIn"])) {
		header("Location: index.php");
	}
	else {
		if(isset($_POST["email"]) &&
			isset($_POST["password"]))
		{
			if (!empty($_POST["email"]) &&
				!empty($_POST["password"]))
			{
				require "functions.php";
				$email = checkEmail($_POST["email"]);
				# Email check is below
				if(!$email) {
					$reponse = array("error" => "Your email is not valid.");
				}
				# Password check is below
				else {
					$maxLen = 15; # Max password length allowed
					$minLen = 8; # Min password length allowed
					$password = validatePassword($maxLen, $minLen, $_POST["password"], $_POST["password"]);
					if(!$password) {
						$response = array("error" => "Your password is not valid.");
					}
					else {
						# require "dbStuff.php"; But we're not using it in this code
						# Below should be if(!$con)
						if(False) {
							$response = array("error" => "Can't connect to database, please try again later.");
						}
						else {
							/* 
								Here we check if user is already registered with this email
								and if he is not we add new user to the database.
								I'm not going to do that because we don't have a database that we can use together yet.
								We'll imagine everything went well and user is registered and loggedIn so we can show him search page.
								
								$isEmailRegistered = checkRegisteredEmail($email, $con);
							*/
							# Here should be if($isEmailRegistered)
							if(True) {
									$_SESSION["LoggedIn"] = 1;
									# Can't know name of the user without using real working DB which I can make if you require it
									$response = array("success" => "Welcome, {name of the user}!");
							}
							else {
									$response = array("error" => "Can't register right now, please try again later.");
							}
						}
					}
				}
			}

		}
		require("login_view.php");
	}
