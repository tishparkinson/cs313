<?php
  //session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <link href="databasestyle.css" type="text/css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Alegreya+SC" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
	<header>
	Budget Database
	</header>

	<h2>Login</h2>
	<form method="post" name="login">
			<label class="loginFormlbl" for="loginuserid">User ID: </label>
			<input type="text" name="loginuserid" id="loginuserid">
			<label class="loginFormlbl" for="loginpassword">Password: </label>
			<input type="password" checked="checked" name="loginpassword" id="loginpassword">
			<button id="btnlogin">Login</button>
	  </form>
	  <br><br>
	  <a href="registration.php">Register</a>
  </body>
  </html> */