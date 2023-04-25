<?php
   $age = 15;

   if($age >= 20){
         echo "You can handle all the problems";
   }
   else if($age == 15){
         echo " You are a begining stage ";
   }
   else{
        echo "Your a child u cant handle the problems";
   }

   $temp = 50;

   if($temp >= 0 && $temp <=30){
        echo "The weather is good";
   }
   elseif($temp >=50 || $temp <=100){
        echo "The weather is bad";
   }

   $cloudy = true;

     if(!$cloudy){
        echo "<br>It is sunny";
     }
     else{
        echo "It is cloudy";
     }


?>