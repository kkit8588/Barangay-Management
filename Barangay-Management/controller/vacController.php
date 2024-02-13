<?php
include '../connect.php';

$ResidenceName = $_POST['ResidenceName'];
$VaccineType = $_POST['VaccineType'];
$Sex = $_POST['Sex'];
$Age = $_POST['Age'];
$inputDate = $_POST['inputDate'];

$sqlInsert = mysqli_query($conn, "INSERT INTO vac_tbl (ResidenceName, VaccineType, Sex, Age, inputDate) VALUES ('$ResidenceName', '$VaccineType', '$Sex', '$Age', '$inputDate')");

if ($sqlInsert) {
	$performed = $_POST['performed'];
    $activity = $_POST['activity'];
    mysqli_query($conn, "INSERT INTO log_tbl (activity, performed) VALUES ('$activity', '$performed')");
}


    
?>
