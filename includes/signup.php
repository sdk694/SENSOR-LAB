<?php

    include 'connect1.php'

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $pwd   = $_POST['pwd'];
    $email = $_POST['email'];
    $empid = $_POST['empid'];

    $sql = "INSERT INTO userinfo (fname,lname,uname,pwd,email,empid) VALUES ('$fname','$lname','$uname','$pwd','$email','$empid')"

    mysqli_query($conn,$sql)

