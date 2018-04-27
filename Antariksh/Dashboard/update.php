<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="blue">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="#" class="simple-text logo-mini">
                    ->
                </a>
                <a href="#" class="simple-text logo-normal">
                    Admin
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <li class="active">
                        <a href="dashboard.html">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="professional.html">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Professional details</p>
                        </a>
                    </li>
                    <li>
                        <a href="map.html">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>Geo Satellite</p>
                        </a>
                    </li>
                    <li>
                        <a href="personal.html">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p>Personal Details</p>
                        </a>
                    </li>
                    <li>
                        <a href="user.html">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="Analysis.html">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Analysis</p>
                        </a>
                    </li>
                    <li>
                        <a href="Satellites.html">
                            <i class="now-ui-icons text_caps-small"></i>
                            <p>Satellites</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo">Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">Logout
                                    <i class="now-ui-icons users_single-02"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="panel-header panel-header-lg">
                <canvas id="bigDashboardChart"></canvas>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-chart">
                            <div class="card-header">
                                 <h2 style="padding-bottom: 10px;">Update Details</h2>
                                <?php
    include('config.php');
    $id1=$_GET['up'];
    $sql="select * from basic where id=$id1";
    $result=$db->query($sql);
    ?>
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-6">
    <form action="edit.php" method="post">
    <?php
    while($row = $result->fetch(PDO::FETCH_BOTH)){
         ?>
<div class="form-group" >
    <label for="id"></label>
    <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="sname">sname:</label>
    <input type="text" class="form-control" name="sname" value="<?php echo $row['sname'] ?>" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="year">year:</label>
    <input type="number" class="form-control" name="year" value="<?php echo $row['year'] ?>" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="weight">weight:</label>
    <input type="number" class="form-control" name="wei" value="<?php echo $row['weight'] ?>" utocomplete="off">
  </div>
  <div class="form-group">
    <label for="purpose">purpose:</label>
    <input type="text" class="form-control" name="pur" value="<?php echo $row['purpose'] ?>" autocomplete="off">
    
  </div>
  <div align="center">
  <button type="submit" class="btn btn-primary">Update</button>
</div>
<?php 
    
    }
    $db = null;
    ?>
</form> 
</div>
</div>
</div>
</div>
</div>
<br>
</div>
<footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul>
                            <li>
                                <a href="#">
                                    ...
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    ...
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    ...
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, Designed by
                        <a href="#" target="_blank">ME</a>. Coded by
                        <a href="#" target="_blank">ME</a>.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/now-ui-dashboard.js?v=1.0.1"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/demo/demo.js"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
    });
</script>

</html>
