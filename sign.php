<?php
include_once 'dbConnection.php';
$username = $_POST['username'];
$username= ucwords(strtolower($username));
$email = $_POST['email'];
$password = $_POST['password'];
$username = stripslashes($username);
$username = addslashes($username);
$username = ucwords(strtolower($username));
$email = stripslashes($email);
$email = addslashes($email);
$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);

$q3=mysqli_query($con,"INSERT INTO user VALUES  ('$username','$email' , '$password')");
if($q3)
{
session_start();
$_SESSION["email"] = $email;
$_SESSION["username"] = $username;
header("location:account.php?q=1");
}
else
{
header("location:index.php?q7=Email Already Registered!!!");
}

?>