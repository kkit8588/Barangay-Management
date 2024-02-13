<table id="tableFeeding" class="table table-bordered" style="width:100%;">
        <caption class="text-center">
            <small>Feeding Table</small>
        </caption>
        <thead class="table-light w-100">
            
            <tr>
                <th id="numbertbl">No.</th>
                <th>Resident Name</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Weight</th>
                <th>Nutrition Programme</th>
                <th>Date</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
            include '../connect.php'; 
            $i=1;
            $sqlSelect = $conn->query("SELECT * FROM feed_tbl");
            while($row= $sqlSelect->fetch_assoc()):
            ?>
            <tr id="row_">
                <th id="numbertbl"><?php echo $i++ ?></th>
                <td><?php echo $row['ResidentName'] ?></td>
                <td><?php echo $row['Age'] ?></td>
                <td><?php echo $row['Sex'] ?></td>
                <td><?php if (empty($row['weights'])) {
                    echo "0";
                } else{echo $row['weights']; }?> kg</td>


                <td><?php echo $row['NutritionProgramme'] ?></td>
                <td><?php echo $row['currentDate'] ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
</table>

<script type="text/javascript">
        $('#tableFeeding').DataTable({
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
            ],

        });
</script>


