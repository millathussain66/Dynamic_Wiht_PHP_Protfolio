<?php 
session_start();
require '../../db.php';


$id = $_GET['id'];

$delete_edu = "DELETE FROM educations WHERE id=$id";
mysqli_query($db_connection, $delete_edu);

$_SESSION['delete'] = "Education Item Deleted";
header('location:education.php');


?>