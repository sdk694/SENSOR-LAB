<?php

session_start();
if(array_key_exists("email",$_COOKIE)){

    $_SESSION["email"] = $_COOKIE["email"];
    //echo 'Logged In user email is: '.$_COOKIE["email"];
    
}

if(array_key_exists("email",$_SESSION)){

    include ("sqlconnect2.php");

} else{

   header("Location: register.php");

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha484-Gn5484xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E264XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script src="plotly.min.js"></script>

    <script>
        window.onload = function() {
          getmap1()
        }
    </script>

    <title>Dashboard</title>
  </head>
  <body>
   <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg fixed-top" id="navbar1">
                <a href="index.html" class=""><img src="solarsurveiltransparent.png" alt="" height="40px" style="margin-left: 10px;"></a>
                <a class="navbar-brand text-white" href="index.html" style ="font-family:  Montserrat, sans-serif; letter-spacing: 4px;">SOLAR SURVEIL</a>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active text-dark" href="dashboard.php"  aria-expanded="false"><i class="text-dark    fa fa-fw fa-tachometer fa-xl "></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu">
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-light" href="devices.php"  aria-expanded="false"><i class="fa fa-fw fa-microchip fa-xl"></i>Devices <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu">
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-light" href="register.php?logout=1"  aria-expanded="false"><i class="fa fa-fw fa-sign-out fa-xl"></i>Logout<span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu">
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-sm-4" >
                            <div class="card " id="one">
                              <div class="card-body">
                                  <div class="row align-items-center">
                                      <div class="col mr-2">
                                          <div class=" h6 font-weight-bold text-white text-uppercase mb-1">Total Number Of NOdes</div>
                                          <div><span class="h1 mb-0 font-weight-bold text-white align-self-md-end">5</span> </div>
                                      </div>
                                  </div>                      
                              </div>
                            </div>
                        </div>
                        <div class="col-sm-4" >
                            <div class="card " id="two">
                              <div class="card-body">
                                  <div class="row align-items-center">
                                      <div class="col mr-2">
                                          <div class="h6 font-weight-bold text-white text-uppercase mb-1">active Nodes</div>
                                          <div><span class="h1 mb-0 font-weight-bold text-white align-self-md-end">4</span> </div>
                                      </div>
                                  </div> 
                              </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                              <div class="card border-leflat-dark shadow" id="three">
                                <div class="card-body" >
                                  <div class="row align-items-center">
                                      <div class="col mr-2">
                                          <div class="h6 font-weight-bold text-white text-uppercase mb-1">Inactive nodes</div>
                                          <div><span class="h1 mb-0 font-weight-bold text-white align-self-md-end">1</span> </div>
                                      </div>
                                  </div> 
                                </div>
                              </div>
                        </div>
                    </div>

                    <div class="card shadow" style="height: 580px;">
                        <h4 class="card-header text-white" style="background-color: #173f5f;">Locations and details of the Panels</h4>
                        <div class="card-body">
                          <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Location on map</a>
                              <!-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" onclick="getmap2()">Grafana Dashboard</a> -->
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">                                       
                                        <br>
                                        <p class="lead text-center text-dark">Kindly zoom in on the map and click on the marker to find more details.</p>
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="map"></div>
                                                    <script>
                        
                                                        function getmap1() {
                                                        var map = L.map('map').setView([19.7000, 73.1000], 8); 
                            
                                                        L.tileLayer('https://api.maptiler.com/maps/streets/256/{z}/{x}/{y}.png?key=7Ip6PYWSWb3StlNV6AsB', {
                                                            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
                                                        }).addTo(map);
                            
                                                        var marker1 = L.marker([19.1292529, 72.9270092], { title : "Mahavir Majestik"}).addTo(map).bindPopup('<h2> Node: NOD1MU  </h2> <h3>Small Panel DC setup</h3> <p> View the status of the panels on grafana</p><a class="btn btn-success d-flex justify-content-center" href="http://34.121.146.230:3000/d/nU5ErMJMz/final?orgId=1&refresh=10s&kiosk" >Visit Dashboard</a>');
                                                        var marker2 = L.marker([19.0933, 72.8924], { title : "Mini Solar Setup"}).addTo(map).bindPopup('<h2> Node: NOD2MU</h2><h3>Mini Solar Setup</h3><p> View the status of the node on grafana</p><a class="btn btn-success d-flex justify-content-center" href="http://34.121.146.230:3000/d/nU5ErMJMz/final?orgId=1&refresh=10s&kiosk" >Visit Dashboard</a>');
                                                        var marker3 = L.marker([19.90101264, 73.21809223], { title : "State Highway turning to walvanda"}).addTo(map).bindPopup('<h2>Checkpoint </h2><h3>State Highway turning to walvanda</h3>');
                                                        var marker4 = L.marker([19.83774295,73.19422424], { title : "Fanaspada Charging point"}).addTo(map).bindPopup('<h2> Node: NOD1WL</h2><h3>Fanaspada Charging point</h3><p> View the status of the node on grafana</p><a class="btn btn-success d-flex justify-content-center" href="http://34.121.146.230:3000/d/nU5ErMJMz/final?orgId=1&refresh=10s&kiosk" >Visit Dashboard</a>');
                                                        var marker5 = L.marker([19.84856818,73.19083765], { title : "Walvanda Don Bosco ITI"}).addTo(map).bindPopup('<h2> Node: NOD2WL</h2><h3>Walvanda Don Bosco ITI</h3><p> View the status of the node on grafana</p><a class="btn btn-success d-flex justify-content-center" href="http://34.121.146.230:3000/d/nU5ErMJMz/final?orgId=1&refresh=10s&kiosk" >Visit Dashboard</a>');
                                                        var marker6 = L.marker([19.84879223,  73.19108605], { title : "Walvanda Don Bosco ITI Terrace"}).addTo(map).bindPopup('<h2> Node: NOD3WL</h2><h3>Walvanda Don Bosco ITI Terrace</h3><p> View the status of the node on grafana</p><a class="btn btn-success d-flex justify-content-center" href="http://34.121.146.230:3000/d/nU5ErMJMz/final?orgId=1&refresh=10s&kiosk" >Visit Dashboard</a>');
                                                        }
                        
                                                    </script>
                
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <br>
                              <div class="card">
                                <div class="card-body">
        
                                 </div>                        
                            </div>
                          </div>  
                        </div>
                      </div>

                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->

                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row text-center">
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12 text-xl-center">
                             Copyright © 2021 Solar Surveil. All rights reserved. Dashboard by <a href="index.html">Solar Surveil Team</a>.
                        </div>
                        <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>