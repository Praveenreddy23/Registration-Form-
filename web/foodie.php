<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F-Cart</title>
</head>
<body>
    <form action="foodie.php" method="post">

    <label>Quantities</label><br>
    <input type="text" name="quantity"><br>
    <input type="submit" value="total">

    </form>
</body>
</html>
<?php
  $item = "biriyani";
  $prize = 5.6;
  $quantity = $_POST["quantity"];
  $total = null;

  $total = $quantity * $prize;

  echo "You Have ordered {$quantity} X {$item}/ <br>";
  echo "Total Amount is: \${$total}";

?>