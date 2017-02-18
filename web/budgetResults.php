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

foreach ($db->query('SELECT * from transactions where vip_name='.$_GET["vip_name"]) as $row)
{
    print "<p><span id='transactionreference'>$row[4]<br> $row[1]<br> $row[2]</p>\n\n";
}
?>

<br />
<a href="budgetForm.php">Add a Transaction</a>
<br><br><br>
<a href="budgetSearch.php">Transaction List</a>
<footer>
	CS313 | Tish Parkinson
</footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Scripture Resources</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/cs313-php.css">
</head>
<body>
<h1>Scripture Resources - Scripture Details</h1>
<br />
<?php
include 'dbstuff.inc';

foreach ($db->query('SELECT * from scriptures where id='.$_GET["id"]) as $row)
{
    print "<p><span id='scriptreference'><a href='budgetEdit.php?id=$row[0]'>$row[4] $row[1] $row[2] </a> </span></p>\n\n";
}
?>
<br />
<a href="scripture_search.php">Back to Scripture Resources - Search Page</a>
</body>
</html>