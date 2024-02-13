
<table id="tableVaccination" class="table table-bordered" style="width:100%;">
        <caption class="text-center">
            <small>Vaccination Table</small>
        </caption>
        <thead class="table-light w-100">
            
            <tr>
                <th id="numbertbl">No.</th>
                <th>Residence Name</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Date Checked</th>
                <th>Vaccine Type</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
            include '../connect.php'; 
            $i=1;
            $sqlSelect = $conn->query("SELECT * FROM vac_tbl");
            while($row= $sqlSelect->fetch_assoc()):
            ?>
            <tr id="row_">
                <th id="numbertbl"><?php echo $i++ ?></th>
                <td><?php echo $row['ResidenceName'] ?></td>
                <td><?php echo $row['Age'] ?></td>
                <td><?php echo $row['Sex'] ?></td>
                <td><?php echo $row['inputDate'] ?></td>
                <td><?php echo $row['VaccineType'] ?></td>
            </tr>
           <?php endwhile; ?>
        
        </tbody>
</table>

<script type="text/javascript">
$('#tableVaccination').DataTable({
          "lengthChange": true,
          "bInfo": false,
          "paginate": true,
          "ordering": false,
            "responsive": { breakpoints: [
                { name: 'desktop', width: Infinity },
                { name: 'tablet',  width: 1024 },
                { name: 'phone',   width: 768 }
            ]},
          "columns": [
              {"className": "all"},
            {"className": "min-tablet"}, 
            {"className": "min-tablet"}, 
            {"className": "min-tablet"}, 
            {"className": "min-tablet"}, 
            {"className": "min-tablet"}
            ]
        });
        
</script>
