<?php
// array - 'Variable' which can hold more than one value at a time.
     $name = array('virat', 'rohit', 'sachin', "hardhik");

     //echo $name[3];
     $name[2] = "sky";
     echo $name[2]; //replace element

     array_push($name, 'ishan', 'green');//add element
      array_pop($name);//remove last element
      array_shift($name);//remove first element
      $name = array_reverse($name);

     foreach($name as $naam){
        echo $naam ,"<br>";
     }
?>

<?php
   //associative array  - an array made of key => value pairs.

   // EG:
   // countries => capitals
   // id => username
   // item = prize

   $IPL = array('rcb'=>'virat', 'mi'=>'rohit', 'csk'=>'dhoni', 'gt'=>"hardhik");

   foreach($IPL as $key => $value){
      echo "{$key} = {$value} <br>";
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>IPL</title>
</head>
<body>
   <form action="array.php" method="post">
      <label>Enter Team Name</label>
      <input type="text" name="ipl">
      <input type="submit">
   </form>
</body>
</html>

<?php
    $ipl = array('rcb'=>'virat', 'mi'=>'rohit', 'csk'=>'dhoni', 'gt'=>"hardhik");

    $team = $ipl[$_POST["ipl"]];

    echo "The Caption is:{$team}";
?>