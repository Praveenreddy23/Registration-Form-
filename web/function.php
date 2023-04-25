<?php
   function teamName($name, $age){
    echo "MI Caption $name  and age is $age <br> ";
    echo "RCB<br>";
    echo "CSK<br>";
    echo "GT<br>";
    echo "RR<br>";
    echo "LSG<br>";
    echo "PBKS<br>";
    echo "KKR<br>";
    echo "SRH<br>";
    echo "DC<br>";
   }

   teamName("Rohit", 40);


   function isEven($number){
          $Result = $number % 2;
          return $Result;
   }
     echo isEven(11);


   function hypotenuse($a, $b){
    $c = sqrt($a ** 2 + $b ** 1);
    return $c;
   }  

    echo hypotenuse(10,20);
   
?>
//String Function

<?php

    $name = "Reddy";

    $name = strtolower($name);
    $name = strtoupper($name);
    $name = trim($name);
    $name = str_pad($name , 20, "0");

    echo $name;

?>
