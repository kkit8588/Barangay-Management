<?php //include 'sessionLimit.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Residence</title>
    <?php include 'header.php'; ?>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <main class="content px-4 pb-3 pt-4">
        <h4 class="text-white">Edit Data Residence</h4>
        <hr class="text-white">
        <section class="pt-2 d-flex flex-column row-gap-3 bg-white shadow-sm p-4 rounded">

            <div class=" py-3">
                <div class="residenttable"></div>
                <hr>
                <form class="row editResForm py-2">
                    <input type="text" name="performed" value="<?php echo $admin?>" hidden>
                    <input type="text" name="activity" value="<?php echo $admin?> Edit the data of Residence" hidden>
                    <input type="text" name="id" id="id" hidden>
                    <div class="col-12 col-sm-6 col-lg-4 col-xxl-3">
                        <label for="Surname" class="col-form-label">Surname:</label>
                        <div class="col-auto">
                            <input type="text" name="Surname" id="Surname" placeholder="Surname" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xxl-3">
                        <label for="FirstName" class="col-form-label">First Name:</label>
                        <div class="col-auto">
                            <input type="text" name="FirstName" id="FirstName" placeholder="First Name" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xxl-3">
                        <label for="MiddleName" class="col-form-label">Middle Name:</label>     
                        <div class="col-auto">
                            <input type="text" name="MiddleName" id="MiddleName" placeholder="Middle Name" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 col-xxl-1">
                        <label for="Age" class="col-form-label">Age:</label>     
                        <div class="col-auto">
                            <input type="text" name="Age" id="Age" placeholder="Age" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 col-xxl-2">
                        <label for="Sex" class="col-form-label">Sex:</label>
                        <div class="col-auto">
                            <input type="text" name="Sex" id="Sex" placeholder="Sex" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-7 col-xxl-6">
                        <label for="PlaceofBirth" class="col-form-label">Place of Birth:</label>
                        <div class="col-auto">
                            <input type="text" name="PlaceofBirth" id="PlaceofBirth" placeholder="Place of Birth" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xxl-3">
                        <label for="Birthday" class="col-form-label">Birthday:</label>
                        <div class="col-auto">
                            <input type="date" name="Birthday" id="Birthday" placeholder="Birthday" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xxl-3">
                        <label for="CivilStatus" class="col-form-label">Civil Status:</label>
                        <div class="col-auto">
                            <input type="text" name="CivilStatus" id="CivilStatus" placeholder="Civil Status" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xxl-3">
                        <label for="Citizenship" class="col-form-label">Citizenship:</label>     
                        <div class="col-auto">
                            <input type="text" name="Citizenship" id="Citizenship" placeholder="Citizenship" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xxl-3">
                        <label for="Religion" class="col-form-label">Religion:</label>
                        <div class="col-auto">
                            <input type="text" name="Religion" id="Religion" placeholder="Religion" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xxl-3">
                        <label for="Occupation" class="col-form-label">Occupation:</label>
                        <div class="col-auto">
                            <input type="text" name="Occupation" id="Occupation" placeholder="Occupation" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xxl-3">
                        <label for="EducationAttainment" class="col-form-label">Education Attainment:</label>     
                        <div class="col-auto">
                            <input type="text" name="EducationAttainment" id="EducationAttainment" placeholder="Education Attainment" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-xxl-4">
                        <label for="Address" class="col-form-label">Address:</label>
                        <div class="col-auto">
                            <input type="text" name="Address" id="Address" placeholder="Address" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6 col-xxl-4">
                        <label for="HouseNo" class="col-form-label">House No:</label>
                        <div class="col-auto">
                            <input type="text" name="HouseNo" id="HouseNo" placeholder="House No" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6 col-xxl-4">
                        <label for="zsp" class="col-form-label">Zone/Street/Purok:</label>     
                        <div class="col-auto">
                            <input type="text" name="zsp" id="zsp" placeholder="Zone/Street/Purok" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center column-gap-5 mt-4">
                        <input type="submit" name="submit" value="Update" class="btn btn-success fw-bold px-4">
                        <button class="btn btn-danger fw-bold px-4" id="clearId">Cancel</button>
                    </div>
                </form>

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

