<?php 
    require '../../db.php';



$id = $_GET['id'];

$select = "SELECT * FROM logos WHERE id=$id";
$select_res = mysqli_query($db_connection, $select);
$after_assoc = mysqli_fetch_assoc($select_res);

$delete_from = '../uploads/logo/'.$after_assoc['logo'];
unlink($delete_from);

$delete_logo = "DELETE FROM logos WHERE id=$id";
mysqli_query($db_connection, $delete_logo);

header('location:logo.php');


?>