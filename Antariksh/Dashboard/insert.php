<?php
include("config.php");
	  $id1 = $_POST['id'];
	  $sname1 = $_POST['sname'];
	  $year1 = $_POST['year'];
	  $weight1 = $_POST['wei'];
	  $purpose1 = $_POST['pur'];
	  $sql = "insert into basic (id,sname,year,weight,purpose) values ($id1,'$sname1',$year1,$weight1,'$purpose1')"; 
	  $result=$db->query($sql);
	  if($db){
	  	header("Location:dashboard.php");
	  }
      $db->close();
?>      