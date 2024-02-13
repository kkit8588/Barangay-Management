<?php
include '../connect.php';

$ResidenceName = $_POST['ResidenceName'];
$HouseholdMembers = $_POST['HouseholdMembers'];
$Barangay = $_POST['Barangay'];
$Age = $_POST['Age'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

$sqlSelect = mysqli_query($conn, "SELECT * FROM brgy_count WHERE brgy_name = '$Barangay'");

if (mysqli_num_rows($sqlSelect) > 0) {
    $row = $sqlSelect->fetch_assoc();
    $count = $row['brgy_count'] + 1;
    if ($row['brgy_count'] >= 0) {
            mysqli_query($conn, "UPDATE brgy_count SET brgy_count='$count' WHERE brgy_name = '$Barangay'");
        }

}else{
    $brgy_count = 1;
    $sqlInsert = mysqli_query($conn, "INSERT INTO brgy_count (brgy_name, brgy_count) VALUES ('$Barangay', '$brgy_count')");
}

$sqlInsert = mysqli_query($conn, "INSERT INTO dr_tbl (ResidenceName, HouseholdMembers, Barangay, Age, latitude, longitude) VALUES ('$ResidenceName', '$HouseholdMembers', '$Barangay', '$Age', '$latitude', '$longitude')");

if ($sqlInsert) {
    $performed = $_POST['performed'];
    $activity = $_POST['activity'];
    mysqli_query($conn, "INSERT INTO log_tbl (activity, performed) VALUES ('$activity', '$performed')");
}


    
?>
