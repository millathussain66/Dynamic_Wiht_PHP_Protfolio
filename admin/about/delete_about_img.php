<?php 
    require '../../db.php';



$id = $_GET['id'];

$select = "SELECT * FROM about_image WHERE id=$id";
$select_res = mysqli_query($db_connection, $select);
$after_assoc = mysqli_fetch_assoc($select_res);

$delete_from = '../../uploads/about/'.$after_assoc['banner_image'];
unlink($delete_from);

$delete_banner = "DELETE FROM about_image WHERE id=$id";
mysqli_query($db_connection, $delete_banner);

header('location:about_img.php');
?>