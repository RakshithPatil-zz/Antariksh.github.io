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
<script>

  $(document).ready(function() {
    $('#basic_table').DataTable( {
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
    } );
} );
    </script>
    <script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("basic_table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
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
                                <h1>Select any satellite to view its details.</h1>
                                <div class="row">
                                    <div class="col-sm-1">
                                    </div>
                                    <div class="col-sm-5">
                                    <?php
                                        include 'config.php';

                                        if(!empty($_GET['status'])){
                                         switch($_GET['status']){
                                           case 'succ':
                                           $statusMsgClass = 'alert-success';
                                            $statusMsg = 'Members data has been inserted successfully.';
                                             break;
                                            case 'err':
                                             $statusMsgClass = 'alert-danger';
                                             $statusMsg = 'Some problem occurred, please try again.';
                                             break;
                                             case 'invalid_file':
                                             $statusMsgClass = 'alert-danger';
                                      $statusMsg = 'Please upload a valid CSV file.';
                                         break;
                                         default:
                                       $statusMsgClass = '';
                                       $statusMsg = '';
                                         }
                                             }
                             ?>
<form action="insert.php" method="post">
  <div class="form-group">
    <label for="id">id:</label>
    <input type="number" class="form-control" name="id" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="sname">sname:</label>
    <input type="text" class="form-control" name="sname" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="year">year:</label>
    <input type="number" class="form-control" name="year" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="weight">weight:</label>
    <input type="number" class="form-control" name="wei" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="purpose">purpose:</label>
    <input type="text" class="form-control" name="pur" autocomplete="off">
  </div>
  <div align="center">
  <button type="submit" class="btn btn-primary" >Submit</button>
</div>
</form> 
</div><br>
<br>
</div>
<div class="row">
<div class="col-sm-11" style="border: 2px solid grey;
    border-radius: 5px;padding: 30px;margin-left: 10px;">
    <?php if(!empty($statusMsg)){
        echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
    } ?><div class="table-responsive"> 
        <h3 style="padding-bottom: 20px;">Satellite Details</h3>
<div class="panel panel-default">
        <div class="panel-heading">
            Members list
            <a href="javascript:void(0);" onclick="$('#importFrm').slideToggle();">Import Members</a>
        </div>
        <div class="panel-body">
            <form action="import.php" method="post" enctype="multipart/form-data" id="importFrm">
                <input type="file" name="file" />
                <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
            </form>
    <table class="table table-striped"  style="padding-top: 10px;" id="basic_table">
    <thead id="example1">
      <tr>
        <th>ID</th>
        <th>SATELLITE NAME</th>
        <th>YEAR</th>
        <th>WEIGHT</th>
        <th>PURPOSE</th>
      </tr>
    </thead>
    <tbody id="example1">
    <?php
    $query = $db->query("SELECT * FROM basic ORDER BY id DESC");
    if($query->fetch(PDO::FETCH_ASSOC)){ 
    while($row = $query->fetch(PDO::FETCH_ASSOC)){ 
    ?>
      <tr>
        <td><a href="" style="color: blue;" class="btn btn-info"><?php print($row['id']); ?></a></td>
        <td><?php print($row['sname']); ?></td>
        <td><?php print($row['year']); ?></td>
        <td><?php print($row['weight']); ?></td>
        <td><?php print($row['purpose']); ?></td>
        <td><a href="update.php?up=<?php echo $row['id'] ?>" class="btn btn-info" role="button">update</a>
        <a href="delete.php?del=<?php echo $row['id'] ?>" class="btn btn-danger" role="button">delete</a></td>
      </tr>
      <?php } }else{ ?>
                    <tr><td colspan="5">No member(s) found.....</td></tr>
                    <?php } ?>
    </tbody>
  </table>
</div>
<button id="generate-excel-basic" class="btn btn-outline-info">Generate Excel</button>

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
