<?php
  include 'dbstuff.inc';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $sql_string = "INSERT INTO transactions (date, amount, vip) values (?,?,?)";
      $statement = $db->prepare($sql_string);
      $statement->execute(array($_POST["transactionamount"],$_POST["transactiondate"],$_POST["vip_id"]));
      $newId = $db->lastInsertId('transaction_id_seq');
      $categories = $_POST["categories"];
      foreach($categories as $category){
          $sql_string = "INSERT INTO vip_categories (name, topic_id) values(?,?)";
          $statement = $db->prepare($sql_string);
          $statement->execute(array(strval($newVipId),strval($category)));
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Budget Search Results</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/cs313-php.css">
</head>
<body>
<h1>Search Results</h1>


<?php
  echo "<br />";
  $sqlstring = 'select * vip_categories';
  $id="";
  foreach ($db->query($sqlstring) as $row)
  {
    if ($id != $row["id"]) {
      if ($id !=""){
          echo "</span></p>\n\n";
      }
      $id = $row["id"];
        echo "<p><span id='scriptref'>".$row['name'].
            " - Category: " . $row["name"];
    } else {
      echo ", ".  $row["name"];
    }
  }
  echo "</span></p>\n\n";

?>
<br />
<hr>
<br />

</body>
</html>