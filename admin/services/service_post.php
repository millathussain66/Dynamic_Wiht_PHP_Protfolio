<?php 
session_start();
require '../../db.php';


// id	service_logo	service_title	service_dscp	status	

 

$title = $_POST['service_title'];
$desp = $_POST['service_dscp'];

$after_excape = mysqli_real_escape_string($db_connection, $desp);
$id = $_SESSION['id'];

$uploaded_file = $_FILES['service_logo'];
$after_explode = explode('.', $uploaded_file['name']);
$extension = end($after_explode);

$insert = "INSERT INTO service(service_title,service_dscp)VALUES('$title', '$desp')";
mysqli_query($db_connection, $insert);

$last_id = mysqli_insert_id($db_connection);
$file_name = $last_id.'.'.$extension;
$new_location = '../../uploads/service/'.$file_name;
move_uploaded_file($uploaded_file['tmp_name'], $new_location);

$update = "UPDATE service SET service_logo='$file_name' WHERE id=$last_id";
mysqli_query($db_connection, $update);

header('location:service.php');


?>