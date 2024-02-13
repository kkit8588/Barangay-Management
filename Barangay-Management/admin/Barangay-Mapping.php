<?php //include 'sessionLimit.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <title>Barangay Mapping</title>
    <?php include 'header.php'; ?>
    <style>
    #map {
      height: 100%;
      width: 100%;
    }
    section{
        height: 80vh;
    }
  </style>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <main class="content px-4 pb-3 pt-4">
        <h4 class="text-white">Barangay Mapping</h4>
        <hr class="text-white">
        <section class="pt-2 d-flex flex-column row-gap-3 bg-white shadow-sm p-4 rounded">
         <?php
include '../connect.php';
$apiKey = '29f46aee681943bd84e13b5914b4b64e'; // Replace with your OpenCage Geocoding API key

// Fetch data from the database
$sqlSelect = mysqli_query($conn, "SELECT * FROM brgy_count");
$brgy_name = array();
$brgy_count = array();

while ($row = mysqli_fetch_assoc($sqlSelect)) {
    $brgy_names = $row['brgy_name'];
    $brgy_counts = $row['brgy_count'];

    if (!empty($brgy_names)) {
        $url = "https://api.opencagedata.com/geocode/v1/json?q=" . urlencode($brgy_names) . "&key=" . $apiKey;
        $response = file_get_contents($url);

        if ($response !== false) {
            $data = json_decode($response, true);

            if ($data && isset($data['results'][0]['geometry']['lat']) && isset($data['results'][0]['geometry']['lng'])) {
                $latitude = $data['results'][0]['geometry']['lat'];
                $longitude = $data['results'][0]['geometry']['lng'];

                $markers[] = array('lat' => $latitude, 'lng' => $longitude, 'brgy_names' => $brgy_names, 'brgy_count' => $brgy_counts);
            } else {
                // Handle geocoding errors
                // You may want to log the error or handle it differently
                echo "Unable to geocode the brgy_names: $brgy_names";
            }
        } else {
            // Handle file_get_contents error
            // You may want to log the error or handle it differently
            echo "Error fetching data from OpenCage Geocoding API";
        }
    } 
}
?>

<div id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    var map = L.map('map').setView([14.5605166, 121.0764343], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var markersData = <?php echo json_encode($markers); ?>; // Pass PHP array to JavaScript

    markersData.forEach(function(marker) {
        var popupContent = marker.brgy_names + "<br><b>Household Family Count: " + marker.brgy_count + "</b>";
        L.marker([marker.lat, marker.lng]).addTo(map)
            .bindPopup(popupContent).openPopup();
    });
</script>


        </section>
    </main>
</body>
    <?php include 'footer.php' ;?>
</html>

