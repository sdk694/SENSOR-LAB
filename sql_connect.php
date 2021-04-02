<?php
 
$dbServername = "localhost";
$dbUsername = "lora-rms";
$dbPassword = "rms-lora";
$dbName = "solarnexus";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if(mysqli_connect_error()){
      die("Not connected to MySQL Database. Error! :("."<br>");
    }

?>