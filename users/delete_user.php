<?php 
session_start();
require '../db.php';

$id = $_GET['id'];

$delete_image = "SELECT * FROM users WHERE id=$id";
$delete_result = mysqli_query($db_connection, $delete_image);
$after_assoc = mysqli_fetch_assoc($delete_result);

$delete_from = 'uploads/user/'.$after_assoc['image'];
unlink($delete_from);

$delete_user = "DELETE FROM users WHERE id=$id";
mysqli_query($db_connection, $delete_user);

$_SESSION['delete'] = 'User Deleted Successfully';
header('location:users.php');


?>