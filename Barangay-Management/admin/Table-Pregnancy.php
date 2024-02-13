<table id="tablePregnancy" class="table table-bordered" style="width:100%;">
        <caption class="text-center">
            <small>Pregnancy Table</small>
        </caption>
        <thead class="table-light w-100">
            <tr>
                <th id="numbertbl">No.</th>
                <th>Parents Name Mother</th>
                <th>Age</th>
                <th>Blood Type</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Due of Giving Birth</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../connect.php'; 
            $i=1;
            $sqlSelect = $conn->query("SELECT * FROM preg_tbl");
            while($row= $sqlSelect->fetch_assoc()):
            ?>
            <tr id="row_">
                <th id="numbertbl"><?php echo $i++ ?></th>
                <td><?php echo $row['ParentsNameMother'] ?></td>
                <td><?php echo $row['Age'] ?></td>
                <td><?php echo $row['BloodType'] ?></td>
                <td><?php echo $row['Height'] ?></td>
                <td><?php echo $row['Weights'] ?></td>
                <td><?php echo $row['Birth'] ?></td>
            </tr>
            <?php endwhile; ?>
                    
        </tbody>
</table>


<script type="text/javascript">
        $('#tablePregnancy').DataTable({
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
            {"className": "min-tablet"}, 
            {"className": "min-tablet"}
            ],

        });
</script>