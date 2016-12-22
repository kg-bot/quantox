<html>
		<head>
			<title>Quantox - Register</title>
			<meta name="viewport" content="width=device-width,initial-scale=1">
			<meta name="author" content="Stefan Ninic">
			<link rel="stylesheet" href="style.css" />
		</head>
		<body>
		<div class="form-holder Container">
			<h2>Register Form<h2>
			<span <?php if(isset($response['error'])){echo "class='error'>{$response['error']}";}?></span>
			<form action="register.php" method="post">
				<input type="text" name="name" class="form-control name" placeholder="Enter your name">
			    <input type="email" name="email" class="form-control email" placeholder="Enter your email">
			    <input type="password" name="password" class="form-control password" placeholder="Password">
			    <input type="password" name="passRepeat" class="form-control password" placeholder="Password Repeat">
			    <input type="submit">
			</form>
		</div>
		</body>
