<?php 
require '../db.php';

$id= $_GET['id'];

$update_status2 = "UPDATE educations SET status=1 WHERE id=$id";
mysqli_query($db_connection, $update_status2);

header('location:education.php');

?>