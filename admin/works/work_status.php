<?php 
    require '../../db.php';

$id= $_GET['id'];

$update_status2 = "UPDATE works SET status=1 WHERE id=$id";
mysqli_query($db_connection, $update_status2);

header('location:works.php');

?>