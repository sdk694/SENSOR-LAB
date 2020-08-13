<?php
    include_once 'connect.php';

    $Moodle_ID = $_POST['Moodle_ID'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['emailid'];
    $Sensor_ID = $_POST['Sensor_ID'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO info (Moodle_ID,fname,lname,email,Sensor_ID,gender) VALUES ('$Moodle_ID','$fname','$lname','$email','$Sensor_ID','$gender');";
    $results = mysqli_query($conn,$sql);
    mysqli_query($conn,$sql);  

    header("Location: ../Register.php? signup=success");