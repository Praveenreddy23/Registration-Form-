<?php 
$insert = false;
if(isset($_POST["name"])){
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "trip";
    $conn = "";

   try{
    $conn = mysqli_connect($db_server,
                          $db_user, 
                          $db_pass, 
                          $db_name );
   }catch(mysqli_sql_exception){
          echo "Could not Register!!!";
   }
   
    
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $desc = $_POST["desc"];

    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) 
            VALUES ('$name','$age','$gender','$email','$phone','$desc', current_timestamp());";

           // echo $sql;
    if($conn->query($sql) == true){
         //echo "Successfully inserted!!";
        $insert = true;
    }elseif(empty($insert)){
             echo "Please Enter details";
       // echo "ERROR: $sql <br> $conn->error";
    }    
    $conn->close();    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WelCome To Register Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="traveller" >
    <div class="container">
        <h1>Registration Form</h1>
        <p>Enter your datails and submit this form to confirm for Trip</p>
        <?php
          if($insert == true ){
         echo "<p class='submitMsg' > Thanks for submitting your form, We are happy to see you joining us for the trip</p>";
          }
          ?>
     
     
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
              <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
            <textarea name="desc" id="desc" cols="10" rows="7" placeholder="Additional info (optional)"></textarea>
           <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>