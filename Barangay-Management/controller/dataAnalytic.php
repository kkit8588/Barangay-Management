<?php
include '../connect.php';

$location = $_POST['location'];
$activity = $_POST['activity'];

 mysqli_query($conn, "INSERT INTO filter_tbl (activity, location) VALUES ('$activity', '$location')");



?>