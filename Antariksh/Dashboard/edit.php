<?php

$id1=$_POST['id'];
$snm=$_POST['sname'];
$yr=$_POST['year'];
$we=$_POST['wei'];
$pur1=$_POST['pur'];
include('config.php');

 $sql = "UPDATE basic set sname ='$snm',year =$yr,weight =$we,purpose ='$pur1' WHERE id =$id1";
 
        if($db->query($sql)){
        	header('Location:dashboard.php');
        }
 
         $db->close();

?>