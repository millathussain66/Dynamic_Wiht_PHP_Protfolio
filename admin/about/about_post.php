<?php 
    require '../../db.php';


$about_you = $_POST['about_you'];

$insert = "INSERT INTO about(about_you)VALUES('$about_you')";
mysqli_query($db_connection, $insert);

header('location:about.php');


?>