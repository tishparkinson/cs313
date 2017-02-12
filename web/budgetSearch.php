<!DOCTYPE html>
<html lang="en">
<head>
  <title>Scripture Resources</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/cs313-php.css">
</head>
<body>
<h1>Budget Search</h1>
<br />
<?php
include 'dbstuff.inc';



foreach ($db->query('SELECT * from transactions') as $row)
{
 print "<p><span id='transactionreference'>$row[4]<br> $row[1]<br> $row[2] </p>\n\n";
}
?>

<form method="post" action="">
    <label for="searchval">Search Transactions for:</label>
    <input type="text" name="searchval" id="searchval">
    <button name="submit" type="submit">Search!</button>
</form>
<?php
include 'dbstuff.inc';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbstuff.inc';
    $searchval = htmlspecialchars($_POST["searchval"]);

    echo "<br />";

    $sqlstring = 'SELECT transactionid, transactiondate, transactionamount from transactions WHERE vip_name = \''. html_entity_decode($searchval) .'\'';
    foreach ($db->query($sqlstring) as $row)
    {
        echo "<p><span id='transactionreference'><a href='budgetResults.php?id=$row[4]<br> $row[3]<br> $row[2]</a></span></p>\n\n";
    }
}
?>
<br />
<hr>
<br />
<a href="assignments.html">back to: Assignments Page</a>
</body>
</html>
<br />
<hr>
<br />
</body>
</html>