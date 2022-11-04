<?php 
require '../db.php';

$id= $_GET['id'];

$update_status = "UPDATE banner_images SET status=0";
mysqli_query($db_connection, $update_status);

$update_status2 = "UPDATE banner_images SET status=1 WHERE id=$id";
mysqli_query($db_connection, $update_status2);

header('location:banner_image.php');

?>