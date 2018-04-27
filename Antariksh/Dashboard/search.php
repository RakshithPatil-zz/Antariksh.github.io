<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="css/styles.css" rel="stylesheet">
<style>
.search-container {
	margin-right: 120px;
  float: right;
}

input[type=number] {
	 border: 1px solid #ccc;
  padding: 10px;
  margin-top: 8px;
  font-size: 17px;
  }

.search-container button {
  float: right;
  padding: 10px;
  margin-top: 8px;
  margin-right: 17px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  input[type=text],.search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 24px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="padding: 20px; color: white;">
    <div class="navbar-header">
     <h1> RTSCM</h1>
    </div>
   
  </div>
</nav>
<div class="container-fluid">
  <div class="jumbotron">
    <h3>CONFIGURATION</h3> 
  </div>
  <div class="search-container">
    <form action="search.php" method="post">
      <input type="number" placeholder="Search.." name="search" autocomplete="off" />
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
    
<div class="container-fluid" style="background-color: white;">
<?php
$id1=$_POST['search'];
if($id1 == null){
header('Location:index.php');
}else
{
include('config.php');

$sql="SELECT * from basic where id=$id1 ";
$res=$db->query($sql);
?>
  <div class="row" style="margin-top: 10px;padding: 10px;" >
<div class="col-sm-3" style="border: 2px solid grey;
    border-radius: 5px;background-color: cyan;padding: 30px;">
    <h2 style="padding-bottom: 10px;">Enter details</h2>
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
</div>
<div class="col-sm-8" style="border: 2px solid grey;
    border-radius: 5px;padding: 30px;margin-left: 10px;">
	<div class="table-responsive"> 
		<h3>Satellite Details</h3>
	<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>SATELLITE NAME</th>
        <th>YEAR</th>
        <th>WEIGHT</th>
        <th>PURPOSE</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    while($row = $res->fetchArray() )
    {
    ?> 
      <tr>
        <td><?php print($row['id']); ?></td>
        <td><?php print($row['sname']); ?></td>
        <td><?php print($row['year']); ?></td>
        <td><?php print($row['weight']); ?></td>
        <td><?php print($row['purpose']); ?></td>
        <td><a href="update.php?up=<?php echo $row['id'] ?>" class="btn btn-info" role="button">update</a>
        <a href="delete.php?del=<?php echo $row['id'] ?>" class="btn btn-danger" role="button">delete</a></td>
      </tr>
      <?php
  }
}
   $db->close();
  ?>
    </tbody>
  </table>
</div>
</div>
</div>

</div>
 <footer>
        <div class="splitter"></div>
        <ul>
            <li>
                <div class="icon" data-icon="E"></div>
                <div class="text">
                    <h4>About</h4>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique justo eu sollicitudin pretium. Nam scelerisque arcu at dui porttitor, non viverra sapien pretium. Nunc nec dignissim nunc. Sed eget est purus. Sed convallis, metus in dictum feugiat, odio orci rhoncus metus. <a href="#">Read more</a></div>
                </div>
            </li>
            <li>
                <div class="icon" data-icon="a"></div>
                <div class="text">
                    <h4>Archive</h4>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique justo eu sollicitudin pretium. Nam scelerisque arcu at dui porttitor, non viverra sapien pretium. Nunc nec dignissim nunc. Sed eget est purus. Sed convallis, metus in dictum feugiat, odio orci rhoncus metus. <a href="#">Read more</a></div>
                </div>
            </li>
            <li>
                <div class="icon" data-icon="s"></div>
                <div class="text">
                    <h4>Cloud</h4>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique justo eu sollicitudin pretium. Nam scelerisque arcu at dui porttitor, non viverra sapien pretium. Nunc nec dignissim nunc. Sed eget est purus. Sed convallis, metus in dictum feugiat, odio orci rhoncus metus. <a href="#">Read more</a></div>
                </div>
            </li>
        </ul>

        <div class="bar">
            <div class="bar-wrap">
                <ul class="links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">License</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">About</a></li>
                </ul>

                <div class="social">
                    <a href="#" class="fb">
                        <span data-icon="f" class="icon"></span>
                        <span class="info">
                            <span class="follow">Become a fan Facebook</span>
                            <span class="num">9,999</span>
                        </span>
                    </a>

                    <a href="#" class="tw">
                        <span data-icon="T" class="icon"></span>
                        <span class="info">
                            <span class="follow">Follow us Twitter</span>
                            <span class="num">9,999</span>
                        </span>
                    </a>

                    <a href="#" class="rss">
                        <span data-icon="R" class="icon"></span>
                        <span class="info">
                            <span class="follow">Subscribe RSS</span>
                            <span class="num">9,999</span>
                        </span>
                    </a>
                </div>
                <div class="clear"></div>
                <div class="copyright">&copy;  2014 All Rights Reserved</div>
            </div>
        </div>
    </footer>
</body>
</html> 