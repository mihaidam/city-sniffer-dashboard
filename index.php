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
require 'settings.php';
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
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
  <!-- OpenStreetMaps -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
  <script src="./Leaflet.markercluster-1.4.1/dist/leaflet.markercluster.js" crossorigin=""></script>
  <link rel="stylesheet" href="./Leaflet.markercluster-1.4.1/dist/MarkerCluster.css" />
  <link rel="stylesheet" href="./Leaflet.markercluster-1.4.1/dist/MarkerCluster.Default.css" />
  <script src="./Leaflet.markercluster-1.4.1/dist/leaflet.markercluster-src.js"></script>
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="./index.html">
          <img src="assets/img/brand/city_sniffer.png" class="navbar-brand-img">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <!-- <a class="nav-link active" href="examples/dashboard.html"> -->
              <a class="nav-link active" href="index.html">
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
              <a class="nav-link" href="pages/heatmaps.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Heatmaps</span>
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
            <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Login</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade</span>
              </a>
            </li> -->
          </ul>
          <!-- Divider
          <hr class="my-3">
          <!-- Heading -->
          <!-- <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Documentation</span>
          </h6> -->
          <!-- Navigation -->
          <!-- <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Getting started</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Foundation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">Components</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                <i class="ni ni-chart-pie-35"></i>
                <span class="nav-link-text">Plugins</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active active-pro" href="examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade to PRO</span>
              </a>
            </li> 
          </ul> -->
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
              <span aria-hidden="true">×</span>
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
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.
                  </h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <!-- <img alt="Image placeholder" src="assets/img/theme/team-1.jpg" class="avatar rounded-circle"> -->
                      </div>
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
                      <div class="col-auto">
                        <!-- Avatar -->
                        <!-- <img alt="Image placeholder" src="assets/img/theme/team-2.jpg" class="avatar rounded-circle"> -->
                      </div>
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
                      <div class="col-auto">
                        <!-- Avatar -->
                        <!-- <img alt="Image placeholder" src="assets/img/theme/team-3.jpg" class="avatar rounded-circle"> -->
                      </div>
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
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
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
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
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
          </ul>
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
              <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
            </div> -->
            <!-- <div class="col-lg-12 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div> -->
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total polution</h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">NO<sub>2</sub></h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">PM2.5</h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">CO</h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->

    <!-- <div class="col">
          <div class="card border-0">
            <div id="mapid" class="map-canvas" data-lat="40.748817" data-lng="-73.985428"></div>
          </div>
        </div> -->


    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-8">
          <div class="card bg-default">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <!-- <div class="col">
                  <h6 class="text-light text-uppercase ls-1 mb-1">Overview</h6>
                  <h5 class="h3 text-white mb-0">Sales value</h5>
                </div> -->
                <div class="col">
                  <div class="card border-0">
                    <div id="mapid" class="map-canvas" data-lat="40.748817" data-lng="-73.985428"></div>
                  </div>

                  <!-- <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="$" data-suffix="k">
                      <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                        <span class="d-none d-md-block">Month</span>
                        <span class="d-md-none">M</span>
                      </a>
                    </li>
                  </ul> -->
                  <ul class="nav nav-pills justify-content-end">
                  </ul>
                  <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item mr-2 mr-md-0">
                      <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab" id="filter_today">
                        <span class="d-none d-md-block">Today</span>
                        <span class="d-md-none">T</span>
                      </a>
                    </li>
                    <li class="nav-item mr-2 mr-md-0">
                      <a href="#" class="nav-link py-2 px-3" data-toggle="tab" id="filter_week">
                        <span class="d-none d-md-block">Past week</span>
                        <span class="d-md-none">W</span>
                      </a>
                    </li>
                    <li class="nav-item mr-2 mr-md-0">
                      <a href="#" class="nav-link py-2 px-3" data-toggle="tab" id="filter_month">
                        <span class="d-none d-md-block">Past month</span>
                        <span class="d-md-none">M</span>
                      </a>
                    </li>
                    <li class="nav-item mr-2 mr-md-0">
                      <a href="#" class="nav-link py-2 px-3" data-toggle="tab" id="filter_all">
                        <span class="d-none d-md-block">All time</span>
                        <span class="d-md-none">A</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- <div class="card-body"> -->
            <!-- Chart -->
            <!-- <div class="chart"> -->
            <!-- Chart wrapper -->
            <!-- <canvas id="chart-sales-dark" class="chart-canvas"></canvas> -->
            <!-- </div> -->
            <!-- </div> -->
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Polution</h6>
                  <h5 class="h3 mb-0">Monthly evolution</h5>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
                <!-- <canvas id="chart-bars" class="chart-canvas"></canvas> -->
                <canvas id="myChart"></canvas>
              </div>
              <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item mr-2 mr-md-0">
                      <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                        <span class="d-none d-md-block">PM2.5</span>
                        <span class="d-md-none">PM</span>
                      </a>
                    </li>
                    <li class="nav-item mr-2 mr-md-0">
                      <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                        <span class="d-none d-md-block">CO<sub>2</sub></span>
                        <span class="d-md-none">CO<sub>2</sub></span>
                      </a>
                    </li>
                    <li class="nav-item mr-2 mr-md-0">
                      <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                        <span class="d-none d-md-block">Temperature</span>
                        <span class="d-md-none">T</span>
                      </a>
                    </li>
                  </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Detailed polution</h3>
                </div>
                <!-- <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div> -->
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Pollutant</th>
                    <th scope="col">356 day total</th>
                    <th scope="col">Today</th>
                    <th scope="col">Change since yesterday</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      NO<sub>2</sub>
                    </th>
                    <td>
                      4,569
                    </td>
                    <td>
                      340
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      PM2.5
                    </th>
                    <td>
                      3,985
                    </td>
                    <td>
                      319
                    </td>
                    <td>
                      <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      CO
                    </th>
                    <td>
                      3,513
                    </td>
                    <td>
                      294
                    </td>
                    <td>
                      <i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">

          </div>
          <!-- Footer -->
          <footer class="footer pt-0">
            <div class="row  ">
              <!-- <div class="col-lg-6">
                <div class="copyright text-center  text-lg-left  text-muted">
                  <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item"></li>
                  </ul>
                </div>
              </div> -->
              <div class="col-lg-12">
                <ul class="nav nav-footer">
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
      </div>
      <!-- Argon Scripts -->
      <!-- Core -->
      <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
      <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/js-cookie/js.cookie.js"></script>
      <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
      <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
      <!-- Optional JS -->
      <!-- <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
      <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script> -->
      <!-- Argon JS -->
      <script src="assets/js/argon.js?v=1.2.0"></script>
      <!-- Chart JS -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

      <script type="text/javascript">
        var mymap = L.map('mapid').setView([45.7478513, 21.2319454], 13);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
          attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
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

        lat = [];
        lng = [];
        descriere = [];

        <?php
        $sql = "SELECT lat FROM sensors WHERE EXTRACT(DAY FROM time) = EXTRACT(DAY FROM CURRENT_TIMESTAMP) AND EXTRACT(MONTH FROM time) = EXTRACT(MONTH FROM CURRENT_TIMESTAMP) AND EXTRACT(YEAR FROM time) = EXTRACT(YEAR FROM CURRENT_TIMESTAMP)"; // WHERE authors='".$_SESSION['email']."' ";
        if ($mysqli->query($sql)) {
          $names = $mysqli->query($sql);
          if ($names->num_rows > 0) {

            while ($city = $names->fetch_assoc()) {
              echo "lat.push(" . $city["lat"] . ");";
            }
          }
        }
        ?>

        <?php
        $sql = "SELECT lng FROM sensors WHERE EXTRACT(DAY FROM time) = EXTRACT(DAY FROM CURRENT_TIMESTAMP) AND EXTRACT(MONTH FROM time) = EXTRACT(MONTH FROM CURRENT_TIMESTAMP) AND EXTRACT(YEAR FROM time) = EXTRACT(YEAR FROM CURRENT_TIMESTAMP)"; // WHERE authors='".$_SESSION['email']."' ";
        if ($mysqli->query($sql)) {
          $names = $mysqli->query($sql);
          if ($names->num_rows > 0) {

            while ($city = $names->fetch_assoc()) {
              echo "lng.push(" . $city["lng"] . ");";
            }
          }
        }
        ?>

        <?php
        $sql = "SELECT label_data_senzor_1, data_senzor_1 FROM sensors WHERE EXTRACT(DAY FROM time) = EXTRACT(DAY FROM CURRENT_TIMESTAMP) AND EXTRACT(MONTH FROM time) = EXTRACT(MONTH FROM CURRENT_TIMESTAMP) AND EXTRACT(YEAR FROM time) = EXTRACT(YEAR FROM CURRENT_TIMESTAMP)"; // WHERE authors='".$_SESSION['email']."' ";
        if ($mysqli->query($sql)) {
          $names = $mysqli->query($sql);
          if ($names->num_rows > 0) {

            while ($city = $names->fetch_assoc()) {
              echo "descriere.push('" . $city["data_senzor_1"] . " ' +' " . $city["label_data_senzor_1"] . "');";
            }
          }
        }
        ?>

        var cont = 0;
        var markers = L.markerClusterGroup();
        while (cont < lat.length) {
          // if (tip[cont] != 'w') {
          //   var marker = L.marker([lat[cont], lng[cont]], { icon: myIcon });
          // }
          // else {
          var marker = L.marker([lat[cont], lng[cont]]);
          // }

          marker.bindPopup(String(descriere[cont]));

          markers.addLayer(marker);

          // var popup = L.popup()
          // .setLatLng([lat[cont], lng[cont]])
          // .setContent("test")
          // .openOn(mymap);

          cont++;
        }

        mymap.addLayer(markers);



        var filter_today_event = document.getElementById('filter_today');

        filter_today_event.onclick = function() {
          mymap.eachLayer(function(layer) {
            mymap.removeLayer(layer)
          });

          //var mymap = L.map('mapid').setView([45.7478513, 21.2319454], 13);
          L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
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

          lat = [];
          lng = [];
          descriere = [];

          <?php
          $sql = "SELECT lat FROM sensors WHERE EXTRACT(DAY FROM time) = EXTRACT(DAY FROM CURRENT_TIMESTAMP) AND EXTRACT(MONTH FROM time) = EXTRACT(MONTH FROM CURRENT_TIMESTAMP) AND EXTRACT(YEAR FROM time) = EXTRACT(YEAR FROM CURRENT_TIMESTAMP)"; // WHERE authors='".$_SESSION['email']."' ";
          if ($mysqli->query($sql)) {
            $names = $mysqli->query($sql);
            if ($names->num_rows > 0) {

              while ($city = $names->fetch_assoc()) {
                echo "lat.push(" . $city["lat"] . ");";
              }
            }
          }
          ?>

          <?php
          $sql = "SELECT lng FROM sensors WHERE EXTRACT(DAY FROM time) = EXTRACT(DAY FROM CURRENT_TIMESTAMP) AND EXTRACT(MONTH FROM time) = EXTRACT(MONTH FROM CURRENT_TIMESTAMP) AND EXTRACT(YEAR FROM time) = EXTRACT(YEAR FROM CURRENT_TIMESTAMP)"; // WHERE authors='".$_SESSION['email']."' ";
          if ($mysqli->query($sql)) {
            $names = $mysqli->query($sql);
            if ($names->num_rows > 0) {

              while ($city = $names->fetch_assoc()) {
                echo "lng.push(" . $city["lng"] . ");";
              }
            }
          }
          ?>

          <?php
          $sql = "SELECT data_senzor_1, label_data_senzor_1 FROM sensors WHERE EXTRACT(DAY FROM time) = EXTRACT(DAY FROM CURRENT_TIMESTAMP) AND EXTRACT(MONTH FROM time) = EXTRACT(MONTH FROM CURRENT_TIMESTAMP) AND EXTRACT(YEAR FROM time) = EXTRACT(YEAR FROM CURRENT_TIMESTAMP)"; // WHERE authors='".$_SESSION['email']."' ";
          if ($mysqli->query($sql)) {
            $names = $mysqli->query($sql);
            if ($names->num_rows > 0) {

              while ($city = $names->fetch_assoc()) {
                echo "descriere.push('" . $city["data_senzor_1"] . " ' +' " . $city["label_data_senzor_1"] . "');";
              }
            }
          }
          ?>

          var cont = 0;

          var markers = null;
          markers = L.markerClusterGroup();
          while (cont < lat.length) {
            // if (tip[cont] != 'w') {
            //   var marker = L.marker([lat[cont], lng[cont]], { icon: myIcon });
            // }
            // else {
            var marker = L.marker([lat[cont], lng[cont]]);
            // }

            marker.bindPopup(String(descriere[cont]));

            markers.addLayer(marker);

            // var popup = L.popup()
            // .setLatLng([lat[cont], lng[cont]])
            // .setContent("test")
            // .openOn(mymap);

            cont++;
          }

          mymap.addLayer(markers);

          return false;
        }

        var filter_week_event = document.getElementById('filter_week');

        filter_week_event.onclick = function() {
          mymap.eachLayer(function(layer) {
            mymap.removeLayer(layer)
          });

          //var mymap = L.map('mapid').setView([45.7478513, 21.2319454], 13);
          L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
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

          lat = [];
          lng = [];
          descriere = [];

          <?php
          $sql = "SELECT lat FROM sensors WHERE time >= CURRENT_TIMESTAMP - INTERVAL DAYOFWEEK(CURRENT_TIMESTAMP)+3 DAY"; // WHERE authors='".$_SESSION['email']."' ";
          if ($mysqli->query($sql)) {
            $names = $mysqli->query($sql);
            if ($names->num_rows > 0) {

              while ($city = $names->fetch_assoc()) {
                echo "lat.push(" . $city["lat"] . ");";
              }
            }
          }
          ?>

          <?php
          $sql = "SELECT lng FROM sensors WHERE time >= CURRENT_TIMESTAMP - INTERVAL DAYOFWEEK(CURRENT_TIMESTAMP)+3 DAY"; // WHERE authors='".$_SESSION['email']."' ";
          if ($mysqli->query($sql)) {
            $names = $mysqli->query($sql);
            if ($names->num_rows > 0) {

              while ($city = $names->fetch_assoc()) {
                echo "lng.push(" . $city["lng"] . ");";
              }
            }
          }
          ?>

          <?php
          $sql = "SELECT data_senzor_1, label_data_senzor_1 FROM sensors WHERE time >= CURRENT_TIMESTAMP - INTERVAL DAYOFWEEK(CURRENT_TIMESTAMP)+3 DAY"; // WHERE authors='".$_SESSION['email']."' ";
          if ($mysqli->query($sql)) {
            $names = $mysqli->query($sql);
            if ($names->num_rows > 0) {

              while ($city = $names->fetch_assoc()) {
                echo "descriere.push('" . $city["data_senzor_1"] . " ' +' " . $city["label_data_senzor_1"] . "');";
              }
            }
          }
          ?>

          var cont = 0;

          var markers = null;
          markers = L.markerClusterGroup();
          while (cont < lat.length) {
            // if (tip[cont] != 'w') {
            //   var marker = L.marker([lat[cont], lng[cont]], { icon: myIcon });
            // }
            // else {
            var marker = L.marker([lat[cont], lng[cont]]);
            // }

            marker.bindPopup(String(descriere[cont]));

            markers.addLayer(marker);

            // var popup = L.popup()
            // .setLatLng([lat[cont], lng[cont]])
            // .setContent("test")
            // .openOn(mymap);

            cont++;
          }

          mymap.addLayer(markers);

          return false;
        }

        var filter_month_event = document.getElementById('filter_month');

        filter_month_event.onclick = function() {
          mymap.eachLayer(function(layer) {
            mymap.removeLayer(layer)
          });

          //var mymap = L.map('mapid').setView([45.7478513, 21.2319454], 13);
          L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
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

          lat = [];
          lng = [];
          descriere = [];

          <?php
          $sql = "SELECT lat FROM sensors WHERE time >= CURRENT_TIMESTAMP - INTERVAL DAYOFWEEK(CURRENT_TIMESTAMP)+1 MONTH"; // WHERE authors='".$_SESSION['email']."' ";
          if ($mysqli->query($sql)) {
            $names = $mysqli->query($sql);
            if ($names->num_rows > 0) {

              while ($city = $names->fetch_assoc()) {
                echo "lat.push(" . $city["lat"] . ");";
              }
            }
          }
          ?>

          <?php
          $sql = "SELECT lng FROM sensors WHERE time >= CURRENT_TIMESTAMP - INTERVAL DAYOFWEEK(CURRENT_TIMESTAMP)+1 MONTH"; // WHERE authors='".$_SESSION['email']."' ";
          if ($mysqli->query($sql)) {
            $names = $mysqli->query($sql);
            if ($names->num_rows > 0) {

              while ($city = $names->fetch_assoc()) {
                echo "lng.push(" . $city["lng"] . ");";
              }
            }
          }
          ?>

          <?php
          $sql = "SELECT data_senzor_1, label_data_senzor_1 FROM sensors WHERE time >= CURRENT_TIMESTAMP - INTERVAL DAYOFWEEK(CURRENT_TIMESTAMP)+1 MONTH"; // WHERE authors='".$_SESSION['email']."' ";
          if ($mysqli->query($sql)) {
            $names = $mysqli->query($sql);
            if ($names->num_rows > 0) {

              while ($city = $names->fetch_assoc()) {
                echo "descriere.push('" . $city["data_senzor_1"] . " ' +' " . $city["label_data_senzor_1"] . "');";
              }
            }
          }
          ?>

          var cont = 0;

          var markers = null;
          markers = L.markerClusterGroup();
          while (cont < lat.length) {
            // if (tip[cont] != 'w') {
            //   var marker = L.marker([lat[cont], lng[cont]], { icon: myIcon });
            // }
            // else {
            var marker = L.marker([lat[cont], lng[cont]]);
            // }

            marker.bindPopup(String(descriere[cont]));

            markers.addLayer(marker);

            // var popup = L.popup()
            // .setLatLng([lat[cont], lng[cont]])
            // .setContent("test")
            // .openOn(mymap);

            cont++;
          }

          mymap.addLayer(markers);

          return false;
        }

        var filter_all_event = document.getElementById('filter_all');

        filter_all_event.onclick = function() {
          mymap.eachLayer(function(layer) {
            mymap.removeLayer(layer)
          });

          //var mymap = L.map('mapid').setView([45.7478513, 21.2319454], 13);
          L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
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

          lat = [];
          lng = [];
          descriere = [];

          <?php
          $sql = "SELECT lat FROM sensors"; // WHERE authors='".$_SESSION['email']."' ";
          if ($mysqli->query($sql)) {
            $names = $mysqli->query($sql);
            if ($names->num_rows > 0) {

              while ($city = $names->fetch_assoc()) {
                echo "lat.push(" . $city["lat"] . ");";
              }
            }
          }
          ?>

          <?php
          $sql = "SELECT lng FROM sensors"; // WHERE authors='".$_SESSION['email']."' ";
          if ($mysqli->query($sql)) {
            $names = $mysqli->query($sql);
            if ($names->num_rows > 0) {

              while ($city = $names->fetch_assoc()) {
                echo "lng.push(" . $city["lng"] . ");";
              }
            }
          }
          ?>

          <?php
          $sql = "SELECT data_senzor_1, label_data_senzor_1 FROM sensors"; // WHERE authors='".$_SESSION['email']."' ";
          if ($mysqli->query($sql)) {
            $names = $mysqli->query($sql);
            if ($names->num_rows > 0) {

              while ($city = $names->fetch_assoc()) {
                echo "descriere.push('" . $city["data_senzor_1"] . " ' +' " . $city["label_data_senzor_1"] . "');";
              }
            }
          }
          ?>

          var cont = 0;

          var markers = null;
          markers = L.markerClusterGroup();
          while (cont < lat.length) {
            // if (tip[cont] != 'w') {
            //   var marker = L.marker([lat[cont], lng[cont]], { icon: myIcon });
            // }
            // else {
            var marker = L.marker([lat[cont], lng[cont]]);
            // }

            marker.bindPopup(String(descriere[cont]));

            markers.addLayer(marker);

            // var popup = L.popup()
            // .setLatLng([lat[cont], lng[cont]])
            // .setContent("test")
            // .openOn(mymap);

            cont++;
          }

          mymap.addLayer(markers);

          return false;
        }
      </script>

      <script type="text/javascript">
        var ctx = document.getElementById('myChart').getContext('2d');

        var lat = [];
        <?php
        $sql = "SELECT data_senzor_1 FROM sensors"; // WHERE authors='".$_SESSION['email']."' ";
        if ($mysqli->query($sql)) {
          $names = $mysqli->query($sql);
          if ($names->num_rows > 0) {

            while ($city = $names->fetch_assoc()) {
              echo "lat.push(" . $city["data_senzor_1"] . ");";
            }
          }
        }
        ?>

        var label = [];
        var num = 0;
        for (el in lat) {
          label.push(num);
          num += 1;
        }


        var chart = new Chart(ctx, {
          // The type of chart we want to create
          type: 'line',

          // The data for our dataset



          data: {
            labels: label, //['January', 'February'], //, 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
              label: 'My First dataset',
              backgroundColor: 'rgb(255, 99, 132)',
              borderColor: 'rgb(255, 99, 132)',
              // data: [0, 10, 5, 2, 20, 30, 45]
              data: lat
            }]
          },

          // Configuration options go here
          options: {}
        });
      </script>


</body>

</html>