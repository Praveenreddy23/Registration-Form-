<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckBox</title>
</head>
<body>
    <form action="checkbox.php" method="post">
        <label>Select Team</label><br>
        <input type="checkbox" name="Rcb" value="Virat">RCB<br>
        <input type="checkbox" name="Mi" value="Rohit">MI<br>
        <input type="checkbox" name="Csk" value="Dhoni">CSK<br>
        <input type="checkbox" name="Gt" value="Hardhik">GT<br>
        <input type="checkbox" name="Rr" value="Sanju">RR<br>
        <input type="submit" name="submit">

    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){

        if(isset($_POST["Rcb"])){
            echo "Rcb will win this year throphy!!!";
        }
        if(isset($_POST["Mi"])){
            echo "Mi already won 5 throphy";
        }
        if(isset($_POST["Csk"])){
            echo "Csk Baned for 2 years ";
        }
        if(isset($_POST["Gt"])){
            echo "Gt won last year throphy";
        }
        if(empty($_POST["Rr"])){
            echo "Rr will lose today match";
        }
    }
?>