<?php 
    require '../../db.php';



$id = $_GET['id'];

$select = "SELECT * FROM customer_slider WHERE id=$id";
$select_res = mysqli_query($db_connection, $select);
$after_assoc = mysqli_fetch_assoc($select_res);

$delete_from = '../../uploads/customer_slider/'.$after_assoc['logo_image'];
unlink($delete_from);

$delete_logo = "DELETE FROM customer_slider WHERE id=$id";
mysqli_query($db_connection, $delete_logo);

header('location:slider.php');


?>