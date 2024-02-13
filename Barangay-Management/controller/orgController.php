<?php
include '../connect.php';

$id = $_POST['id'];
$mayor = $_POST['mayor'];
$bt = $_POST['bt'];
$bs = $_POST['bs'];
$bc = $_POST['bc'];
$bk1 = $_POST['bk1'];
$bk2 = $_POST['bk2'];
$bk3 = $_POST['bk3'];
$bk4 = $_POST['bk4'];
$bk5 = $_POST['bk5'];
$bk6 = $_POST['bk6'];
if (isset($id)) {
	$sqlInsert = mysqli_query($conn, "UPDATE org_tbl SET mayor='$mayor', bt='$bt', bs='$bs', bc='$bc', bk1='$bk1', bk2='$bk2', bk3='$bk3', bk4='$bk4', bk5='$bk5', bk6='$bk6' WHERE id='$id' ");
	
		if ($sqlInsert) {
		$performed = $_POST['performed'];
	    $activity = $_POST['activity'];
	    mysqli_query($conn, "INSERT INTO log_tbl (activity, performed) VALUES ('$activity', '$performed')");
	}

}else{
	$sqlInsert = mysqli_query($conn, "INSERT INTO org_tbl (mayor, bt, bs, bc, bk1, bk2, bk3, bk4, bk5, bk6) VALUES ('$mayor', '$bt', '$bs', '$bc', '$bk1', '$bk2', '$bk3', '$bk4', '$bk5', '$bk6')");
}



    
?>
