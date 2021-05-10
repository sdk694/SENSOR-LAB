<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>DBIT Sensor Lab</title>
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
              <a class="nav-link active" href="index.php"><span class="fa fa-home"></span> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="Checksensor.php"><span class="fa fa-check"></span> Check Sensors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Checkavailablity.php"><span class="fa fa-check"></span>Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Register.php"><span class="fa fa-id-badge"></span> Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="finaldetails.php"><span class="fa fa-flask"></span>Lab details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.html"><span class="fa fa-check"></span> About us</a>
            </li>
          </ul>
          <span class="navbar-text">
            Project by SAUS Team
          </span>
        </div>
      </nav>
      <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-9">
                    <h1>DBIT Sensor Lab</h1>
                    <p>This is a web application for sensor allocation management for students of Don Bosco Institute of Technology.
                        This web application is linked with a database of about 300 Sensors that DBIT is planning to buy for the sensor lab.
                        Sensor lab will help students get an idea about all the basic sensors and help them implement their application in their miniprojects.  
                    </p>
                </div>
                <div class="col-12 col-sm-3 allign-self-center">
                    <img src="https://getmyuni.azureedge.net/college-image/small/don-bosco-institute-of-technology-dbit-mumbai.jpg" alt="" class="img-fluid">                    
                </div>    
            </div>
        </div>
    </header>
    
    <div class="image">
      <div class="container">
        <div class="row-header bg-primary text-white">
            <h1 class="col-12">Steps To Follow</h1>
        </div>
        <div class="row">
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body bg-light">
                  <h5 class="card-title bg-dark text-white text-center">Step 1</h5>
                  <p class="card-text">Check all the sensors available in the sensor lab.</p>
                  <a href="Checksensor.php" class="btn btn-success col-12">Go to Step 1  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body bg-light">
                  <h5 class="card-title bg-dark text-white text-center">Step 2</h5>
                  <p class="card-text">Check the Details of the Sensors</p>
                  <a href="Checkavailablity.php" class="btn btn-success col-12">Go to Step 2</a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                  <div class="card-body bg-light">
                    <h5 class="card-title bg-dark text-white text-center">Step 3</h5>
                    <p class="card-text">Register the Sensor under your Name and Moodle ID.</p>
                    <a href="Register.php" class="btn btn-success col-12">Go to Step 3</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body bg-light">
                    <h5 class="card-title bg-dark text-white text-center">Step 4</h5>
                    <p class="card-text">Check the lab details and collect the sensor </p>
                    <a href="finaldetails.php" class="btn   btn-success col-12">Go to Step 4</a>
                  </div>
                </div>
              </div>
          </div>

            <br>
            <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                        <div class="card-header bg-info text-white">
                            <h2 class="col-12">How the sensor lab can help students  </h2>
                       </div>
                        <div class="card-body bg-light">
                            <h3><span class="badge badge-dark">1 </span> Hackathons </h3>
                            <h3><span class="badge badge-dark">2 </span> Mini Projects </h3>
                            <h3><span class="badge badge-dark">3 </span> Workshops </h3>
                            <h3><span class="badge badge-dark">4 </span> Product Developement </h3>
                       </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                        <div class="card-header bg-info text-white">
                            <h2 class="col-12">How this web app will help the Institute</h2>
                       </div>
                        <div class="card-body bg-light">
                            <h3><span class="badge badge-dark">1 </span> One place for all sensor data</h3>
                            <h3><span class="badge badge-dark">2 </span> Inventory management </h3>
                            <h3><span class="badge badge-dark">3 </span> No paper work </h3>
                            <h3><span class="badge badge-dark">4 </span> Proper Sensor Allotement</h3>
                       </div> 
                  </div>
                </div> <br>
            </div>
            <br>    
        </div>  
    </div>
    </div>
   
    <br>
    <footer class="footer m-3">
      <br>
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="./aboutus.html">DBIT</a></li>
                        <li><a href="#">Moodle</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                        Premier Automobiles Road<br>
                        Opp. HDIL Premier Exotica,<br>
                        Kurla, w, Maharashtra 400070<br>
		              <span class="fa fa-phone fa-lg"></span>:  022 2504 2018<br>
		              <span class="fa fa-envelope fa-lg"></span>: <a href="mailto:dbit@dbit.in">dbit@dbit.in</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><span class="fa fa-google-plus fa-lg"></span></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><span class="fa fa-facebook fa-lg"></span></a>
                        <a class="btn btn-social-icon btn-linkdin" href="http://www.linkedin.com/in/"><span class="fa fa-linkedin fa-lg"></span></a>
                        <a class="btn btn-social-icon btn-twitter"href="http://twitter.com/"><span class="fa fa-twitter fa-lg"></span>r</a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><span class="fa fa-youtube fa-lg"></span></a>
                        <a class="btn btn-social-icon" href="mailto:"><span class="fa fa-envelope-o fa-lg"></span></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2020 SAUS TEAM EXTC Dept</p>
                </div>
           </div>
        </div>
    </footer>
    <hr>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Home</li>
      </ol>
    </nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>