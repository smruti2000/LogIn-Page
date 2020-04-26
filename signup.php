<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<meta charset="utf-8">
	<link rel="icon" href="image/faviconn.ico">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="background">
		<div class="body_container">
			<div class="text1">
				<h1>Sign Up</h1>
			</div>
			<div class="box">
				<form class="form" method="post" action="./login.php">
					<input class="name" type="text" name="name" placeholder="Name"><br>
					<input class="email" type="email" name="email" placeholder="Email"><br>
					<input class="password" type="password" name="password" placeholder="Password"><br>
					<input type="submit" name="submit" value="Create">
				</form>
			</div>
			<div class="text">
				<p> Already have .<a href="signin.php"> &nbsp &nbsp  Sign In</a></p>
			</div>	
		</div>	
	</div>
</body>
</html>