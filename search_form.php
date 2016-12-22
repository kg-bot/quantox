<html>
	<head>
		<title>Quantox - Search</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="author" content="Stefan Ninic">
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div class="form-holder Container">
			<h2>Search Form</h2>
			<?php 
				if(isset($response['error'])){
					echo "<span class='error'>{$response['error']}</span>
						<br><a href='search.php'>Search Users</a>";
				}
				elseif(isset($response['success'])){
					echo "<span class='success'>{$response['success']}</span>
						<br><a href='index.php'>Home</a>";
				}
				else{
					echo "<a href='index.php'>Home</a>";
				}
			?>
			<form action="search.php" method="post">
			    <input type="text" name="query" class="form-control query" placeholder="Enter your search query">
			    <input type="submit" value="Search">
			</form>
	</div>
	</body>
</html>