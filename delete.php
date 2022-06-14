<?php
include_once 'connection.php';
$id = $_GET['id'];

$sQuery = "DELETE FROM `voters` WHERE id = $id";

$sRes = mysqli_query($con, $sQuery);


?>