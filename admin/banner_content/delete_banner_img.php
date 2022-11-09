<?php 
    require '../../db.php';



$id = $_GET['id'];

$select = "SELECT * FROM banner_images WHERE id=$id";
$select_res = mysqli_query($db_connection, $select);
$after_assoc = mysqli_fetch_assoc($select_res);

$delete_from = '../../uploads/banner/'.$after_assoc['banner_image'];
unlink($delete_from);

$delete_banner = "DELETE FROM banner_images WHERE id=$id";
mysqli_query($db_connection, $delete_banner);

header('location:banner_image.php');
?>