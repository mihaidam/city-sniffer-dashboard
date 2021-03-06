<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<?php
require '../settings.php';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Platform for monitoring polution">
  <meta name="author" content="UVT & Nokia">
  <title>City Sniffer</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
  <!-- OpenStreetMaps -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
  <script src="../Leaflet.markercluster-1.4.1/dist/leaflet.markercluster.js" crossorigin=""></script>
  <link rel="stylesheet" href="../Leaflet.markercluster-1.4.1/dist/MarkerCluster.css" />
  <link rel="stylesheet" href="../Leaflet.markercluster-1.4.1/dist/MarkerCluster.Default.css" />
  <script src="../Leaflet.markercluster-1.4.1/dist/leaflet.markercluster-src.js"></script>
  <script src="../Leaflet.heat-gh-pages/dist/leaflet-heat.js"></script>
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="../index.php">
          <img src="../assets/img/brand/city_sniffer.png" class="navbar-brand-img">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <!-- <a class="nav-link active" href="examples/dashboard.html"> -->
              <a class="nav-link" href="../index.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="examples/icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Icons</span>
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="../pages/heatmaps.php">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Heatmap PM2.5</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/heatmaps_co.php">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Heatmap CO</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="../pages/heatmaps_co2.php">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Heatmap CO<sub>2</sub></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/heatmaps_no2.php">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Heatmap NO<sub>2</sub></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/heatmaps_nh3.php">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Heatmap NH<sub>3</sub></span>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="examples/profile.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="examples/tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Tables</span>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="../examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Login</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade</span>
              </a>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <!-- <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">??</span>
            </button>
          </form> -->
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <!-- <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li> -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden"> -->
                <!-- Dropdown header -->
                <!-- <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.
                  </h6>
                </div> -->
                <!-- List group -->
                <!-- <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto"> -->
                        <!-- Avatar -->
                        <!-- <img alt="Image placeholder" src="assets/img/theme/team-1.jpg" class="avatar rounded-circle"> -->
                      <!-- </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">System</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Device added succesfully</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto"> -->
                        <!-- Avatar -->
                        <!-- <img alt="Image placeholder" src="assets/img/theme/team-2.jpg" class="avatar rounded-circle"> -->
                      <!-- </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Removed a device</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto"> -->
                        <!-- Avatar -->
                        <!-- <img alt="Image placeholder" src="assets/img/theme/team-3.jpg" class="avatar rounded-circle"> -->
                      <!-- </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">System</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Device added</p>
                      </div>
                    </div>
                  </a>
                </div> -->
                <!-- View all -->
                <!-- <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li> -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li> -->
          </ul>
          <!-- <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul> -->
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <!-- <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Google maps</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Maps</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Google maps</li>
                </ol>
              </nav>
            </div> -->
            <!-- <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card border-0">
            <div id="mapid" class="map-canvas" data-lat="40.748817" data-lng="-73.985428"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <footer class="footer pt-0">
      <div class="row align-items-right justify-content-lg-between">
        <!-- <div class="col-lg-6">
          <div class="copyright text-center  text-lg-left  text-muted">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item"></li>
            </ul>
          </div>
        </div> -->
        <div class="col-lg-1">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <!-- <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li> -->
            <li class="nav-item">
              <a href="https://github.com/mihaidam/city-sniffer-dashboard/blob/main/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>

  <script type="text/javascript">
    var mymap = L.map('mapid').setView([45.7478513, 21.2319454], 13);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery ?? <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 18,
      id: 'mapbox/streets-v11',
      tileSize: 512,
      zoomOffset: -1,
      accessToken: 'pk.eyJ1IjoiZGFtaWFuMDAiLCJhIjoiY2todDdlemNhMHJmdzJybGhydXg5aTd3dSJ9.2JIcaaVIJIIDaSNkqSMQzA'
    }).addTo(mymap);

    var myIcon = L.icon({
      iconUrl: './media/info.png',
      iconSize: [38, 38],
      //iconAnchor: [22, 94],
      //popupAnchor: [-3, -76],
    });

    // lat = [45.74736490675511]
    // lng = [21.23167193964277],
    //   desc = ['UVT - marker test']

    // var cont = 0;
    // var markers = L.markerClusterGroup();
    // while (cont < lat.length) {
    //   // if (tip[cont] != 'w') {
    //   //   var marker = L.marker([lat[cont], lng[cont]], { icon: myIcon });
    //   // }
    //   // else {
    //   var marker = L.marker([lat[cont], lng[cont]]);
    //   // }

    //   marker.bindPopup(String(desc[cont]));

    //   markers.addLayer(marker);

    //   // var popup = L.popup()
    //   // .setLatLng([lat[cont], lng[cont]])
    //   // .setContent("test")
    //   // .openOn(mymap);

    //   cont++;
    // }

    // mymap.addLayer(markers);

    sen_val = [];
    lat = [];
    lng = [];

    <?php
    $sql = "SELECT data_senzor_1, lat, lng, time FROM sensors WHERE label_data_senzor_1 = 'co2' AND time >= DATE_SUB(NOW(), INTERVAL 12 HOUR)"; // WHERE authors='".$_SESSION['email']."' ";
    if ($mysqli->query($sql)) {
      $names = $mysqli->query($sql);
      if ($names->num_rows > 0) {

        while ($city = $names->fetch_assoc()) {
          echo "lat.push(" . $city["lat"] . ");";
          echo "lng.push(" . $city["lng"] . ");";
          echo "sen_val.push(" . $city["data_senzor_1"] . ");";
        }
      }
    }
    ?>

    var heat_points = [];

    for (i = 0; i < sen_val.length; i++) {
      aux = [];
      aux.push(lat[i]);
      aux.push(lng[i]);
      aux.push(sen_val[i]);

      heat_points.push(aux);
    }

    // var heat = L.heatLayer([
    //   [45.7478513, 21.2319454, 0.5],
    //   [46, 22, 50] // lat, lng, intensity
    // ], {
    //   radius: 25
    // }).addTo(mymap);

    console.log(heat_points);

    var heat = L.heatLayer(heat_points, {
      radius: 10
    }).addTo(mymap);
  </script>

</body>

</html>