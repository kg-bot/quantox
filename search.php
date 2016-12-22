<?php
	session_start();
	if(isset($_SESSION["LoggedIn"])){
		require("search_form.php");
		# I'm not doing DB query to find matching users becuase we don't have DB we can work on together
		# I can make all of this features if you want or I'll just leave this example
		if(isset($_POST["query"])){
			require("results.html");
		}
	}
	else{
		$response = array("error" => "Please login");
		require("login_view.php");
	}