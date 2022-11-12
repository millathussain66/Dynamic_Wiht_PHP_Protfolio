<?php 
    require '../../db.php';


$copy_right = $_POST['copy_right_text'];

$insert = "INSERT INTO copy_right(copy_right_text)VALUES('$copy_right')";


mysqli_query($db_connection, $insert);

header('location:copy_right.php');


?>