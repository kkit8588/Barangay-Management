<?php
include '../connect.php';


$ResidenceName = $_POST['ResidenceName'];
$MonitoringType = $_POST['MonitoringType'];
$Sex = $_POST['Sex'];
$Age = $_POST['Age'];
$currentDate = $_POST['currentDate'];

$sqlInsert = mysqli_query($conn, "INSERT INTO hm_tbl (ResidenceName, MonitoringType, Sex, Age, currentDate) VALUES ('$ResidenceName', '$MonitoringType', '$Sex', '$Age', '$currentDate')");
if ($sqlInsert) {
	$performed = $_POST['performed'];
    $activity = $_POST['activity'];
    mysqli_query($conn, "INSERT INTO log_tbl (activity, performed) VALUES ('$activity', '$performed')");
}
?>
