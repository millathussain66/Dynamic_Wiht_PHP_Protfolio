<?php 
session_start();
require '../../db.php';


$uploaded_file = $_FILES['logo_image'];

$after_explode = explode('.', $uploaded_file['name']);
$extension = end($after_explode);
$name = $uploaded_file['name'];

$allowed_extension = array('jpg', 'png');
if(in_array($extension, $allowed_extension)){
    if($uploaded_file['size'] <= 100000){
        $insert = "INSERT INTO customer_slider(logo_image)VALUES('$name')";
        mysqli_query($db_connection, $insert);
        $id = mysqli_insert_id($db_connection);
        
        $file_name = $id.'.'.$extension;
        $new_location = '../../uploads/customer_slider/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);

        $update = "UPDATE customer_slider SET logo_image='$file_name' WHERE id=$id";
        mysqli_query($db_connection, $update);
        header('location:slider.php');
    }
    else{
        $_SESSION['error'] = 'Max File Size 1MB';
        header('location:slider.php');
    }
}
else{
    $_SESSION['error'] = 'Invalid Extension';
    header('location:slider.php');
}


?>