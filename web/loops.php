<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Count</title>
</head>
<body>
   <form action="loops.php" method="post">
      <label>Enter a Number to count</label>
      <input type="text" name="count">
      <input type="submit" value="start">
     </form>

     <?php
    $count = $_POST["count"];

    for($i = 0; $i <= $count; $i++){
         echo $i, "<br>";
    }

    for($i = $count; $i >= 0; $i--){
         echo $i, "<br>";
    }
?>
</body>
</html>

 


