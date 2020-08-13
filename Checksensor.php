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
    <title>Check Sensor</title>
    <style>
      table {
        border-collapse: collapse;
        width: 100%;
        color: black; 
        font-size: 20px;        
      } 
      th {
        background-color: darkgrey;
        text-align:left;
      }
      tr:nth-child(even) {
        background-color: lightblue;
        text-align:left;
      }
      tr:nth-child(odd) {
        background-color: white ;
        text-align:left;
      }

    </style>
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
              <a class="nav-link active" href="Checksensor.php"><span class="fa fa-check"></span> Check Sensors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Checkavailablity.php"><span class="fa fa-check"></span>Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Register.php"><span class="fa fa-id-badge"></span> Register</a>
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
          <li class="breadcrumb-item active" aria-current="page">Step 1</li>
          
        </ol>
      </nav>
      <?php
          $sql = "SELECT * FROM sensor;";
          $results = mysqli_query($conn,$sql);
          $resultsCheck = mysqli_num_rows($results);
          
          if ($resultsCheck > 0)
          {
            echo " <table>
            <tr>
              <th>Sensor_ID</th> 
              <th>Sensor_name</th>
              <th>Sensor_cost</th> 
            </tr>";
            while($row = mysqli_fetch_assoc($results)) 
            {

              echo "<tr><td>" . $row["Sensor_ID"] . "</td><td>" . $row["Sensor_name"] . "</td><td>" . $row["Sensor_cost"] . "</td><td>";

            } 
          }
      ?>  
      

     <br>
     <hr>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>