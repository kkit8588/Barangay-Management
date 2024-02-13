
<table id="tableRelief" class="table table-bordered" style="width:100%;">
        <caption class="text-center">
            <small>Relief Table</small>
        </caption>
        <thead class="table-light w-100">
            
            <tr>
                <th id="numbertbl">No.</th>
                <th>Residence Name</th>
                <th>Household Members:</th>
                <th>Sex</th>
                <th>Age</th>
            </tr>
        </thead>
        
        <tbody>
            <?php 
            include '../connect.php';
            $i=1;
            $sqlInsert= $conn->query("SELECT * FROM relief_tbl");
            while($row=$sqlInsert->fetch_assoc()):
            ?>
            <tr id="row_">
                <th id="numbertbl"><?php echo $i++ ?></th>
                <td><?php echo $row['ResidenceName'] ?></td>
                <td><?php echo $row['HouseholdMembers'] ?></td>
                <td><?php echo $row['Sex'] ?></td>
                <td><?php echo $row['Age'] ?></td>
            </tr>
            <?php endwhile; ?>
        
        </tbody>
</table>

<script type="text/javascript">
        $('#tableRelief').DataTable({
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
            {"className": "min-tablet"}
            ],

        });
</script>