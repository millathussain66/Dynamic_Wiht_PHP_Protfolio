<?php 
    session_start();
    require '../db.php';

    $id = $_POST['id'];

    $uploaded_file = $_FILES['image'];
    $after_explode = explode('.', $uploaded_file['name']);
    $extension = end($after_explode);
    $allowed_extension = array('jpg', 'png', 'gif', 'webp');
    if(in_array($extension, $allowed_extension)){
        if($uploaded_file['size'] <= 100000){

            $select_img = "SELECT * FROM users WHERE id=$id";
            $select_img_res = mysqli_query($db_connection, $select_img);
            $after_assoc = mysqli_fetch_assoc($select_img_res);

            $delete_from = '../uploads/user/'.$after_assoc['image'];
            unlink($delete_from);

            $file_name =  $id.'.'.$extension;
            $new_location = '../uploads/user/'.$file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);

            $update = "UPDATE users SET image='$file_name' WHERE id=$id";
            $update_res = mysqli_query($db_connection, $update);
            header('location:profile.php');
            
        }
        else{
            $_SESSION['error'] = "File Size Too Big! Max File Size 1 Mb";
            header('location:profile.php');
        }
    }
    else{
        $_SESSION['error'] = "Invalid Extension!";
        header('location:profile.php');
    }
?>