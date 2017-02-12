<!DOCTYPE html>
<html lang="en">
<head>
    <title>Budget Search Results</title>
    <meta charset="UTF-8">
    <link rel="stylesheet">
</head>
<body>
<h1>Search Results</h1>
<br />
<?php
include 'dbstuff.inc';

foreach ($db->query('SELECT * from transactions where transactionid='.$_GET["transactionid"]) as $row)
{
    print "<p><span id='transactionreference'>$row[4]<br> $row[1]<br> $row[2]</span> - \"$row[4]\"</p>\n\n";
}
?>
<br />
<a href="budgetSearch.php">Search Again</a>
</body>
</html>