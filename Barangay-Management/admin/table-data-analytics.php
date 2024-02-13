<?php
include '../connect.php'; // Include your database connection file

if (isset($_GET['start']) && isset($_GET['end'])) {
    $start = $_GET['start'];
    $end = $_GET['end'];
    $sql = "SELECT * FROM filter_tbl WHERE createdDate BETWEEN '$start' AND '$end'";

    if (isset($_GET['location'])) {
        $location = $_GET['location'];
        $sql .= " AND location='$location'";
    }
}else if (isset($_GET['location'])) {
    $location = $_GET['location'];
    $sql = "SELECT * FROM filter_tbl WHERE location='$location'";

} else {
    $sql = "SELECT * FROM filter_tbl";
}

$sql .= " ORDER BY id DESC"; // Add ORDER BY clause at the end of the query

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['location'] . "</td>
                <td>" . $row['activity'] . "</td>
                <td>" . $row['createdDate'] . "</td>
                <td>" . $row['createdTime'] . "</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4' class='text-center'>No results found</td></tr>";
}

$conn->close();
?>
