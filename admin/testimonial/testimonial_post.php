<?php
session_start();
require '../../db.php';

// All Value 

$quotes = $_POST['quotes'];
$name = $_POST['name'];
$introduction = $_POST['introduction'];
$uploaded_file = $_FILES['img'];


$after_explode = explode('.', $uploaded_file['name']);
$extension = end($after_explode);

$allowed_extension = array('jpg','png','gif', 'jpeg');

if(in_array($extension, $allowed_extension)){
    if($uploaded_file['size'] <= 512000){

        $insert = "INSERT INTO testimonial(quotes, name, introduction , img)VALUES('$quotes', '$name', '$introduction',NULL)";
        mysqli_query($db_connection, $insert);
        $user_id = mysqli_insert_id($db_connection);

        $file_name = $user_id.'.'.$extension;
        $new_location = '../../uploads/testimonial/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);

        $update_user = "UPDATE testimonial SET img='$file_name' WHERE id=$user_id";
        mysqli_query($db_connection, $update_user);
    

        header('location:testimonial.php');


    }
    else{
        $_SESSION['extension'] = 'file size too large! maximum 512 KB';
        header('location:register.php');
    }
}
















// echo "<pre>";


// print_r($quotes);
// print_r($name);
// print_r($introduction);


// echo "</pre>";







?>