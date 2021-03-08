<?php
        $link = mysqli_connect("localhost","root","","user"); 

        if(mysqli_connect_error()){
            die("Not connected to MySQL Database. Error! :("."<br>");
        }

?>