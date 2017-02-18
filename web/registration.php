<?php
  session_start();
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
<form method="post" id="reg" name="reg">
  <div style="Display: none" id="regdiv">
    <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">
        <label class="loginFormlbl" for="userid">User ID: </label>
        <input type="text" name="userid" id="userid">
      </div>
      <div class="col-sm-3">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">
        <label class="loginFormlbl" for="password">Password: </label>
        <input type="password" name="password" id="password">
      </div>
      <div class="col-sm-3">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">
        <label class="loginFormlbl" for="confpassword">Confirm Password: </label>
        <input type="password" name="confpassword" id="confpassword">
      </div>
      <div class="col-sm-3">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">
        <button id="btnreg">Submit</button>
      </div>
      <div class="col-sm-3">
      </div>
    </div>
  </div>
  </form>
  <a href="login.php">Login</a>
  </body>
  </html>