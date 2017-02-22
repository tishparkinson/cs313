<!DOCTYPE html>
<html lang="en">
<head>
    <title>Budget Search Results</title>
    <meta charset="UTF-8">
    <link href="databasestyle.css" type="text/css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Alegreya+SC" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<header>
Budget Database
</header>
<h1>Search Results</h1>
<br />
<?php
include 'dbstuff.inc';

foreach ($db->query('SELECT * from transactions where transactionid='.$_GET["transactionid"]) as $row)
{
    print "<p><span id='scriptreference'><a href='budgetResults.php?id=$row[0]'>$row[4] $row[1] $row[2] </a> </span></p>\n\n";
}
?>



<br />
<a href="budgetForm.php">Add a Transaction</a>
<br><br><br>
<a href="budgetSearch.php">Back to Search</a>
<br><br><br>
<a href="budgetHomw.php">Back to Home</a>
<footer>
	CS313 | Tish Parkinson
</footer>
</body>
</html>

