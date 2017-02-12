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
 print "<p><span id='transactionreference'>$row[1] $row[2] $row[3] $row[4]</p>\n\n";
}
?>
<br />
<hr>
<br />
</body>
</html>