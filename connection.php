<?php
$host ="localhost";
$port ="3300";
$username ="root";
$password ="";
$database="quiz_application";

$connection=mysqli_connect($host.":".$port, $username, $password, $database);
if(!$connection){
    echo "NOT Connected" ;
    die();
}
?>
