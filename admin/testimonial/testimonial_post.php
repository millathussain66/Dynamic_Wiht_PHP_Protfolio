<?php 
    require '../../db.php';


$quotes = $_POST['quotes'];
$name = $_POST['name'];
$introduction = $_POST['introduction'];


$insert = "INSERT INTO testimonial(quotes,name,introduction)VALUES('$quotes','$name','$introduction')";
mysqli_query($db_connection, $insert);

header('location:testimonial.php');


?>