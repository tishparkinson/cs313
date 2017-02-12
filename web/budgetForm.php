<?php
  include 'dbstuff.inc';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $sql_string = "INSERT INTO transactions (vip_name, transactiondate, transactionamount) values (?,?,?)";
      $statement = $db->prepare($sql_string);
      $statement->execute(array($_POST["vip_name"],$_POST["transactiondate"],$_POST["transactionamount"]));
      $newId = $db->lastInsertId('transactions_id_seq');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add a Transaction</title>
    <meta charset="UTF-8">
    <link rel="stylesheet">
</head>
<body>
<h1>Add a Transaction</h1>
<br />
<form method="post" action="">

  <table>
    <tr>
      <td><label for="vip_name">Name:</label></td>
      <td><input type="text" name="vip_name" id="vip_name"></td>
    </tr>
    <tr>
      <td><label for="transactiondate">Date:</label></td>
      <td><input type="text" name="transactiondate" id="transactiondate"></td>
    </tr>
    <tr>
      <td><label for="transactionamount">Amount:</label></td>
      <td><input type="text" name="transactionamount" id="transactionamount"></td>
    </tr>
  </table>

  <br />
  <button name="submit" type="submit">Add</button>
</form>

<br />
<hr>
<br />

</body>
</html>