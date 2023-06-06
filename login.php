<?php
include("connection.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Email=$_POST["Email"];
    $Password=$_POST["Password"];

    if(!isset($_POST["Email"]) || !isset($_POST["Password"])){
     echo "Email and Password is required";
    }else{

        $qry="SELECT Email, Password from user WHERE Email='$Email'";

        $res=mysqli_query($con, $qry);

        if(mysqli_num_rows($res)>0){

            $data=mysqli_fetch_assoc($res);

            // if(password_verify($Password, $data["Password"])){             
            //     $_SESSION["LoggedInUser"]=$data["Email"];
            //     die();
            // }else{
            //     echo"Invalid Email / Password";
            // }

        }else{
            echo"User not found";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
</head>

<body>
    <form action="login.php" method="post">
        <h1>Login</h1>

        <div>
            <label for="Email">Email:</label>
            <input type="text" name="Email" placeholder="Email" id="Email" required>
        </div>
        <br>
        <div>
            <label for="Password">Password:</label>
            <input type="Password" name="Password" placeholder="Password" id="Password" required>
        </div><br>
        <br>
        
        <br>
        <a href="Quiz.php">Login</a>
    </form>
    
</body>

</html>