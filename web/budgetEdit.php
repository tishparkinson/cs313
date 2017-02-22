<?php
  include 'dbstuff.inc';
  $transactionid = $_GET['transactionid'];
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $vip_name = $_POST["vip_name"];
  $transactiondate = transactions['transactiondate'];
  $transactionamount = transactions['transactionamount'];
  
      $sql_string = "UPDATE transactions
                           SET vip_name='$vip_name',
                                  transactiondate='$transactiondate',
                                  transactionamount='$transactionamount'
                          WHERE transactionid='$transactionid'";
      $statement = $db->exec($sql_string);
  }
  
  $statement = $db->query("SELECT * from transactions WHERE transactionid = '$transactionid'");
  $row=$statement->fetch();
 $vip_name= $row['vip_name'];
 $transactionamount = $row['transactionamount'];
 $transactiondate = $row['transactiondate'];

?>

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit a Transaction</title>
    <meta charset="UTF-8">
    <link href="databasestyle.css" type="text/css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Alegreya+SC" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<header>
Budget Database
</header>
<h1>Edit a Transaction</h1>
<br />
<form method="post" action="">

  <table>
    <tr>
      <td><label for="vip_name">Name:</label></td>
      <td><input type="text" name="vip_name" id="vip_name" value="<?php echo $vip_name;?>"></td>
    </tr>
    <tr>
      <td><label for="transactiondate">Date:</label></td>
      <td><input type="text" name="transactiondate" id="transactiondate" value="<?php echo $transactiondate;?>"></td>
    </tr>
    <tr>
      <td><label for="transactionamount">Amount:</label></td>
      <td><input type="text" name="transactionamount" id="transactionamount" value="<?php echo $transactionamount;?>"></td>
    </tr>
  </table>

  <br />
  <button name="editbtn" type="submit">Edit</button>
  <button name="deletebtn" type="submit">Delete</button>
</form>

<br />
<a href="budgetHome.php">Back to Home</a>
<hr>
<br />
<footer>
	CS313 | Tish Parkinson
</footer>
</body>
</html>