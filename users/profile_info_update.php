<?php 
    session_start();
    require '../db.php';

    $name = $_POST['name'];
    $old_password = $_POST['old_password'];
    $password = $_POST['password'];
    $after_hash = password_hash($password, PASSWORD_DEFAULT);
    $id = $_POST['id'];


    if(empty($password)){
        $update = "UPDATE users SET name='$name' WHERE id=$id";
        $update_result = mysqli_query($db_connection, $update);
        header('location:profile.php');
    }

    else{
        $select_pass = "SELECT * FROM users WHERE id=$id";
        $select_pass_res = mysqli_query($db_connection, $select_pass);
        $after_assoc = mysqli_fetch_assoc($select_pass_res);
        if(password_verify($old_password, $after_assoc['password'])){
            $update = "UPDATE users SET name='$name', password='$after_hash' WHERE id=$id";
            $update_result = mysqli_query($db_connection, $update);
            header('location:profile.php');
            }
        else{
            $_SESSION['wrong'] = "Old Password does not match!";
            header('location:profile.php');
        }
    }
?>