<?php
    include_once 'includes/connect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Check Sensor Availiblity</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">DBIT Sensor Lab</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="index.php"><span class="fa fa-home"></span> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Checksensor.php"><span class="fa fa-check"></span> Check Sensors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Checkavailablity.php"><span class="fa fa-check"></span> Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="Register.php"><span class="fa fa-id-badge"></span> Register</a>
            </li>
          </ul>
          <span class="navbar-text">
            Project by SAUS Team
          </span>
        </div>
      </nav>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="Checksensor.php">Step 1</a></li>
          <li class="breadcrumb-item"><a href="Checkavailablity.php">Step 2</a></li>
          <li class="breadcrumb-item active" aria-current="page">Step 3</li>
        </ol>
      </nav>
      <div class=" col-12 col-sm-8 mx-auto">   
            <div class=" card card-block">
                <h3 class="card-header bg-primary text-white">Register yourself</h3>
                <div class="card-body">
                    <form action="includes/signup.php" method="POST">
                        <div class="form-group row">
                            <label for="Moodle_ID" class="col-md-2 col-form-label">First Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="Moodle_ID" name="Moodle_ID" placeholder="MoodleID eg: 1174904">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-md-2 col-form-label">First Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-md-2 col-form-label">Last Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="emailid" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                                <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Sensor_ID" class="col-md-2 col-form-label">Sensor_ID</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="Sensor_ID" name="Sensor_ID" placeholder="Sensor_ID eg: 1101 ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-md-2 col-form-label">Gender</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="gender" name="gender" placeholder="Male or Female or other">
                            </div>
                        </div>
                        <div class="form-row">
                            <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="submit" class="btn btn-primary btn-sm ml-1">Submit</button>        
                        </div>
                    </form>
                </div>
            </div>
      </div>  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>