<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
    <label>UserName:</label><br>
    <input type="text" name ="username"> <br>
    <label>Password:</label><br>
    <input type="password" name ="password"> <br>
    <input type="submit" value="Log In" >
    </form>
    
   
</body>
</html>
<?php
//  $_GET, $_POST =  is a special variable used to collect data from an HTML  from data is sent to the 
//                   file in the action attribute of <form>
//             Eg: <form action="fileName.php" method = "get">

// Getting data from html file:
   echo "Successfully LogedIn Here Your UserName And Password <br>";
 //  echo  "  UserName is: {$_GET["username"]} <br>";
// echo  "  Password is: {$_GET["password"]} <br>";//http://localhost/web/login.php?username=Da&password=123

       // $_GET -> Data is appended to the url
       //          Not Secure
       //          char limit
       //          BookMark is possible
       //          Get request can be cached
       //          Better for a search page

    echo  "  UserName is: {$_POST["username"]} <br>";
    echo  "  Password is: {$_POST["password"]} <br>";//http://localhost/web/login.php

       // $_POST -> Data is packed inside the body of the HTTP request
       //          More Secure
       //          No Data limit
       //          Can not BookMark
       //          request are not  cached
       //          Better for submitting credentiles
       

    
?>