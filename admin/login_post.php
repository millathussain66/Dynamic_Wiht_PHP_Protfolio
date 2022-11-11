<?php 
session_start();
require '../db.php';


$email = $_POST['email'];
$password = $_POST['password'];

$select = "SELECT COUNT(*) as exist FROM `users` WHERE email='$email'";
$select_result = mysqli_query($db_connection, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

if($after_assoc['exist'] == 1){
    $user_password = "SELECT * FROM users WHERE email='$email'";
    $user_password_res = mysqli_query($db_connection, $user_password);
    $after_assoc_pass = mysqli_fetch_assoc($user_password_res);
    if(password_verify($password, $after_assoc_pass['password'])){
        $_SESSION['login_korche'] = 'Ho Login Kore asche';
        $_SESSION['id'] = $after_assoc_pass['id'];
        header('location:dashboard.php');
    }
    else{
        $_SESSION['invalid_email'] = 'Incorrect Password!';
        header('location:login.php');
    }
}
else{
    $_SESSION['invalid_email'] = 'Email Does Not Exist';
    header('location:login.php');
}



?>