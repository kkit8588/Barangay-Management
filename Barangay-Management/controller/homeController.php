<?php
include '../connect.php';


$id = $_POST['id'];
$mission = $_POST['mission'];
$vision = $_POST['vision'];
$objectives = $_POST['objectives'];

$sqlUpdate = $conn->query("UPDATE home_tbl SET mission='$mission', vision='$vision', objectives='$objectives' WHERE id='$id'");

if ($sqlUpdate) {
		$performed = $_POST['performed'];
	    $activity = $_POST['activity'];
	    mysqli_query($conn, "INSERT INTO log_tbl (activity, performed) VALUES ('$activity', '$performed')");
	}

?>