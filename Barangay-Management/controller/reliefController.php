<?php
include '../connect.php';

$ResidenceName = $_POST['ResidenceName'];
$HouseholdMembers = $_POST['HouseholdMembers'];
$Sex = $_POST['Sex'];
$Age = $_POST['Age'];

$sqlInsert = mysqli_query($conn, "INSERT INTO relief_tbl (ResidenceName, HouseholdMembers, Sex, Age) VALUES ('$ResidenceName', '$HouseholdMembers', '$Sex', '$Age')");

if ($sqlInsert) {
	$performed = $_POST['performed'];
    $activity = $_POST['activity'];
    mysqli_query($conn, "INSERT INTO log_tbl (activity, performed) VALUES ('$activity', '$performed')");
}
?>
