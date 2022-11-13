<?php

session_start();
require '../../db.php';

$count = $_POST['count'];
$title = $_POST['title'];
$damy_text = $_POST['damy_text'];

$insert = "INSERT INTO success(count, title,damy_text)VALUES('$count','$title', '$damy_text')";
mysqli_query($db_connection, $insert);

header('location:success.php');





?>