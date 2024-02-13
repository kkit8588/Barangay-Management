
<table id="tableResident" class="table table-bordered" style="width:100%;">
        <caption class="text-center">
            <small>Resident Table</small>
        </caption>
        <thead class="table-light w-100">
            
            <tr>
                <th id="numbertbl">No.</th>
                <th>Full Name</th>
                <th>Birthday</th>
                <th>Sex</th>
                <th>Age</th>
                <th id="action">Action</th>
            </tr>
        </thead>
        
        <tbody>
            <?php 
            include '../connect.php';
            $i=1;
            $sqlInsert= $conn->query("SELECT * FROM ar_tbl ORDER BY id DESC");
            while($row=$sqlInsert->fetch_assoc()):
            ?>
            <tr id="row_">
                <th id="numbertbl"><?php echo $i++ ?></th>
                <td><?php echo $row['Surname'] . " " .$row['FirstName'] . " " .$row['MiddleName']?></td>
                <td><?php echo $row['Birthday'] ?></td>
                <td><?php echo $row['Sex'] ?></td>
                <td><?php echo $row['Age'] ?></td>
                <td id="action">
                    <button class="editBtn btn btn-sm btn-primary fw-bold" 
                    data-id="<?php echo $row['id'] ?>"
                    data-1="<?php echo $row['Surname'] ?>"
                    data-2="<?php echo $row['FirstName'] ?>"
                    data-3="<?php echo $row['MiddleName'] ?>"
                    data-4="<?php echo $row['PlaceofBirth'] ?>"
                    data-5="<?php echo $row['Birthday'] ?>"
                    data-6="<?php echo $row['Age'] ?>"
                    data-7="<?php echo $row['Sex'] ?>"
                    data-8="<?php echo $row['CivilStatus'] ?>"
                    data-9="<?php echo $row['Citizenship'] ?>"
                    data-10="<?php echo $row['Religion'] ?>"
                    data-11="<?php echo $row['Occupation'] ?>"
                    data-12="<?php echo $row['EducationAttainment'] ?>"
                    data-13="<?php echo $row['Address'] ?>"
                    data-14="<?php echo $row['HouseNo'] ?>"
                    data-15="<?php echo $row['zsp'] ?>"
                    >Edit</button>
                    <button data-delete="<?php echo $row['id'] ?>" data-bs-toggle="modal" data-bs-target="#deleteModal" class="deleteBtn btn btn-sm btn-danger fw-bold">Delete</button>
                </td>
            </tr>

            <?php endwhile; ?>
        
        </tbody>
</table>

<script type="text/javascript">
        $('#tableResident').DataTable({
          "lengthChange": false,
          "bInfo": false,
          "paginate": false,
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
          "scrollY": 250

        });
        $(document).ready(function(){
                $('.editBtn').click(function(){
                   $('#id').val($(this).data('id'))
                   $('#Surname').val($(this).data('1'))
                   $('#FirstName').val($(this).data('2'))
                   $('#MiddleName').val($(this).data('3'))
                   $('#PlaceofBirth').val($(this).data('4'))
                   $('#Birthday').val($(this).data('5'))
                   $('#Age').val($(this).data('6'))
                   $('#Sex').val($(this).data('7'))
                   $('#CivilStatus').val($(this).data('8'))
                   $('#Citizenship').val($(this).data('9'))
                   $('#Religion').val($(this).data('10'))
                   $('#Occupation').val($(this).data('11'))
                   $('#EducationAttainment').val($(this).data('12'))
                   $('#Address').val($(this).data('13'))
                   $('#HouseNo').val($(this).data('14'))
                   $('#zsp').val($(this).data('15'))
                    });
                $('.deleteBtn').click(function(){
                    $('#deleteID').val($(this).data('delete'))
                    });
                
                var currentURL = window.location.href;
                var fileName = currentURL.substring(currentURL.lastIndexOf('/') + 1);
                if (fileName === "Residence-Information.php") {
                    $('.deleteBtn').addClass('d-none');
                    $('.editBtn').text('Show').addClass('btn-success').removeClass('btn-primary')
                }

        });



</script>