<?php 
session_start();
require '../../db.php';

$id= $_GET['id'];

$select_status = "SELECT * FROM socials WHERE id=$id";
$select_status_res = mysqli_query($db_connection, $select_status);
$after_assoc = mysqli_fetch_assoc($select_status_res);


if($after_assoc['status'] == 1){
    
    $select_status = "SELECT COUNT(*)as total_deactive FROM socials WHERE status=1";
    $select_status_res = mysqli_query($db_connection, $select_status);
    $after_assoc = mysqli_fetch_assoc($select_status_res);

    if($after_assoc['total_deactive'] == 3){
        $_SESSION['limit'] = 'Minimum 3 Icon Have to active';
        header('location:social.php');
    }
    else{
        $update_status2 = "UPDATE socials SET status=0 WHERE id=$id";
        mysqli_query($db_connection, $update_status2);

        header('location:social.php');
    }


}
else{
    $select_status = "SELECT COUNT(*)as total_active FROM socials WHERE status=1";
    $select_status_res = mysqli_query($db_connection, $select_status);
    $after_assoc = mysqli_fetch_assoc($select_status_res);

    if($after_assoc['total_active'] >= 4){
        $_SESSION['limit'] = 'Maxmimum 4 Icon can be active';
        header('location:social.php');
    }
    else{
        $update_status2 = "UPDATE socials SET status=1 WHERE id=$id";
        mysqli_query($db_connection, $update_status2);

        header('location:social.php');
    }
}




?>