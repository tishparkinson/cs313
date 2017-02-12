<?php
  include 'dbstuff.inc';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $sql_string = "INSERT INTO vips (name, date, amount)(?)";
      $statement = $db->prepare($sql_string);
      $statement->execute(array($_POST["vip_name"], $_POST["transactiondate"], $_POST["transaction amount"]]));
      $newVipId = $db->lastInsertId('vip_id_seq');
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Budget - Form Page</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="">
</head>
<body>
<h1>Add a Trasaction</h1>
<br />
<form method="post" action="">

  <table>
    <tr>
      <td><label for="vip_name">VIP Name:</label></td>
      <td><input type="text" name="vip_name" id="vip_name"></td>
    </tr>
	<tr>
      <td><label for="vip_name">Date:</label></td>
      <td><input type="text" name="transactiondate" id="transactiondate"></td>
    </tr>
	<tr>
      <td><label for="vip_name">Amount:</label></td>
      <td><input type="text" name="transactionamount" id="transactionamount"></td>
    </tr>
  </table>

  <br />
  
  <button name="submit" type="submit">Submit</button>
</form>
<br />
<hr>
<br />

</body>
</html>