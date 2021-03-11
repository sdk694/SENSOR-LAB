<?php

    session_start();

    if(array_key_exists("email",$_COOKIE)){

        $_SESSION["email"] = $_COOKIE["email"];
        echo 'Logged In user email is: '.$_COOKIE["email"];
        
    }

    if(array_key_exists("email",$_SESSION)){

        echo "<p>Logged In! <a href ='7BasicSignupLogin1.php?logout=1'>Log out</a></p>";

    } else{

        header("Location: 7BasicSignupLogin1.php");

    }
?>