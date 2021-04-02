<?php
        $link = mysqli_connect("localhost","lora-rms","rms-lora","solarnexus"); 

        if(mysqli_connect_error()){
            die("Not connected to MySQL Database. Error! :("."<br>");
        }
