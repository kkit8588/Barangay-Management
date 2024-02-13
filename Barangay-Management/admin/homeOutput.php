<?php
include '../connect.php';
$fetchData = $conn->query("SELECT * FROM home_tbl");
$row = $fetchData->fetch_assoc();
?>
<div class="homeLeft p-3 bg-white shadow-sm rounded-1">
    <div class="Mission border border-2 rounded-1">
        <h5 class="border-2 rounded-1 border px-2">MISSION</h5>
        <p class="w-100 overflow-y-auto px-2"><?php echo $row['mission']; ?></p>
    </div>
    <div class="Vision mt-3 border border-2 rounded-1">
        <h5 class="border-2 rounded-1 border px-2">VISION</h5>
        <p class="w-100 overflow-y-auto px-2"><?php echo $row['vision']; ?></p>
    </div>
</div>
<div class="homeRight p-3 d-flex flex-column bg-white shadow-sm rounded-1">
    <div class="Objectives position-relative border border-2 rounded-1">
        <h5 class="border-2 rounded-1 border px-2">Objectives</h5>
        <p class="w-100 overflow-y-auto px-2"><?php echo $row['objectives']; ?></p>

        <button class="homeEdit btn btn-primary fw-bold px-3 m-0 btn-sm"
        data-id="<?php echo $row['id']; ?>"
        data-mi="<?php echo $row['mission']; ?>"
        data-vi="<?php echo $row['vision']; ?>"
        data-ob="<?php echo $row['objectives']; ?>" >Edit</button>
    </div>
    
</div>
<script type="text/javascript">
    $(document).ready(function(){
    $('.homeEdit').click(function(){
        $('#id').val($(this).data('id'));
        $('#mission').val($(this).data('mi'));
        $('#vision').val($(this).data('vi'));
        $('#objectives').val($(this).data('ob'));
        $('#homeModal').modal('show');
    });
    });

</script>