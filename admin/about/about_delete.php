<?php 
    require '../../db.php';



$id = $_GET['id'];

$delete_banner = "DELETE FROM about WHERE id=$id";
mysqli_query($db_connection, $delete_banner);

header('location:about.php');


?>