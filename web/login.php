<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add a Transaction</title>
    <meta charset="UTF-8">
    <link href="databasestyle.css" type="text/css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Alegreya+SC" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<header>
Budget Database
</header>

<form method="post" id="login" name="login">
  <div id="logindiv">
    <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">
        <label class="loginFormlbl" for="loginuserid">User ID: </label>
        <input type="text" name="loginuserid" id="loginuserid">
      </div>
      <div class="col-sm-3">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">
        <label class="loginFormlbl" for="loginpassword">Password: </label>
        <input type="password" checked="checked" name="loginpassword" id="loginpassword">
      </div>
      <div class="col-sm-3">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">
        <button id="btnlogin">Submit</button>
      </div>
      <div class="col-sm-3">
      </div>
    </div>
  </div>
  </form>
  </body>
  </html>