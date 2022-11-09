<?php 
session_start();
require '../../db.php';


$category = $_POST['category'];
$sub_title = $_POST['sub_title'];
$title = $_POST['title'];
$desp = $_POST['desp'];
$after_excape = mysqli_real_escape_string($db_connection, $desp);
$id = $_SESSION['id'];

$uploaded_file = $_FILES['image'];
$after_explode = explode('.', $uploaded_file['name']);
$extension = end($after_explode);

$insert = "INSERT INTO works(category,sub_title,title, desp, user_id)VALUES('$category', '$sub_title', '$title', '$after_excape',$id)";
mysqli_query($db_connection, $insert);

$last_id = mysqli_insert_id($db_connection);
$file_name = $last_id.'.'.$extension;
$new_location = '../../uploads/works/'.$file_name;
move_uploaded_file($uploaded_file['tmp_name'], $new_location);

$update = "UPDATE works SET image='$file_name' WHERE id=$last_id";
mysqli_query($db_connection, $update);

header('location:work.php');


?>