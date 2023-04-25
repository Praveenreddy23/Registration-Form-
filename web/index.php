<?php
echo "Hello Im Learning php <br>";
echo "Is it help me or not in future:";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button>Yes</button>
    <button>No</button>
</body>
</html>


<?php
// Data types: String, Integer, Float, Boolean, Array, Object
    echo "<br> <br> Data-Types:-<br>";

    
     $var = "This is String";
     echo var_dump($var);

     echo "<br>";
     $var = 10;
     echo var_dump($var);

     echo "<br>";
     $var = 10.1;
     echo var_dump($var);

     echo "<br>";
     $var = true;
     echo var_dump($var);

     define("PI", 3.14);
     echo "<br>";
     echo PI;



    // Variables - is a reusable container that holds data like String, float, boolean, integer; 
    echo "<br> <br> Variables:-";
    $name = " Reddy";
    $age = 25;
    $gpa = 6.2;
    $pepsi = 20.65;
    $tax = 6.2;
    $available = true;
    $avail_Online = false;
    $quantity = 2;

    $total = null;

    echo "<br> <br> Hello {$name}" ;
    echo "<br> {$age} years old";
    echo "<br> Gpa is: {$gpa}";
    echo "<br> Pepsi Prize is: \${$pepsi}";
    echo "<br> Tax_rate: {$tax}% ";
    echo "<br> Available On Shop:{$available}";
    echo "<br> Available  On Online:{$avail_Online}";
    echo "<br> Quantities: {$quantity}";

    echo "<br> Orderd {$quantity} X {$pepsi}";
    $total = $pepsi * $quantity;
    echo "<br> Total Prize is:{$total}$";
?>
<?php
// Arithmetic operators : +, -, *, /, **, %
    echo "<br> <br> Arithmetic Operator:-";
    $x = 10;
    $y = 2;
    $z = null;

    // $z = $x + $y;
    // $z = $x - $y;
    // $z = $x * $y;
    // $z = $x / $y;
   // $z = $x ** $y;
    $z = $x % $y;
    
    echo "<br> <br>: {$z}";

// Increment/Decrement Operator
   echo "<br> <br> Increment/Decrement Operator:-";
    $counter = 10;

   // $counter++;
    // $counter--;
    // $counter+=2;
    //++$counter;
   --$counter;
   // $counter-=2;
    echo "<br> {$counter}";

 //  Presedence Operator: (), **, * /  %,  + -
    echo "<br> <br> Presedence Operator<br> <br>:-";

    $total1 = 2 + 3 - 1 * 4 / 6 ** 8;
    echo $total1;
// Comparison Operator:
echo "<br> <br> Comparison  Operator<br> <br>:-";
  echo "The value of (1==4) is:";
  echo var_dump(1==4);
  echo "<br>";

  echo "The value of (1==1) is:";
  echo var_dump(1==1);
  echo "<br>";

  echo "The value of (3!=4) is:";
  echo var_dump(3!=4);
  echo "<br>";

  echo "The value of (1>=4) is:";
  echo var_dump(1>=4);
  echo "<br>";

  echo "The value of (1<=4) is:";
  echo var_dump(1<=4);
  echo "<br>";

// Logical Operator and(&&), or(||), xor, !
echo "<br> <br> Logical  Operator<br> <br>:-";


?>

