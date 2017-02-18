 <?php
//  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Page</title>
    <meta charset="UTF-8">
    <link href="databasestyle.css" type="text/css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Alegreya+SC" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
	<header>
	Budget Database
	</header>
<h2>Register</h2>
<form method="post" name="reg">
<label for="userid">User ID: </label>
<input type="text" name="userid">

<label class="loginFormlbl" for="password">Password: </label>
<input type="password" name="password" id="password">

<label class="loginFormlbl" for="confpassword">Confirm Password: </label>
<input type="password" name="confpassword" id="confpassword">
<br><br>
<button id="btnreg">Register</button>
		
</form>
  <a href="login.php">Login</a>
  </body>
  </html> */