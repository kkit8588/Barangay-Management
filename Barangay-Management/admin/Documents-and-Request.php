<?php //include 'sessionLimit.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Documents and Request</title>
    <?php include 'header.php'; ?>
    <style type="text/css">
        .containerDocsRec{
            height: 75vh !important;
        }
        .tableDiv{
            position: relative;
            max-height: 230px !important;
            min-height: 230px !important;
            overflow-y: auto !important;
        }
        .tableDiv table thead{
            position: sticky;
            top: -1px;
        }
        .divlf{
            width: 50%;
        }
        @media screen and (max-width: 899px) {
            .divlf{
            width: 100%;
        }
        .containerDocsRec{
            min-height: 100vh !important;
        }
        }
    </style>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <main class="content px-4 pb-3 pt-4">
        <h4 class="text-white">Documents and Request</h4>
        <hr class="text-white">
        <section class="containerDocsRec bg-white shadow-sm p-4 rounded d-flex flex-column flex-md-row">
            <div class="d-flex flex-column row-gap-3 divlf">
                <div class="searchDocsRec d-flex align-items-center border border-1 px-2 rounded-pill">
                    <i class="searchIcon fa-solid fa-magnifying-glass px-1"></i>
                    <input type="text" name="search" id="searchInput" placeholder="Search by Date and Time" class="form-control border-0">
                </div>
                <small class="tableDiv border border-top-2">
                    <table id="userTable" border="1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Full Name:</th>
                                <th>Age:</th>
                                <th>Civil Status:</th>
                                <th>Action:</th>
                                
                            </tr>
                        </thead>
                        <tbody id="tableDoscRec" >
                            
                        </tbody>
                    </table>
                </small>

                <div class="d-flex flex-column justify-content-center row-gap-3 rounded-1 px-3 py-4 border border-secondary border-1 mx-1 h-75 position-relative">
                    <small class="bg-white border-1 rounded-1 border border-secondary px-2 position-absolute fw-bold text-danger" style="top: -10px;">Personal Information</small>
                    <div class="col-sm-11 d-flex column-gap-1 ">
                        <label class="form-label col-sm-3">Surname:</label>
                        <input id="sn" class="form-control form-control-sm border-secondary ">
                    </div>
                    <div class="col-sm-11 d-flex column-gap-1">
                        <label class="form-label col-sm-3">First Name:</label>
                        <input id="fn" class="form-control form-control-sm border-secondary ">
                    </div>
                    <div class="col-sm-11 d-flex column-gap-1">
                        <label class="form-label col-sm-3">Middle Name:</label>
                        <input id="mn" class="form-control form-control-sm border-secondary ">
                    </div>
                    <div class="col-sm-11 d-flex ">
                        <button class="btn btn-primary btn-sm ms-auto fw-bold idPreview" >Preview <i class="fa-solid fa-angle-right my-auto"></i></button>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column row-gap-3 divlf overflow-auto certificate">
                
            </div>
        </section>
    </main>
    
</body>
    <?php include 'footer.php' ;?>

    <script type="text/javascript">
        

        $(document).ready(function(){

            $('.idPreview').click(function(){
                var dataID = $(this).data('id')
                 $.ajax({
                    url: "print.php",
                    type: "GET",
                    data: { value: dataID },
                    success: function(data) {
                         $('.certificate').html(data)
                    }
                });
            });
            function certificate(){
                $.ajax({
                    url: "print.php",
                    type: "GET",
                    success: function(data) {
                        $('.certificate').html(data)
                        
                    }
                });
            };
            certificate()



            $("#searchInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $.ajax({
                    url: "Table-docsrec.php",
                    type: "POST",
                    data: {search: value},
                    success: function(data) {
                        $("#tableDoscRec").html(data);
                        if (value !== "")  {
                            $('.searchIcon').removeClass('fa-magnifying-glass').addClass('fa-arrow-left-long text-success');
                        }else{
                            $('.searchIcon').addClass('fa-magnifying-glass').removeClass('fa-arrow-left-long text-success');

                        }
                        
                    }
                });
            });

            function table(){
                $.ajax({
                    url: "Table-docsrec.php",
                    type: "POST",
                    success: function(data) {
                        $("#tableDoscRec").html(data);
                    }
                });
            }
            table()

        });
    </script>
</html>

