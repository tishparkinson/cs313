<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home | Budget Database</title>
  <meta charset="UTF-8">
  <link href="databasestyle.css" type="text/css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Alegreya+SC" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<header>
<h1 id="result"><?php  echo 'Welcome '.$_SESSION["user_id"]; ?></h1>
Budget Database
</header>
<h1>Transactions</h1>
<br />
<?php
include 'dbstuff.inc';



foreach ($db->query('SELECT * from transactions') as $row) 
{
 echo "<p><span id='transactionreference'><a href='budgetEdit.php?id=$row[4]<br> $row[1]<br> $row[2] </p>\n\n";
}
?>

<br />
<hr>
<br />


<a href="budgetForm.php">Search Transactions</a>
</body>
</html>
<br />
<hr>
<br />
<footer>
	CS313 | Tish Parkinson
</footer>
</body>
</html>