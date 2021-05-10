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
    <style>
      table {
        border-collapse: collapse;
        width: 90%;
        color: black; 
        font-size: 20px; 
        margin-left: auto;
        margin-right: auto;  
        border: 1px solid black;
        padding: 15px;     
      } 
      th {
        background-color: black;
        text-align:left;
        color: white;
        border: 1px solid black;
        padding: 15px; 
      }
      tr:nth-child(even) {
        background-color: lightblue;
        text-align:left;
        border: 1px solid black; 
        padding: 15px;
      }
      tr:nth-child(odd) {
        background-color: white ;
        text-align:left;
        border: 1px solid black;
        padding: 15px; 
      }
      td{
        border: 1px solid black;
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
              <a class="nav-link " href="Checksensor.php"><span class="fa fa-check"></span> Check Sensors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="Checkavailablity.php"><span class="fa fa-check"></span>Details</a>
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
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="Checksensor.php">Step 1</a></li>
          <li class="breadcrumb-item active" aria-current="page">Step2</li>
        </ol>
      </nav>
      <?php
          $sql = "SELECT * FROM finalview;";
          $results = mysqli_query($conn,$sql);
          $resultsCheck = mysqli_num_rows($results);
          
          if ($resultsCheck > 0)
          {
            echo " <table>
            <tr>
              <th> Sensor_ID </th> 
              <th> Lab_no</th>
              <th> Type</th>
              <th> Application</th>
              <th> Sensor_cost</th> 
            </tr>";
            while($row = mysqli_fetch_assoc($results)) 
            {

              echo "<tr><td>" . $row["Sensor_ID"] . "</td><td>" . $row["Lab_no"] . "</td><td>" . $row["Type"] . "</td><td> " . $row["Application"] . "</td><td>" . $row["Sensor_cost"] . "</td>";

            } 
          }
      ?>        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>