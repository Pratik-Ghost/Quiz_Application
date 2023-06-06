<?php

include("connection.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(!isset($_POST["First_name"]) || !isset($_POST["Last_name"]) || !isset($_POST["Email"]) || !isset($_POST["Password"]) || !isset($_POST["Conform_Password"])){
        echo"All fields must be set";
    }else{
    $First_name=$_POST["First_name"];
    $Last_name=$_POST["Last_name"];
    $Email=$_POST["Email"];
    $Password=$_POST["Password"];
    $Conform_Password=$_POST["Conform_Password"];

    if($Password != $Conform_Password){
        echo "password and c_password doesn't matches";
    }else{
        $hashed_password = password_hash($Password, PASSWORD_BCRYPT);
    }
    $qry="INSERT INTO user (First_name, Last_name, Email, Password)
    VALUES('$First_name','$Last_name','$Email','$hashed_password');";

    $res=mysqli_query($con, $qry);
    if(!$res){
        echo "Failed to register";
        echo mysqli_error($con);
    }

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
    <div>

<form method=post>
    <h1 >registration Form</h1><br>
  <label for="First_name">First name:</label>
  <input type="text" id="First_name" name="First_name" required><br>
<br>
  <label for="Last_name">Last name:</label>
  <input type="text" id="Last_name" name="Last_name" required><br>
  <br>
  <label for="Email">Email:</label>
  <input type="text" id="Email" name="Email" required>
<br>
<br>
  <label for="Password">Password:</label>
  <input type="Password" id="Password" name="Password" required><br>
<br>
  <label for="Conform_Password">C_Password:</label>
  <input type="Password" id="Conform_Password" name="Conform_Password"  required><br>
<br>

<button herf='login.php'>submit</button>
</form>

</body>
</html>