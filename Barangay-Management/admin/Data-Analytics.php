<?php //include 'sessionLimit.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Analytics</title>
    <?php include 'header.php'; ?>
    <style type="text/css">
        .containerDatA{
            height: 75vh !important;
        }
        .tableDiv{
            position: relative;
            max-height: 55vh !important;
            overflow-y: auto !important;
        }
    </style>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <main class="content px-4 pb-3 pt-4">
        <h4 class="text-white">Data Analytics</h4>
        <hr class="text-white">
        <section class="containerDatA bg-white shadow-sm p-4 rounded ">
            <form class="filterForm d-flex gap-2 row mx-auto py-2 ">
                <div class="col-sm-12 col-lg-3 d-flex border border-secondary-subtle rounded-1 ps-0">
                    <label class="form-label my-auto py-2 px-1 bg-secondary-subtle rounded-start-1 border border-start-0 border-top-0 border-bottom-0 border-secondary-subtle text-nowrap">Start Date</label>
                    <input type="date" name="start" class="start form-control rounded-start-0 border-0">
                </div>
                <div class="col-sm-12 col-lg-3 d-flex border border-secondary-subtle rounded-1 ps-0">
                    <label class="form-label my-auto py-2 px-2 bg-secondary-subtle rounded-start-1 border border-start-0 border-top-0 border-bottom-0 border-secondary-subtle text-nowrap">End Date</label>
                    <input type="date" name="end" class="end form-control rounded-start-0 border-0">
                </div>
                <div class="col-sm-12 col-lg-5 col-xl-3 d-flex border border-secondary-subtle rounded-1 px-0">
                    <label class="form-label my-auto p-2 px-1 bg-secondary-subtle rounded-start-1 border border-start-0 border-top-0 border-bottom-0 border-secondary-subtle text-nowrap"><i class="fa-solid fa-map-location-dot px-2 fs-5 fs-0"></i></label>
                    <select name="location" class='location form-select rounded-start-0 border-0'>
                        <option selected disabled>Select location</option>
                        <?php
                        // Array of location options
                        $locations = array(
                            'Alobo',
                            'Angas',
                            'Aturan',
                            'Bagong Silang Pob. (2nd Zone)',
                            'Baguidbirin',
                            'Baliis',
                            'Balogo',
                            'Banahaw Pob. (3rd Zone Pob.)',
                            'Bangcuangan',
                            'Banogbog',
                            'Biga',
                            'Botilao',
                            'Buyabod',
                            'Dating Bayan',
                            'Devilla',
                            'Dolores',
                            'Haguimit',
                            'Hupi',
                            'Ipil',
                            'Jolo',
                            'Kaganhao',
                            'Kalangkang',
                            'Kamandugan',
                            'Kasily',
                            'Kilo-kilo',
                            'Kinyaman',
                            'Labo',
                            'Lamesa',
                            'Landy(Perez)',
                            'Lapu-lapu Pob. (5th Zone)',
                            'Libjo',
                            'Lipa',
                            'Lusok',
                            'Maharlika Pob. (1st Zone)',
                            'Makulapnit',
                            'Maniwaya',
                            'Manlibunan',
                            'Masaguisi',
                            'Masalukot',
                            'Matalaba',
                            'Mongpong',
                            'Morales',
                            'Napo (Malabon)',
                            'Pag-Asa Pob. (4th Zone)',
                            'Pantayin',
                            'Polo',
                            'Pulong-Parang',
                            'Punong',
                            'San Antonio',
                            'San Isidro',
                            'Tagum',
                            'Tamayo',
                            'Tambangan',
                            'Tawiran',
                            'Taytay'
                        );

                        // Loop through the locations and create <option> elements
                        foreach ($locations as $location) {
                            echo "<option value='$location' >$location</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-sm-12 d-flex align-items-center column-gap-2 ps-0">
                    <button type="submit" class="btn btn-primary btn-sm fw-bold d-flex align-items-center column-gap-2">
                        <span>Filter</span>
                        <i class="fa-solid fa-filter"></i>
                    </button>
                    <a class="cancel btn btn-danger btn-sm fw-bold d-flex align-items-center column-gap-2">
                        <span>Clear</span>
                        <i class="fa-solid fa-filter-circle-xmark"></i>
                    </a>
                    <a class="btn btn-success btn-sm fw-bold ms-auto d-flex align-items-center column-gap-2" data-bs-toggle="modal" data-bs-target="#daModal" >
                        <span>Add Activity</span>
                        <i class="fa-solid fa-circle-plus"></i>
                    </a>
                </div>
            </form>

            <small class="tableDiv d-flex border border-top-2 border-0">
                <table id="userTable" border="1" class="table table-bordered table-striped">
                    <thead class="position-sticky" style="top: -1px;">
                        <tr>
                            <th>Location</th>
                            <th>Activity</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody id="dataBody" >
                        
                    </tbody>
                </table>
            </small>

            <div class="modal" id="daModal" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content rounded-1">
                      <form class="daForm">
                        <div class="modal-header py-2">
                            <h4 class="modal-title">New Activity</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body py-3">
                            <input type="hidden" name="id" id="id" value="1" >
                            <input type="text" name="performed" value="<?php echo $admin?>" hidden>
                            <input type="text" name="activity" value="<?php echo $admin?> Update the Mission, Vision and Objectives " hidden>
                            <div class="py-1">
                              <label class="form-label">Location:</label>
                              <select type="text" name="location" id="location"  class='location form-select'>
                                    <option selected disabled>Select location</option>
                                    <?php
                                    // Array of location options
                                    $locations = array(
                                        'Alobo',
                                        'Angas',
                                        'Aturan',
                                        'Bagong Silang Pob. (2nd Zone)',
                                        'Baguidbirin',
                                        'Baliis',
                                        'Balogo',
                                        'Banahaw Pob. (3rd Zone Pob.)',
                                        'Bangcuangan',
                                        'Banogbog',
                                        'Biga',
                                        'Botilao',
                                        'Buyabod',
                                        'Dating Bayan',
                                        'Devilla',
                                        'Dolores',
                                        'Haguimit',
                                        'Hupi',
                                        'Ipil',
                                        'Jolo',
                                        'Kaganhao',
                                        'Kalangkang',
                                        'Kamandugan',
                                        'Kasily',
                                        'Kilo-kilo',
                                        'Kinyaman',
                                        'Labo',
                                        'Lamesa',
                                        'Landy(Perez)',
                                        'Lapu-lapu Pob. (5th Zone)',
                                        'Libjo',
                                        'Lipa',
                                        'Lusok',
                                        'Maharlika Pob. (1st Zone)',
                                        'Makulapnit',
                                        'Maniwaya',
                                        'Manlibunan',
                                        'Masaguisi',
                                        'Masalukot',
                                        'Matalaba',
                                        'Mongpong',
                                        'Morales',
                                        'Napo (Malabon)',
                                        'Pag-Asa Pob. (4th Zone)',
                                        'Pantayin',
                                        'Polo',
                                        'Pulong-Parang',
                                        'Punong',
                                        'San Antonio',
                                        'San Isidro',
                                        'Tagum',
                                        'Tamayo',
                                        'Tambangan',
                                        'Tawiran',
                                        'Taytay'
                                    );

                                    // Loop through the locations and create <option> elements
                                    foreach ($locations as $location) {
                                        echo "<option value='$location' >$location</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="py-1">
                              <label class="form-label">Activity:</label>
                              <input type="text" name="activity" id="activity" class="form-control">

                            </div>
                        </div>
                        <div class="modal-footer py-2 d-flex justify-content-end">
                          <button type="button" class="btn btn-secondary btn-sm fw-bold" data-bs-dismiss="modal">Close</button>
                          <input type="submit" name="save" value="Save changes" class="btn btn-sm btn-success fw-bold">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
        </section>
    </main>
    
</body>
    <?php include 'footer.php' ;?>
    <script type="text/javascript">
       $(document).ready(function(){
            $('.cancel').click(function(){
                $('.start, .end').val("");
                $('.location').val("Select location");
                $.ajax({
                    url: "table-data-analytics.php",
                    type: "GET",
                    success: function(data) {
                        $('#dataBody').html(data);
                    }
                });
            });
            $('.filterForm').submit(function(event){
                event.preventDefault(); // Corrected typo

                var filterData = $(this).serialize();
                $.ajax({
                    type: "GET",
                    url: "table-data-analytics.php",
                    data: filterData,
                    success: function(data) {
                        $('#dataBody').html(data);
                    }
                });
            });

            function loadData() {
                $.ajax({
                    type: "GET",
                    url: "table-data-analytics.php",
                    success: function(data) {
                        $('#dataBody').html(data);
                    }
                });
            }

            loadData();

            $('.daForm').submit(function(event){
                event.preventDefault(); 

                var daData = $(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "../controller/dataAnalytic.php",
                    data: daData,
                    success: function() {
                        loadData();
                         $('.start, .end').val("");
                        $('.location').val("Select location");
                        $('#daModal').modal('hide')
                    }
                });
            });


            

        });
    </script>
</html>

