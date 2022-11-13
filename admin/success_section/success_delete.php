<?php

require "../../db.php";

$id = $_GET['id'];

$delete_banner = "DELETE FROM success WHERE id=$id";
mysqli_query($db_connection, $delete_banner);

header('location:success.php');










?>