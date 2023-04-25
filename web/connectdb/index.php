<?php
include("database.php");
    
     $id = 26;
     $name = 'akshay';
     $email = 'akshay@gmail.com';


   $sql = "INSERT INTO studentdb (s_id, s_name, s_email)
           VALUES ('$id', '$name', '$email')";
        

     try{
        mysqli_query($conn, $sql);
        echo "One Recored added";
         
     }  catch(mysqli_sql_exception){
        echo "No record added";
     } 
      mysqli_close($conn);  

      
?>
