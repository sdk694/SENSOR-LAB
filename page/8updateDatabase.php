<?php

    session_start();
   
    
    if(array_key_exists("content",$_POST)){
        include '8SQLconnection.php'; 

        $updateQuery = "UPDATE secretdiary SET diarycontent = '".mysqli_real_escape_string($link,$_POST['content'])."' WHERE email= '".mysqli_real_escape_string($link,$_SESSION["email"])."'";

        echo $updateQuery;

        mysqli_query($link,$updateQuery);
 
    }


?>