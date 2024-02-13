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
$ad_w = $_POST['ad_w'];
$hm = $_POST['hm'];
$fam_stat = $_POST['fam_stat'];
$householdmembers = $_POST['householdmembers'];
$MonitoringType = $_POST['MonitoringType'];
$pwn = $_POST['pwn'];

$fullname = $FirstName." ".$MiddleName." ".$Surname;

$sqlInsert = mysqli_query($conn, "INSERT INTO ar_tbl (Surname, FirstName, MiddleName, PlaceofBirth, Birthday, Age, Sex, CivilStatus, Citizenship, Religion, Occupation, EducationAttainment, Address, HouseNo, zsp, weights) VALUES ('$Surname', '$FirstName', '$MiddleName', '$PlaceofBirth', '$Birthday', '$Age', '$Sex', '$CivilStatus', '$Citizenship', '$Religion', '$Occupation', '$EducationAttainment', '$Address', '$HouseNo', '$zsp', '$ad_w' )");

if ($ad_w <= 25 && $Age >= 4 && $Age <= 10) {
    $sqlInsert1 = mysqli_query($conn, "INSERT INTO feed_tbl (ResidentName, Sex, Age, weights) VALUES ('$fullname', '$Sex', '$Age', '$ad_w')");
}
if ($Age >= 60 || $pwn == 'PWD' ) {
    $sqlInsert1 = mysqli_query($conn, "INSERT INTO hm_tbl (ResidenceName, Sex, Age, MonitoringType) VALUES ('$fullname', '$Sex', '$Age', '$MonitoringType')");
}
if ($hm == 'Head') {
    $sqlInsert2 = mysqli_query($conn, "INSERT INTO relief_tbl (ResidenceName, HouseholdMembers, Sex, Age, hm, fam_stat) VALUES ('$fullname', '$householdmembers', '$Sex', '$Age', '$hm', '$fam_stat')");
}

if ($sqlInsert) {
    $ParentsNameMother = $_POST['ParentsNameMother'];
	$BloodType = $_POST['BloodType'];
	$Ages = $_POST['Ages'];
	$Height = $_POST['Height'];
	$Weight = $_POST['Weight'];
	$Birth = $_POST['Birth'];

	$sqlInsertPreg = mysqli_query($conn, "INSERT INTO preg_tbl (ParentsNameMother, BloodType, Age, Height, Weights, Birth) VALUES ('$ParentsNameMother', '$BloodType', '$Ages', '$Height', '$Weight', '$Birth')");

	if ($sqlInsertPreg) {
    $performed = $_POST['performed'];
    $activity = $_POST['activity'];
    mysqli_query($conn, "INSERT INTO log_tbl (activity, performed) VALUES ('$activity', '$performed')");
	}
}


?>
