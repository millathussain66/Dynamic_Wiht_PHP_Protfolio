<?php 
    require '../../db.php';


$id= $_GET['id'];

$update_status = "UPDATE banner_contents SET status=0";
mysqli_query($db_connection, $update_status);

$update_status2 = "UPDATE banner_contents SET status=1 WHERE id=$id";
mysqli_query($db_connection, $update_status2);

header('location:banner.php');

?>