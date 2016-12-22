<html>
		<head>
			<title>Quantox - Login</title>
			<meta name="viewport" content="width=device-width,initial-scale=1">
			<meta name="author" content="Stefan Ninic">
			<link rel="stylesheet" href="style.css" />
		</head>
		<body>
		<div class="form-holder Container">
			<h2>Login Form</h2>
			<?php 
				if(isset($response['error'])){
					echo "<span class='error'>{$response['error']}</span>
						<br><a href='search.php'>Search Users</a>";
				}
				elseif(isset($response['success'])){
					echo "<span class='success'>{$response['success']}</span>
						<br><a href='search.php'>Search Users</a>";
				}
				else{
					echo "<a href='search.php'>Search Users</a>";
				}
			?>
			<form action="login.php" method="post">
			    <input type="email" name="email" class="form-control email" placeholder="Enter your email">
			    <input type="password" name="password" class="form-control password" placeholder="Password">
			    <input type="submit">
			</form>
		</div>
		</body>
		</html>