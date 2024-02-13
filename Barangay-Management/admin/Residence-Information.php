<?php //include 'sessionLimit.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Residence Information</title>
    <?php include 'header.php'; ?>
    <style type="text/css">
        .showInfo input{
            all: unset !important;
            font-weight: 600 !important;
            
        }
        .showInfo div{
            display: flex;
        }
    </style>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <main class="content px-4 pb-3 pt-4">
        <h4 class="text-white">Residence Information</h4>
        <hr class="text-white">
        <section class="pt-2 d-flex flex-column row-gap-3 bg-white shadow-sm p-4 rounded">

            <div class="py-3">
                <div class="residenttable"></div>
                <hr>
                <div class="d-flex justify-content-center">
                    <div class="showInfo pe-2">
                        <div>
                            <small class="col-sm-5 ">Surname:&nbsp;</small>
                            <input id="Surname" class="col-sm-6" disabled>
                        </div>
                        <div>
                            <small class="col-sm-5">First Name:&nbsp;</small>
                            <input id="FirstName" disabled>
                        </div>
                        <div>
                            <small class="col-sm-5">Middle Name:&nbsp;</small>
                            <input id="MiddleName" disabled>
                        </div>
                        <div>
                            <small class="col-sm-5">Place of Birth:&nbsp;</small>
                            <input id="PlaceofBirth" disabled>
                        </div>
                        <div>
                            <small class="col-sm-5">Birthday:&nbsp;</small>
                            <input id="Birthday" disabled>
                        </div>
                    </div>
                    <div class="showInfo pe-2">
                        <div>
                            <small class="col-sm-5">Age:&nbsp;</small>
                            <input id="Age" disabled>
                        </div>
                        <div>
                            <small class="col-sm-5">Sex:&nbsp;</small>
                            <input id="Sex" disabled>
                        </div>
                        <div>
                            <small class="col-sm-5">Civil Status:&nbsp;</small>
                            <input id="CivilStatus" disabled>
                        </div>
                        <div>
                            <small class="col-sm-5">Citizenship:&nbsp;</small>
                            <input id="Citizenship" disabled>
                        </div>
                        <div>
                            <small class="col-sm-5">Education Attainment:&nbsp;</small>
                            <input id="EducationAttainment"  disabled>
                        </div>
                    </div>
                    <div class="showInfo pe-2">
                        <div>
                            <small class="col-sm-5">Religion:&nbsp;</small>
                            <input id="Religion" disabled>
                        </div>
                        <div>
                            <small class="col-sm-5">Occupation:&nbsp;</small>
                            <input id="Occupation" disabled>
                        </div>
                        
                        <div>
                            <small class="col-sm-5">Address:&nbsp;</small>
                            <input id="Address" disabled>
                        </div>
                        <div>
                            <small class="col-sm-5">House No:&nbsp;</small>
                            <input id="HouseNo" disabled>
                        </div>
                        <div>
                            <small class="col-sm-5 ">Zone/Street/Purok:&nbsp;</small>
                            <input id="zsp" disabled>
                        </div>
                    </div>
                    
                </div>

            </div>
            <?php include 'deleteModal.php'?>
            
        </section>
    </main>
</body>
    <?php include 'footer.php' ;?>
    <script type="text/javascript">
        function deleteRow(deleteValue) {
        ('#deleteID').val(deleteValue)
      };
    </script>
</html>

