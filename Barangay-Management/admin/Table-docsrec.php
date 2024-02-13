<?php
include '../connect.php';

if (isset($_POST['search'])) {
$search = $_POST['search'];

$result = $conn->query("SELECT * FROM ar_tbl WHERE CONCAT(Surname,FirstName,MiddleName,Age,CivilStatus) LIKE '%$search%' ORDER BY id DESC");



    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row['Surname']." ".$row['FirstName']." ".$row['MiddleName']."</td>
                    <td>".$row['Age']."</td>
                    <td>".$row['CivilStatus']."</td>
                    <td><button class='ShowPrint btn btn-sm btn-secondary fw-bold'
                            data-id='".$row['id']."'
                            data-sn='".$row['Surname']."'
                            data-fn='".$row['FirstName']."'
                            data-mn='".$row['MiddleName']."'
                            >Show</button></td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4'><center>No results found</center></td></tr>";
    }
}else{
    $result = $conn->query("SELECT * FROM ar_tbl ORDER BY id DESC");

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row['Surname']." ".$row['FirstName']." ".$row['MiddleName']."</td>
                        <td>".$row['Age']."</td>
                        <td>".$row['CivilStatus']."</td>
                        <td><button class='ShowPrint btn btn-sm btn-secondary fw-bold'
                            data-id='".$row['id']."'
                            data-sn='".$row['Surname']."'
                            data-fn='".$row['FirstName']."'
                            data-mn='".$row['MiddleName']."'
                            >Show</button></td>
                      </tr>";
            }
        }
}

$conn->close();
?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.ShowPrint').click(function(){
            $('.idPreview').data('id', $(this).data('id'))
            $('#sn').val($(this).data('sn'));
            $('#fn').val($(this).data('fn'));
            $('#mn').val($(this).data('mn'));
        });
        
    });
</script>
