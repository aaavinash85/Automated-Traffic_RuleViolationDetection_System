<?php
$username = "root";
$password = "";
$database = "road";
$mysqli = new mysqli("localhost", $username, $password, $database);
 ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="msapplication-tap-highlight" content="no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="./main.css" rel="stylesheet">
    <link href="./style.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <!-- <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div> -->
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Violation
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                Crimes
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">

                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Avinash
                                    </div>

                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-main">
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div><h1><strong><b>Traffic Rule Violation Detection System</b></strong><h1>
                                   <!--  <div class="page-title-subheading">This is an Traffic Rule Violation Dashboard.
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-midnight-bloom">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading"><h4>Total Violations</h4></div>
                                        <div class="widget-subheading">This month </div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>885</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-arielle-smile">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading"><h4>Reported</h4></div>
                                        <div class="widget-subheading">Total Violations Reported</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>568</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-grow-early">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading"><h4>Un-Reported Violations</h4></div>
                                        <div class="widget-subheading">not reported </div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>225</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-premium-dark">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Products Sold</div>
                                        <div class="widget-subheading">Revenue streams</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-warning"><span>$14M</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-7">
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header-tab-animation card-header">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                        Side Views
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="font-icon-wrapper">
                                                <canvas id="chart1"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="font-icon-wrapper">
                                                <canvas id="chart2"></canvas>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="font-icon-wrapper">
                                                <canvas id="chart3"></canvas>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="font-icon-wrapper">
                                                <canvas id="chart4"></canvas>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-5">
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                                        Main View
                                    </div>
                                </div>

                            <!-- <div class="media">
                              <img class="mr-3 img-fluid" src="https://designhaus.us/wp-content/uploads/2014/03/blank.jpg" alt="Generic placeholder image">
                            </div> -->

                             <video width="665" height="500" controls>
                              <source src="report.mp4" type="video/mp4"> 
                             </video> 


                            </div>
                        </div>
                    </div>


                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            
                           
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript" src="./assets/scripts/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>


    <script>
      function chart1(){
        <?php
        $query = "SELECT * FROM `area 1`";
        $c1 = "[";
        $c2 = "[";
        $c3 = "[";

        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
              // echo "Raptor";
               $c1 = $c1.$row['No Helmet'].",";
               $c2 = $c2.$row['Overspeeding'].",";
               $c3 = $c3.$row['Trippling'].",";

            }
          $result->free();
          $c1 = $c1."]\n";
          $c2 = $c2."]\n";
          $c3 = $c3."]\n";

          }
         ?>
        var color = Chart.helpers.color;
        var barChartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'No Helmet',
                backgroundColor: color(window.chartColors.red).alpha(0.99).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: <?php echo $c1;?>
            }, {
                label: 'Overspeeding',
                backgroundColor: color(window.chartColors.blue).alpha(0.99).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: <?php echo $c2;?>
            }, {
                label: 'Trippling',
                backgroundColor: color(window.chartColors.green).alpha(0.9).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: <?php echo $c3;?>
            }]

        };

        var ctx = document.getElementById('chart1').getContext('2d');
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Area One'
                }
            }
        });
      }
      chart1();
    </script>

































    <script>
      function chart2(){
        <?php
        $query = "SELECT * FROM `area 1`";
        $c1 = "[";
        $c2 = "[";
        $c3 = "[";

        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
              // echo "Raptor";
               $c1 = $c1.$row['No Helmet'].",";
               $c2 = $c2.$row['Overspeeding'].",";
               $c3 = $c3.$row['Trippling'].",";

            }
          $result->free();
          $c1 = $c1."]\n";
          $c2 = $c2."]\n";
          $c3 = $c3."]\n";

          }
         ?>
        var color = Chart.helpers.color;
        var barChartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'No Helmet',
                backgroundColor: color(window.chartColors.red).alpha(0.99).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: <?php echo $c1;?>
            }, {
                label: 'Overspeeding',
                backgroundColor: color(window.chartColors.blue).alpha(0.99).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: <?php echo $c2;?>
            }, {
                label: 'Trippling',
                backgroundColor: color(window.chartColors.green).alpha(0.9).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: <?php echo $c3;?>
            }]

        };

        var ctx = document.getElementById('chart2').getContext('2d');
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Area Two'
                }
            }
        });
      }
      chart2();
    </script>









    <script>
      function chart3(){
        <?php
        $query = "SELECT * FROM `area 1`";
        $c1 = "[";
        $c2 = "[";
        $c3 = "[";

        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
              // echo "Raptor";
               $c1 = $c1.$row['No Helmet'].",";
               $c2 = $c2.$row['Overspeeding'].",";
               $c3 = $c3.$row['Trippling'].",";

            }
          $result->free();
          $c1 = $c1."]\n";
          $c2 = $c2."]\n";
          $c3 = $c3."]\n";

          }
         ?>
        var color = Chart.helpers.color;
        var barChartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'No Helmet',
                backgroundColor: color(window.chartColors.red).alpha(0.99).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: <?php echo $c1;?>
            }, {
                label: 'Overspeeding',
                backgroundColor: color(window.chartColors.blue).alpha(0.99).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: <?php echo $c2;?>
            }, {
                label: 'Trippling',
                backgroundColor: color(window.chartColors.green).alpha(0.9).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: <?php echo $c3;?>
            }]

        };

        var ctx = document.getElementById('chart3').getContext('2d');
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Area Three'
                }
            }
        });
      }
      chart3();
    </script>


    <script>
      function chart4(){
        <?php
        $query = "SELECT * FROM `area 1`";
        $c1 = "[";
        $c2 = "[";
        $c3 = "[";

        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
              // echo "Raptor";
               $c1 = $c1.$row['No Helmet'].",";
               $c2 = $c2.$row['Overspeeding'].",";
               $c3 = $c3.$row['Trippling'].",";

            }
          $result->free();
          $c1 = $c1."]\n";
          $c2 = $c2."]\n";
          $c3 = $c3."]\n";

          }
         ?>
        var color = Chart.helpers.color;
        var barChartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'No Helmet',
                backgroundColor: color(window.chartColors.red).alpha(0.99).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: <?php echo $c1;?>
            }, {
                label: 'Overspeeding',
                backgroundColor: color(window.chartColors.blue).alpha(0.99).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: <?php echo $c2;?>
            }, {
                label: 'Trippling',
                backgroundColor: color(window.chartColors.green).alpha(0.9).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: <?php echo $c3;?>
            }]

        };

        var ctx = document.getElementById('chart4').getContext('2d');
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Area Four'
                }
            }
        });
      }
      chart4();
    </script>

</body>

</html>
