<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home | Budget Database</title>
  <meta charset="UTF-8">
  <link href="databasestyle.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<header>
<h1 id="result"><?php  echo 'Welcome '.$_SESSION["user_id"]; ?></h1>
Budget Database
</header>
<h1>Transactions</h1>
<br />
<h3>Click on any transaction to edit or delete it.</h3>
<?php
include 'dbstuff.inc';
$vip_id = transactions['vip_name'];
  $transactiondate = transactions['transactiondate'];
  $transactionamount = transactions['transactionamount'];


foreach ($db->query("SELECT * from transactions ORDER BY transactionid") as $row) 
{
 echo "<p><span id='printedecho'><a href='budgetEdit.php?transactionid=$row[0]'>'ID#: '$row[0] ' | Payee Name: '$row[4] ' | Transaction Date: '$row[1] ' | Transaction Amount: $$row[2] </a> </span></p>\n\n";
}
?>

<br />
<hr>
<br />


<a href="budgetSearch.php">Search Transactions</a>
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