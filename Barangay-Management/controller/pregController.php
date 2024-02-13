<?php
include '../connect.php';

$ParentsNameMother = $_POST['ParentsNameMother'];
$BloodType = $_POST['BloodType'];
$Age = $_POST['Age'];
$Height = $_POST['Height'];
$Weight = $_POST['Weight'];
$Birth = $_POST['Birth'];

$sqlInsert = mysqli_query($conn, "INSERT INTO preg_tbl (ParentsNameMother, BloodType, Age, Height, Weight, Birth) VALUES ('$ParentsNameMother', '$BloodType', '$Age', '$Height', '$Weight', '$Birth')");

if ($sqlInsert) {
	$performed = $_POST['performed'];
    $activity = $_POST['activity'];
    mysqli_query($conn, "INSERT INTO log_tbl (activity, performed) VALUES ('$activity', '$performed')");
};
?>

