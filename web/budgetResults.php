<!DOCTYPE html>
<html lang="en">
<head>
    <title>Budget Search Results</title>
    <meta charset="UTF-8">
    <link href="style.css" type="text/css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Alegreya+SC" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<h1>Search Results</h1>
<br />
<?php
include 'dbstuff.inc';

foreach ($db->query('SELECT * from transactions where vip_name='.$_GET["vip_name"]) as $row)
{
    print "<p><span id='transactionreference'>$row[4]<br> $row[1]<br> $row[2] $row[4]</p>\n\n";
}
?>
<br />
<a href="budgetForm.php">Add a Transaction</a>
</body>
</html>