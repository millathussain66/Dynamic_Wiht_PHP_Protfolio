<?php 
session_start();
require '../../db.php';

$id = $_GET['id'];

$delete_edu = "DELETE FROM service WHERE id=$id";
mysqli_query($db_connection, $delete_edu);

$_SESSION['delete'] = "Service Item Deleted";
header('location:service.php');


?>