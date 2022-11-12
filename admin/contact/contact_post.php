<?php 
    require '../../db.php';


/*

contact_desp
contact_city
contact_address
phone
e_mail
status*/

$contact_desp = $_POST['contact_desp'];
$contact_city = $_POST['contact_city'];
$contact_address = $_POST['contact_address'];
$phone = $_POST['phone'];
$e_mail = $_POST['e_mail'];


$insert = "INSERT INTO contact(contact_desp,contact_city,contact_address,phone,e_mail)VALUES('$contact_desp','$contact_city','$contact_address','$phone','$e_mail')";
mysqli_query($db_connection, $insert);

header('location:contact.php');


?>