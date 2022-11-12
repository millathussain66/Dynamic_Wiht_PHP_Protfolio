<?php 
session_start();
require '../../db.php';

$id = $_GET['id'];

// echo $id;

$delete_work = "DELETE FROM works WHERE id=$id";
mysqli_query($db_connection, $delete_work);

$_SESSION['delete'] = "works Item Deleted";

header('location:work.php');


?>