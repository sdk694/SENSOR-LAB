<!-- <?php

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
?> -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha484-Gn5484xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E264XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="devices.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- leaflet javascript maps library -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <!-- Plotly CDN graphs library -->
    <script src="plotly.min.js"></script>

    <script>
        function getforecast1() {
          var key = '27721ab96215a82e4a4d03fe0220858a';
          var city = "Mumbai"

          fetch('https://api.openweathermap.org/data/2.5/forecast?q=' + city + '&appid=' + key + '&units=metric')
          .then(response => response.json())
          .then(data => {
          // console.log(data);
          cardforecast(data)
          }
          )
          fetch('https://api.openweathermap.org/data/2.5/weather?q=' + city + '&appid=' + key + '&units=metric')
          .then(response => response.json())
          .then(data1 => {
          // console.log(data1);
          todayweather(data1);
          }
          )

        }

        window.onload = function() {
          getmap1()
          getforecast1()
        }
    </script>
    
  <title>Devices</title>

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
            <nav class="navbar navbar-expand-lg fixed-top" id="navbar1" style = "min-height: 60px; ">
                <div>
                <a href="index.html" class=""><img src="solarsurveiltransparent.png" alt="" height="40px" style="margin-left: 20px;"></a>
                <a class="navbar-brand   text-white" href="index.html" style="font-family: Montserrat, sans-serif; letter-spacing: 4px; font-weight: 500; font-size: 20px;">SOLAR SURVEIL</a>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-darktext-dark">
                    <a class="d-xl-none d-lg-none" href="#">
                        <img src="dbit.png" id="dbit" alt="" style="height: 50px; width: 50px;">
                        <img src="mttsnt.jpg" id="mtts" alt="" style="height: 50px; width: 60px;">
                        <img src="sight.png" id="sight" alt="" style="height: 50px; width: 110px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link  text-white" href="dashboard.php"  aria-expanded="false"><i class="fa fa-fw fa-tachometer fa-xl "></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu">
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active text-dark" href="devices.php"  aria-expanded="false"><i class=" text-dark fa fa-fw fa-microchip fa-xl"></i>Devices <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu">
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="register.php?logout=1"  aria-expanded="false"><i class="fa fa-fw fa-sign-out fa-xl"></i>Logout<span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu">
                                </div>
                            </li>
                            <li class="nav-item " style="margin-top:40px;">
                                <img class="dbit" src="dbit.png" alt="" style="height: 50px; width: 50px;">
                                <img class="mtts" src="mttsnt.jpg" alt="" style="height: 50px; width: 60px;">
                                <img class="sight" src="sight.png" alt="" style="height: 50px; width: 110px;">
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
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="container " style="height: 110px;">
                                    <div class="dropdown" style="margin: 20px 0;">
                                        <label for="" class="text-dark">Select the Node Name</label>
                                        <button class="btn dropdown-toggle col-12 text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #3caea3;">
                                          Nodename
                                        </button>

                                        <script>
                                          fetch("nodes.json")
                                          .then(response => response.json())
                                          .then(data => {
                                          // console.log(data)

                                          var time = []
                                          var nodename = []

                                          data.series[0].values.forEach(element => {
                                                    time.push(element[0])  
                                                    nodename.push(element[1])
                                          });



                                                  
                                          var down = document.getElementById("div0");


                                          for(var i =0 ; i < nodename.length; i++){
                                            var optn = nodename[i];
                                            var el = document.createElement("a");
                                            el.href = "devices.php?node=" +optn;
                                            el.innerHTML = optn;
                                            el.className = "dropdown-item";
                                            down.appendChild(el);
                                          }




                                          var nodeURL = "devices.php?node="+node1;



                                      })
                                         
                                        </script>

                                        <div class="dropdown-menu col-12" aria-labelledby="dropdownMenuButton" id="div0">
                                          <!-- <a class="dropdown-item" href="devices.html" id="n1" onclick="location.href=this.href+'?node='+node0;return false;"></a>
                                          <a class="dropdown-item" href="{! 'devices.html?node='+ node1 }" id="n2"></a>
                                          <a class="dropdown-item" href="devices.html?node=nod1wl" id="n3"></a>
                                          <a class="dropdown-item" href="devices.html?node=nod2wl">nod2wl</a>
                                          <a class="dropdown-item" href="devices.html?node=nod3wl">nod3wl</a> -->

                                        </div>

                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card" style="height: 110px;">
                                <div class="container-fluid card-body">
                    
                                    <div class=" col-12 col-sm-12 alert border-dark" role="alert" style="background-color: #d4f3f0; padding: 5px;">
                                      <div  style="display: block;">
                                          <div class="text-dark" style="font-size: 15px;">
                                            <strong class="text-uppercase" id="nodename"></strong><span> : Last Reading on</span>
                                          </div>
                                          <div style="font-size: 20px; color: black;">
                                               <span id="lastactive"></span>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card d-flex justify-content-center" >
                                <div class="card-body">
                                    <h4> Readings</h4>
                                    <div class="alert border-dark" role="alert" style="  background-color: #d4f3f0;">
                                        <div style="display: block;">
                                            <div class="text-dark" style="font-size: 15px;">
                                                Energy
                                            </div>
                                            <div style="font-size: 25px; color: black;">
                                                 <span id="energy"></span><span> KWh</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert border-dark" role="alert" style="  background-color: #d4f3f0;">
                                        <div style="display: block;">
                                            <div class="text-dark" style="font-size: 15px;">
                                                Power
                                            </div>
                                            <div style="font-size: 25px; color: black;">
                                              <span id="power"></span><span> W</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert border-dark" role="alert" style="  background-color: #d4f3f0;">
                                        <div style="display: block;">
                                            <div class="text-dark" style="font-size: 15px;">
                                                Voltage
                                            </div>
                                            <div style="font-size: 25px; color: black;">
                                                <span id="voltage"></span><span> V</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert border-dark" role="alert" style="  background-color: #d4f3f0;">
                                        <div style="display: block;">
                                            <div class="text-dark" style="font-size: 15px;">
                                                Current
                                            </div>
                                            <div style="font-size: 25px; color: black;">
                                                <span id="current"></span><span> A</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                          <div class="card" style="height: 486px;">
                            <div class="card-body">
                                <h4 class=" bg-white text-dark"> Location of the node</h4>
                                <div id="map" style="margin-top: 70px;"> </div>
                                    <!-- <script>
        
                                        function getmap1() {
                                        var map = L.map('map').setView([19.1292529, 72.9270092], 12); 
            
                                        L.tileLayer('https://api.maptiler.com/maps/streets/256/{z}/{x}/{y}.png?key=7Ip6PYWSWb3StlNV6AsB', {
                                            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
                                        }).addTo(map);
            
                                        var marker1 = L.marker([19.1292529, 72.9270092], { title : "Mahavir Majestik"}).addTo(map).bindPopup('<h2> Node: NOD1MU  </h2> <h3>Small Panel DC setup</h3> <p> View the status of the panels on grafana</p><a class="btn btn-success d-flex justify-content-center" href="http://34.121.146.230:3000/d/nU5ErMJMz/final?orgId=1&refresh=10s&kiosk" >Visit Dashboard</a>');

                                        }
        
                                    </script> -->
                            </div>
                          </div>
                        </div>
                    </div>
                    <script>
                        // console.log(window.location.href);
                        var url_string = window.location.href;
                        // console.log(url_string);

                        var url = new URL(url_string);
                        var nodename = url.searchParams.get("node");
                        // console.log(nodename);

                        fetch("data.json")
                        .then(response => response.json())
                        .then(data => {
                            // console.log(data)
                            var time = []
                            var energy = []
                            var power = []
                            var voltage = []
                            var current = []


                            var nodedeatils = [];

                            for(var i = 0; i< data.series[0].values.length ; i++){
                              if(data.series[0].values[i][5] == nodename){
                                nodedeatils.push(data.series[0].values[i]);
                              }
                            }

                            // console.log(nodedeatils)
                            nodedeatils.forEach(element => {
                                      time.push(element[0])  
                                      energy.push(element[1])
                                      power.push(element[2])
                                      voltage.push(element[3])
                                      current.push(element[4])
                                    });



                            var energyl  = energy[energy.length -1]
                            var powerl   = power[power.length -1]
                            var voltagel = voltage[voltage.length -1]
                            var currentl = current[current.length -1]
                            var timel = time[time.length -1]      
                            

                            
                            // console.log(energyl)
                            // console.log(powerl)
                            // console.log(voltagel)
                            // console.log(currentl)

                            //ternary operator  condition ? true : false;

                            document.getElementById("energy").innerHTML   = energyl !== undefined ? energyl : "";
                            document.getElementById("power").innerHTML    = powerl  !== undefined ? powerl : "";
                            document.getElementById("voltage").innerHTML  = voltagel  !== undefined ? voltagel : "";
                            document.getElementById("current").innerHTML  = currentl  !== undefined ? currentl : "";
                            document.getElementById("nodename").innerHTML = nodename  !== undefined ? nodename : "";
                            document.getElementById("lastactive").innerHTML = timel  !== undefined ? new Date(timel).toLocaleString() : "";
                            


                        })

                        function getmap1() {
                                        var map = L.map('map').setView([19.5292529, 72.9270092], 8); 
            
                                        L.tileLayer('https://api.maptiler.com/maps/streets/256/{z}/{x}/{y}.png?key=7Ip6PYWSWb3StlNV6AsB', {
                                            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
                                        }).addTo(map);

                                        if (nodename == 'nod1ac'){
                                            var marker1 = L.marker([19.1292529, 72.9270092], { title : "Mahavir Majestik"}).addTo(map).bindPopup('<h2> Node: NOD1MU  </h2> <h3>Small Panel DC setup</h3> <p> View the status of the panels on grafana</p><a class="btn btn-success d-flex justify-content-center" href="http://34.121.146.230:3000/d/NOD1MU/nod1mu?orgId=1&kiosk" >Visit Dashboard</a>');

                                        }
                                        else if(nodename == 'nod2ac'){
                                            var marker2 = L.marker([19.0933, 72.8924], { title : "Mini Solar Setup"}).addTo(map).bindPopup('<h2> Node: NOD2MU</h2><h3>Mini Solar Setup</h3><p> View the status of the node on grafana</p><a class="btn btn-success d-flex justify-content-center" href="http://34.121.146.230:3000/d/NOD2MU/nod2mu?orgId=1&kiosk" >Visit Dashboard</a>');

                                        }
                                        else if(nodename == 'nod3ac'){
                                            var marker2 = L.marker([19.0933, 72.8924], { title : "Mini Solar Setup"}).addTo(map).bindPopup('<h2> Node: NOD2MU</h2><h3>Mini Solar Setup</h3><p> View the status of the node on grafana</p><a class="btn btn-success d-flex justify-content-center" href="http://34.121.146.230:3000/d/NOD2MU/nod2mu?orgId=1&kiosk" >Visit Dashboard</a>');

                                        }
                                        else if(nodename == 'nod1sol'){
                                            var marker3 = L.marker([19.90101264, 73.21009223], { title : "State Highway turning to walvanda"}).addTo(map).bindPopup('<h2>Checkpoint </h2><h3>State Highway turning to walvanda</h3>');

                                        }
                                        else if(nodename == 'nod2sol'){
                                            var marker4 = L.marker([19.83774295,73.19422424], { title : "Fanaspada Charging point"}).addTo(map).bindPopup('<h2> Node: NOD1WL</h2><h3>Fanaspada Charging point</h3><p> View the status of the node on grafana</p><a class="btn btn-success d-flex justify-content-center" href="http://34.121.146.230:3000/d/nU5ErMJMz/nod1wl?orgId=1&refresh=10s&kiosk" >Visit Dashboard</a>');
                                        }
                                        else if(nodename == 'nod3sol'){
                                            var marker6 = L.marker([19.84879223,  73.19108605], { title : "Walvanda Don Bosco ITI Terrace"}).addTo(map).bindPopup('<h2> Node: NOD3WL</h2><h3>Walvanda Don Bosco ITI Terrace</h3><p> View the status of the node on grafana</p><a class="btn btn-success d-flex justify-content-center" href="http://34.121.146.230:3000/d/nU5ErMJMz/nod3wl?orgId=1&refresh=10s&kiosk" >Visit Dashboard</a>');

                                        }

                                        }


                    </script>

                    <div class="row">
                            <div class="col-sm-6">
                                <div class="card text-white" style="background-color: #3caea3;">
                                    <div class="card-body">
                                        <div class="weather-date-location">
                                            <h3 class="text-white">Today's Weather <span style="margin-left: 90px;">Date: </span> <span id="todaydate"></span></h3>
                                        </div>
                                        <div class="weather-data d-flex ">
                                            <div class="mr-auto">
                                                <div style="display: flex">
                                                    <div style="margin-right: 10px;">
                                                        <div style="display: block">
                                                            <div style="font-size: 15px;">
                                                                Temperature
                                                            </div>
                                                            <div  class="display-6">
                                                                 <span id="tempcurr"></span><span class="symbol">°</span>C 
                                                            </div>
                                                        </div>                                                   
                                                    </div>
                                                    <div style="margin-right: 10px; margin-left: 10px;">
                                                        <div style="display: block">
                                                            <div style="font-size: 15px;">
                                                                Humidity
                                                            </div>
                                                            <div  class="display-6" >
                                                                 <span id="humiditycurr"></span><span class="symbol">%</span>
                                                            </div>
                                                        </div>                                                   
                                                    </div>
                                                    <div style="margin-right: 10px; margin-left: 10px;">
                                                        <div style="display: block">
                                                            <div style="font-size: 15px;">
                                                                Windspeed
                                                            </div>
                                                            <div  class="display-6" >
                                                                <span id="windspeedcurr"></span> <span class="symbol" >m/s</span>
                                                            </div>
                                                        </div>                                                   
                                                    </div>


                                                </div>
                                                <p id="maincurr">  </p>
                                            </div>
                                        </div>
                                        <script>
                                            function todayweather(data){
                                                       var main        = data['weather'][0]['main'];
                                                       var temptrature = data['main']['temp'];
                                                       var humidity    = data['main']['humidity'];
                                                       var windspeed   = data['wind']['speed'];

                                                       var today = new Date();
                                                       var dd = String(today.getDate()).padStart(2, '0');
                                                       var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                                                       var yyyy = today.getFullYear();

                                                       today = mm + '/' + dd + '/' + yyyy;
                                                       
                                                        
       
                                                       document.getElementById('maincurr').innerHTML      = main 
                                                       document.getElementById('tempcurr').innerHTML      = temptrature;
                                                       document.getElementById('humiditycurr').innerHTML  = humidity;
                                                       document.getElementById('windspeedcurr').innerHTML = windspeed;
                                                       document.getElementById('todaydate').innerHTML     = today;
       
                                                   }
                                           </script>
                                    </div>
                                    <div class="card-body p-0" style="margin-bottom: 10px; margin-left: 5px;">
                                        <div class="d-flex  weakly-weather">
                                            <div class=" col-sm-4 weakly-weather-item" style="display: block;">
                                                <p class="mb-0"> Tomorrow</p> 
                                                <div style="display: flex;">
                                                    <p style="margin-right: 5px;"><span id="temptrature1"></span><span>°</span></p>
                                                    <p style="margin-right: 5px;"><span id="humidity1"></span><span>%</span></p>
                                                    <p style="margin-right: 5px;"><span id="windspeed1"></span><span>m/s</span></p>  
                                                </div>
                                            </div>
                                            <div class="col-sm-6 weakly-weather-item" style="margin-left: 20px;">
                                                <p class="mb-1"> Day After Tomorrow</p>
                                                <div style="display: flex;">
                                                    <p style="margin-right: 5px;"><span id="temptrature2"></span><span>°</span></p>
                                                    <p style="margin-right: 5px;"><span id="humidity2"></span><span>%</span></p>
                                                    <p style="margin-right: 5px;"><span id="windspeed2"></span><span>m/s</span></p>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>                              
                                        function cardforecast(data) {
                                            var temptrature1 = data['list'][9]['main']['temp'];
                                           var humidity1    =  data['list'][9]['main']['humidity'];
                                           var windspeed1   =  data['list'][9]['wind']['speed'];
                                           var temptrature2 =  data['list'][17]['main']['temp'];
                                           var humidity2    =  data['list'][17]['main']['humidity'];
                                           var windspeed2   =  data['list'][17]['wind']['speed'];
          
                                           document.getElementById('temptrature1').innerHTML = temptrature1;
                                           document.getElementById('humidity1').innerHTML    = humidity1;
                                           document.getElementById('windspeed1').innerHTML   = windspeed1;
                                           document.getElementById('temptrature2').innerHTML = temptrature2;
                                           document.getElementById('humidity2').innerHTML    = humidity2;
                                           document.getElementById('windspeed2').innerHTML   = windspeed2;
                                        }
                                     </script>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card" style="height: 255px;">
                                    <h3 class="card-header  text-white" style="background-color: #3caea3;"> Expected Energy generation today by the panel.</h3>
                                    <div class="card-body" >
                                        <h2 class="text-center" style="margin-top: 20px;"><span id ="ep"></span> <span> Wh</span></h2>
                                    </div>
                                </div>

                                <script>
                                  fetch("predict.json")
                                  .then(response => response.json())
                                  .then(data => {
                                    // console.log(data)
                                    var p = data;
                                    // console.log(p)
                                    document.getElementById('ep').innerHTML = p;
                                  })
                                 
                                </script>
                            </div>
                            <div class="col-sm-3">
                                <div class="card" style="height: 255px;">
                                    <h3 class="card-header text-white" style="background-color: #3caea3;"> Total power generated by the panel.</h3>
                                    <div class="card-body">
                                        <h2 class="text-center" style="margin-top: 20px;" ><span id="p1"></span><span> W</span> </h2>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                          <div class="card ">
                            <div class="card-body ">
                              <h4 class="card-title ">Power Generated</h4>
                              <br>
                              <div class="shadow" id="generated"></div>
                              <script>
                                // console.log(window.location.href);
                                var url_string = window.location.href;
                                // console.log(url_string);
                                var url = new URL(url_string);
                                var nodename = url.searchParams.get("node");
                                // console.log(nodename);

                                fetch("data.json")
                                  .then(response => response.json())
                                  .then(data => {
                                    // console.log(data)
                                    var x = []
                                    var y = []


                                    var nodedeatils = [];

                                      for(var i = 0; i< data.series[0].values.length ; i++){
                                        if(data.series[0].values[i][5] == nodename){
                                          nodedeatils.push(data.series[0].values[i]);
                                        }
                                      }

                                      // console.log(nodedeatils)



                                    // document.querySelector("#debug").innerHTML =  data
                                    // document.getElementById("debug").innerHTML = JSON.stringify(data.series[0].values)
                                    nodedeatils.forEach(element => {
                                      x.push(element[0])
                                      y.push(element[6])
                                    });
                                    
                                    var sum = y.reduce(function(a,b) {
                                      return  (a + b);
                                    },0);
                                    var avg = (sum / y.length) ;
                                    // console.log(sum)
                                    document.getElementById('p1').innerHTML = sum.toFixed(2);
                                    // document.getElementById('p2').innerHTML = avg.toFixed(4);
                                    var trace1 = {
                                      x: x,
                                      y: y,
                                      // mode: 'markers',
                                      type: 'scatter',
                                      name: 'Power'
                                      // line: {
                                      //   color: 'rgb(52, 12, 121)',
                                      //   width: 3
                                      // },
                                      
                                      
                                    };

                                  
                                    var data = [trace1];
          
                                    var layout = { 
                                        title: '',
                                        font: {size: 10},
                                      
                                      };
          
                                    var config = {responsive: true}
          
                                    Plotly.newPlot('generated', data, layout, config);
                                  })
          
                              </script>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-12">
                          <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Power Consumed</h4>
                              <br>
                              <div class="shadow" id="consumed"></div>
                              <script>
                                // console.log(window.location.href);
                                var url_string = window.location.href;
                                // console.log(url_string);
                                var url = new URL(url_string);
                                var nodename = url.searchParams.get("node");
                                // console.log(nodename);

                                fetch("data.json")
                                  .then(response => response.json())
                                  .then(data => {
                                    // console.log(data)
                                    var x = []
                                    var y = []

                                    var nodedeatils = [];

                                      for(var i = 0; i< data.series[0].values.length ; i++){
                                        if(data.series[0].values[i][5] == nodename){
                                          nodedeatils.push(data.series[0].values[i]);
                                        }
                                      }

                                      // console.log(nodedeatils)
                                      nodedeatils.forEach(element => {
                                                x.push(element[0])  
                                                y.push(element[2])
                                              });


                                      // document.querySelector("#debug").innerHTML =  data
                                      // document.getElementById("debug").innerHTML = JSON.stringify(data.series[0].values)
                                    // document.querySelector("#debug").innerHTML =  data
                                    // document.getElementById("debug").innerHTML = JSON.stringify(data.series[0].values)

                                    var sum = y.reduce(function(a,b) {
                                      return  (a + b);
                                    },0);
                                    var avg = (sum / y.length)
                                    // console.log(sum)
                                    // document.getElementById('p3').innerHTML = sum.toFixed(2);
                                    // document.getElementById('p0').innerHTML = avg.toFixed(4)
                                    var trace1 = {
                                      x: x,
                                      y: y,
                                      type: 'scatter'
                                    };
          
          
                                    var data = [trace1];
                                    var layout = { 
                                        title: '',
                                        font: {size: 10}
                                      };
          
                                    var config = {responsive: true}
          
                                    Plotly.newPlot('consumed', data, layout, config);
                                  })
                              </script>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-12">
                          <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Power Generated vs Power Consumed</h4>
                              <br>
                              <div class="shadow" id="pconvspgen"></div>
                              <script>
                                // console.log(window.location.href);
                                var url_string = window.location.href;
                                // console.log(url_string);
                                var url = new URL(url_string);
                                var nodename = url.searchParams.get("node");
                                // console.log(nodename);

                                fetch("data.json")
                                  .then(response => response.json())
                                  .then(data => {
                                    // console.log(data)
                                    var x = []
                                    var y = []
                                    var z = []
                                    // document.querySelector("#debug").innerHTML =  data
                                    // document.getElementById("debug").innerHTML = JSON.stringify(data.series[0].values)


                                    
                                    var nodedeatils = [];

                                      for(var i = 0; i< data.series[0].values.length ; i++){
                                        if(data.series[0].values[i][5] == nodename){
                                          nodedeatils.push(data.series[0].values[i]);
                                        }
                                      }

                                      // console.log(nodedeatils)
                                      nodedeatils.forEach(element => {
                                                x.push(element[0])  
                                                y.push(element[2])
                                                z.push(element[6])
                                              });

                                    // var sum = y.reduce(function(a,b) {
                                    //   return  (a + b);
                                    // },0);
                                    // var avg = (sum / y.length)
                                    // console.log(sum)
                                    // document.getElementById('p3').innerHTML = sum.toFixed(2);
                                    // document.getElementById('p0').innerHTML = avg.toFixed(4)
                                    var trace1 = {
                                      x: x,
                                      y: y,
                                      name : 'Consumed ',
                                      height: 500,
                                      width: 5000,
                                      fill: 'tonexty',
                                      type: 'scatter'
                                    };

                                    var trace2 = {
                                       x: x,
                                       y: z,
                                       name: 'Generated',
                                       autosize : true,
                                       width: 5000,
                                       height: 500,
                                       fill: 'tozeroy',
                                       type :'scatter' 
                                    }
          
          
                                    var data = [trace1, trace2];
                                    var layout = { 
                                        title: '',
                                        font: {size: 10},
                                        barmode: 'group'
                                      };
          
                                    var config = {responsive: true}
          
                                    Plotly.newPlot('pconvspgen', data, layout, config);
                                  })
                              </script>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-12">
                          <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Energy Consumed</h4>
                              <br>
                              <div class="shadow" id="econsumed"></div>
                              <script>
                                // console.log(window.location.href);
                                var url_string = window.location.href;
                                // console.log(url_string);
                                var url = new URL(url_string);
                                var nodename = url.searchParams.get("node");
                                // console.log(nodename);

                                fetch("data.json")
                                  .then(response => response.json())
                                  .then(data => {
                                    // console.log(data)
                                    var x = []
                                    var y = []
                                    // document.querySelector("#debug").innerHTML =  data
                                    // document.getElementById("debug").innerHTML = JSON.stringify(data.series[0].values)
                                    var nodedeatils = [];

                                    for(var i = 0; i< data.series[0].values.length ; i++){
                                      if(data.series[0].values[i][5] == nodename){
                                        nodedeatils.push(data.series[0].values[i]);
                                      }
                                    }

                                    // console.log(nodedeatils)
                                    nodedeatils.forEach(element => {
                                              x.push(element[0])  
                                              y.push(element[1])
                                            });
                                    var sum = y.reduce(function(a,b) {
                                      return  (a + b);
                                    },0);
                                    var avg = (sum / y.length)
                                    // console.log(sum)
                                    // document.getElementById('p3').innerHTML = sum.toFixed(2);
                                    // document.getElementById('p0').innerHTML = avg.toFixed(4)
                                    var trace1 = {
                                      x: x,
                                      y: y,
                                      width: 5000,
                                      type: 'scatter'
                                    };
          
          
                                    var data = [trace1];
                                    var layout = { 
                                        title: '',
                                        font: {size: 10}
                                      };
          
                                    var config = {responsive: true}
          
                                    Plotly.newPlot('econsumed', data, layout, config);
                                  })
                              </script>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                <!-- code to add cards in the devices tab        -->

                <!-- <div class="row">
                <div class="col-sm-3">
                  <div class="card border-left-warning shadow" style="height: 130px;">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total number of panels installed</div>
                                <div class="h2 mb-0 font-weight-bold text-gray-800 align-self-md-end">20</div>
                            </div>
                        </div>                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card border-left-warning shadow" style="height: 130px;">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total number of nodes deployed</div>
                                <div class="h2 mb-0 font-weight-bold text-gray-800 align-self-md-end">30</div>
                            </div>
                        </div> 
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                    <div class="card border-left-warning shadow" style="height: 130px;">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total number of registered users</div>
                                <div class="h2 mb-0 font-weight-bold text-gray-800 align-self-md-end">20</div>
                            </div>
                        </div> 
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                     <div class="card border-left-warning shadow" style="height: 130px;">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total number of appliance powered</div>
                                    <div class="h2 mb-0 font-weight-bold text-gray-800 align-self-md-end">5</div>
                                </div>
                            </div> 
                        </div>
                     </div>
                  </div>
              </div> -->

                      <!-- Insted of plotly i have also used charts.js in this the below commented code is for chart.js             -->


                      <!-- <div class="card">
                          <div class="card-body">
                            <canvas id="myChart"></canvas>
                          </div>
                      </div>
                      

                      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

                      <script>

                        var ctx = document.getElementById("myChart").getContext('2d');

                              console.log(window.location.href);
                                var url_string = window.location.href;
                                console.log(url_string);
                                var url = new URL(url_string);
                                var nodename = url.searchParams.get("node");
                                console.log(nodename);
                                fetch("power_" +nodename +".json")
                                  .then(response => response.json())
                                  .then(data => {
                                    console.log(data)
                                    var x = []
                                    var y = []
                                    // document.querySelector("#debug").innerHTML =  data
                                    // document.getElementById("debug").innerHTML = JSON.stringify(data.series[0].values)
                                    data.series[0].values.forEach(element => {
                                      x.push(element[0])
                                      y.push(element[2])
                                    });
                                    var myChart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: x,
                                datasets: [{
                                    label: 'Series 1', // Name the series
                                    data: y, // Specify the data values array
                                    fill: false,
                                    borderColor: '#2196f3', // Add custom color border (Line)
                                    backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
                                    borderWidth: 1 // Specify bar border width
                                }]},
                            options: {
                              responsive: true, // Instruct chart js to respond nicely.
                              maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
                            }
                        });
                                  })        

                      </script>

                </div> -->

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
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12 text-xl-center ">
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