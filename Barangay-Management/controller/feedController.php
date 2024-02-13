<?php
include '../connect.php';


$ResidentName = $_POST['ResidentName'];
$NutritionProgramme = $_POST['NutritionProgramme'];
$Sex = $_POST['Sex'];
$Age = $_POST['Age'];
$currentDate = $_POST['currentDate'];

$sqlInsert = mysqli_query($conn, "INSERT INTO feed_tbl (ResidentName, NutritionProgramme, Sex, Age, currentDate) VALUES ('$ResidentName', '$NutritionProgramme', '$Sex', '$Age', '$currentDate')");
if ($sqlInsert) {
	$performed = $_POST['performed'];
    $activity = $_POST['activity'];
    mysqli_query($conn, "INSERT INTO log_tbl (activity, performed) VALUES ('$activity', '$performed')");
}

?>
