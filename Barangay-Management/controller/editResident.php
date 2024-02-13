<?php
include '../connect.php';

$id = $_POST['id'];
$Surname = $_POST['Surname'];
$FirstName = $_POST['FirstName'];
$MiddleName = $_POST['MiddleName'];
$PlaceofBirth = $_POST['PlaceofBirth'];
$Birthday = $_POST['Birthday'];
$Age = $_POST['Age'];
$Sex = $_POST['Sex'];
$CivilStatus = $_POST['CivilStatus'];
$Citizenship = $_POST['Citizenship'];
$Religion = $_POST['Religion'];
$Occupation = $_POST['Occupation'];
$EducationAttainment = $_POST['EducationAttainment'];
$Address = $_POST['Address'];
$HouseNo = $_POST['HouseNo'];
$zsp = $_POST['zsp'];

$sqlUpdate = mysqli_query($conn, "UPDATE ar_tbl SET Surname='$Surname', FirstName='$FirstName', MiddleName='$MiddleName', PlaceofBirth='$PlaceofBirth', Birthday='$Birthday', Age='$Age', Sex='$Sex', CivilStatus='$CivilStatus', Citizenship='$Citizenship', Religion='$Religion', Occupation='$Occupation', EducationAttainment='$EducationAttainment', Address='$Address', HouseNo='$HouseNo', zsp='$zsp' WHERE id='$id' ");

if ($sqlUpdate) {
	$performed = $_POST['performed'];
    $activity = $_POST['activity'];
    mysqli_query($conn, "INSERT INTO log_tbl (activity, performed) VALUES ('$activity', '$performed')");
}



    
?>
