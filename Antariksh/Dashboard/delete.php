<?php

$Id1=$_GET['del'];
include('config.php');


$sql = 'DELETE FROM basic WHERE id = :task_id';
 
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':task_id', $Id1);
 
        if($stmt->execute())
        {
        	header('Location:dashboard.php');
        }

        $db->close();

?>