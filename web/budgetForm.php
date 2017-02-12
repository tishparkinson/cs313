<?php
  include 'dbstuff.inc';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $sql_string = "INSERT INTO vips (vip_name)(?)";
      $statement = $db->prepare($sql_string);
      $statement->execute(array($_POST["vip_name"]));
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
<h1>Budget</h1>
<br />
<form method="post" action="">

  <table>
    <tr>
      <td><label for="vip_name">Name:</label></td>
      <td><input type="text" name="vip_name" id="vip_name"></td>
    </tr>
  </table>

  <br />
  
  <br />
  <button name="submit" type="submit">Submit</button>
</form>

<br />
<hr>
<br />

</body>
</html>