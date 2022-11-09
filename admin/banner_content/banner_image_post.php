<?php 
    require '../../db.php';


$uploaded_file = $_FILES['banner_image'];

$after_explode = explode('.', $uploaded_file['name']);

$name = $uploaded_file['name'];

$extension = end($after_explode);

$allowed_extension = array('jpg', 'png');

if(in_array($extension, $allowed_extension)){

    if($uploaded_file['size'] <= 1000000){
        $insert = "INSERT INTO banner_images(banner_image)VALUES('$name')";
        mysqli_query($db_connection, $insert);
        $id= mysqli_insert_id($db_connection);
        $file_name = $id.'.'.$extension;

        $new_location = '../../uploads/banner/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);

        $update = "UPDATE banner_images SET banner_image='$file_name' WHERE id=$id";
        mysqli_query($db_connection, $update);
        header('location:banner_image.php');
    }
    else{
         header('location:banner_image.php');
    }
}
else{
    header('location:banner_image.php');
}

?>