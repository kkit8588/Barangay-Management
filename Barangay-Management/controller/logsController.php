<?php
include '../connect.php';

if (isset($_POST['search'])) {
$search = $_POST['search'];

$result = $conn->query("SELECT *,
                            DATE_FORMAT(logdate, '%M %e, %Y') AS formattedDate,
                            DATE_FORMAT(logtime, '%h:%i %p') AS formattedTime FROM log_tbl WHERE CONCAT(DATE_FORMAT(logdate, '%M %e, %Y'), DATE_FORMAT(logtime, '%h:%i %p'), performed) LIKE '%$search%' ORDER BY lognumber DESC");



    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row['lognumber']."</td>
                    <td>".$row['activity']."</td>
                    <td>".$row['formattedDate']."</td>
                    <td>".$row['formattedTime']."</td>
                    <td>".$row['performed']."</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='6'><center>No results found</center></td></tr>";
    }
}else{
    $result = $conn->query("SELECT *, DATE_FORMAT(logtime, '%h:%i %p') AS formattedTime FROM log_tbl WHERE DATE_FORMAT(logtime, '%h:%i %p') ORDER BY lognumber DESC");

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $mysqlDate = $row['logdate'];
                $formattedDate = date('F j, Y', strtotime($mysqlDate));
                echo "<tr>
                        <td>".$row['lognumber']."</td>
                        <td>".$row['activity']."</td>
                        <td>".$formattedDate."</td>
                        <td>".$row['formattedTime']."</td>
                        <td>".$row['performed']."</td>
                      </tr>";
            }
        }
}

$conn->close();
?>
