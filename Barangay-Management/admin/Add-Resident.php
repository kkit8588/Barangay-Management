<?php //include 'sessionLimit.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Resident</title>
    <?php include 'header.php'; ?>
</head>
<body >
    <?php include 'sidebar.php'; ?>

    <main class="content px-4 pb-3 pt-4" style="">
        <h4 class="text-white">Add Resident</h4>
        <hr class="text-white">
        <section class="pt-2 d-flex flex-column row-gap-3 bg-white shadow-sm p-4 rounded">
            <h5 class="mx-auto pt-2">Personal Information</h5>
            <form class="row addResForm py-2">
                <input type="text" name="performed" value="<?php echo $admin?>" hidden>
                <input type="text" name="activity" value="<?php echo $admin?> Add New Residence" hidden>
                <div class="col-12 col-sm-6 col-lg-4 col-xxl-3">
                    <label for="Surname" class="col-form-label">*Surname:</label>
                    <div class="col-auto">
                        <input type="text" name="Surname" id="Surname" placeholder="Surname" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xxl-3">
                    <label for="FirstName" class="col-form-label">*First Name:</label>
                    <div class="col-auto">
                        <input type="text" name="FirstName" id="FirstName" placeholder="First Name" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xxl-3">
                    <label for="MiddleName" class="col-form-label">*Middle Name:</label>     
                    <div class="col-auto">
                        <input type="text" name="MiddleName" id="MiddleName" placeholder="Middle Name" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xxl-3">
                    <label for="Birthday" class="col-form-label">*Birthday:</label>
                    <div class="col-auto">
                        <input type="date" name="Birthday" id="Birthday" placeholder="Birthday" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-7 col-xxl-6">
                    <label for="PlaceofBirth" class="col-form-label">*Place of Birth:</label>
                    <div class="col-auto">
                        <input type="text" name="PlaceofBirth" id="PlaceofBirth" placeholder="Place of Birth" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 col-xxl-1">
                    <label for="Age" class="col-form-label">*Age:</label>     
                    <div class="col-auto">
                        <input type="text" name="Age" id="Age" placeholder="Age" class="form-control" readonly>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 col-xxl-2">
                    <label for="Sex" class="col-form-label">*Sex:</label>
                    <div class="col-auto">
                        <select name="Sex" id="Sex"  class="form-select">
                            <option disabled selected>Select Option</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xxl-3">
                    <label for="CivilStatus" class="col-form-label">*Civil Status:</label>
                    <div class="col-auto">
                        <select name="CivilStatus" id="CivilStatus"  class="form-select">
                            <option disabled selected>Select Option</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Widowed">Widowed</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xxl-3">
                    <label for="Citizenship" class="col-form-label">*Citizenship:</label>     
                    <div class="col-auto">
                        <input type="text" name="Citizenship" id="Citizenship" placeholder="Citizenship" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xxl-3">
                    <label for="Religion" class="col-form-label">*Religion:</label>
                    <div class="col-auto">
                        <input type="text" name="Religion" id="Religion" placeholder="Religion" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xxl-3">
                    <label for="Occupation" class="col-form-label">*Occupation:</label>
                    <div class="col-auto">
                        <input type="text" name="Occupation" id="Occupation" placeholder="Occupation" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xxl-3">
                    <label for="EducationAttainment" class="col-form-label">*Education Attainment:</label>
                    <div class="col-auto">
                        <select name="EducationAttainment" id="EducationAttainment"  class="form-select">
                            <option disabled selected>Select Option</option>
                            <option value="Not Applicable">Not Applicable</option>
                            <option value="Elementary Graduate">Elementary Graduate</option>
                            <option value="High School Graduate">High School Graduate</option>
                            <option value="College Graduate">College Graduate</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-xxl-4">
                    <label for="Address" class="col-form-label">*Address:</label>
                    <div class="col-auto">
                        <select name="Address" id="Address" class='col-auto form-select' onchange="convertAddress()">
                                <option selected disabled>Select location</option>
                                <?php
                                // Array of location options
                                $locations = array(
                                    'Alobo, Santa Cruz, Marinduque',
                                    'Angas, Santa Cruz, Marinduque',
                                    'Aturan, Santa Cruz, Marinduque',
                                    'Bagong Silang Pob. (2nd Zone), Santa Cruz, Marinduque',
                                    'Baguidbirin, Santa Cruz, Marinduque',
                                    'Baliis, Santa Cruz, Marinduque',
                                    'Balogo, Santa Cruz, Marinduque',
                                    'Banahaw Pob. (3rd Zone Pob.), Santa Cruz, Marinduque',
                                    'Bangcuangan, Santa Cruz, Marinduque',
                                    'Banogbog, Santa Cruz, Marinduque',
                                    'Biga, Santa Cruz, Marinduque',
                                    'Botilao, Santa Cruz, Marinduque',
                                    'Buyabod, Santa Cruz, Marinduque',
                                    'Dating Bayan, Santa Cruz, Marinduque',
                                    'Devilla, Santa Cruz, Marinduque',
                                    'Dolores, Santa Cruz, Marinduque',
                                    'Haguimit, Santa Cruz, Marinduque',
                                    'Hupi, Santa Cruz, Marinduque',
                                    'Ipil, Santa Cruz, Marinduque',
                                    'Jolo, Santa Cruz, Marinduque',
                                    'Kaganhao, Santa Cruz, Marinduque',
                                    'Kalangkang, Santa Cruz, Marinduque',
                                    'Kamandugan, Santa Cruz, Marinduque',
                                    'Kasily, Santa Cruz, Marinduque',
                                    'Kilo-kilo, Santa Cruz, Marinduque',
                                    'Kinyaman, Santa Cruz, Marinduque',
                                    'Labo, Santa Cruz, Marinduque',
                                    'Lamesa, Santa Cruz, Marinduque',
                                    'Landy(Perez), Santa Cruz, Marinduque',
                                    'Lapu-lapu Pob. (5th Zone), Santa Cruz, Marinduque',
                                    'Libjo, Santa Cruz, Marinduque',
                                    'Lipa, Santa Cruz, Marinduque',
                                    'Lusok, Santa Cruz, Marinduque',
                                    'Maharlika Pob. (1st Zone), Santa Cruz, Marinduque',
                                    'Makulapnit, Santa Cruz, Marinduque',
                                    'Maniwaya, Santa Cruz, Marinduque',
                                    'Manlibunan, Santa Cruz, Marinduque',
                                    'Masaguisi, Santa Cruz, Marinduque',
                                    'Masalukot, Santa Cruz, Marinduque',
                                    'Matalaba, Santa Cruz, Marinduque',
                                    'Mongpong, Santa Cruz, Marinduque',
                                    'Morales, Santa Cruz, Marinduque',
                                    'Napo (Malabon), Santa Cruz, Marinduque',
                                    'Pag-Asa Pob. (4th Zone), Santa Cruz, Marinduque',
                                    'Pantayin, Santa Cruz, Marinduque',
                                    'Polo, Santa Cruz, Marinduque',
                                    'Pulong-Parang, Santa Cruz, Marinduque',
                                    'Punong, Santa Cruz, Marinduque',
                                    'San Antonio, Santa Cruz, Marinduque',
                                    'San Isidro, Santa Cruz, Marinduque',
                                    'Tagum, Santa Cruz, Marinduque',
                                    'Tamayo, Santa Cruz, Marinduque',
                                    'Tambangan, Santa Cruz, Marinduque',
                                    'Tawiran, Santa Cruz, Marinduque',
                                    'Taytay, Santa Cruz, Marinduque'
                                );

                                // Loop through the locations and create <option> elements
                                foreach ($locations as $location) {
                                    echo "<option value='$location' >$location</option>";
                                }
                                ?>
                        </select>
                    </div>

                </div>
                <div class="col-12 col-sm-6 col-lg-6 col-xxl-4">
                    <label for="HouseNo" class="col-form-label">*House No:</label>
                    <div class="col-auto">
                        <input type="text" name="HouseNo" id="HouseNo" placeholder="House No" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-6 col-xxl-4">
                    <label for="zsp" class="col-form-label">*Zone/Street/Purok:</label>     
                    <div class="col-auto">
                        <input type="text" name="zsp" id="zsp" placeholder="Zone/Street/Purok" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2">
                    <label for="householdmembers" class="col-form-label">*Household Members:</label>
                    <div class="col-auto">
                        <input type="text" name="householdmembers" id="householdmembers" placeholder="Household Members" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2">
                    <label for="ad_w" class="col-form-label">*Weight:</label>
                    <div class="col-auto">
                        <input type="number" name="ad_w" id="ad_w" class="form-control" placeholder="Residence Weight">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="col-auto">
                        <label for="hm" class="col-form-label">Head/Member:</label>
                        <select name="hm" id="hm"  class="form-select">
                            <option value="" hidden selected>Select Option</option>
                            <option value="Head">Head</option>
                            <option value="Member">Member</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="col-auto">
                        <label for="fam_stat" class="col-form-label">Family Status:</label>
                        <select name="fam_stat" id="fam_stat"  class="form-select">
                            <option value="" hidden selected>Select Option</option>
                            <option value="Father">Father</option>
                            <option value="Mother">Mother</option>
                            <option value="Son">Son</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="col-auto">
                        <label for="pwn" class="col-form-label">Pwd/not:</label>
                        <select name="pwn" id="pwn"  class="form-select">
                            <option value="" hidden selected>Select Option</option>
                            <option value="PWD">PWD</option>
                            <option value="Not">Not</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="col-auto">
                        <label for="MonitoringType" class="col-form-label">Medical History:</label>
                        <select name="MonitoringType" id="MonitoringType" class="form-select">
                            <option value="" hidden selected>Select Disease</option>
                            <option value="Hypertension" >Hypertension</option>
                            <option value="Diabetes" >Diabetes</option>
                            <option value="Tuberculosis" >Tuberculosis</option>
                            <option value="Others" >Others</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2">
                    <label for="someonepregnant" class="col-form-label">*Someone Pregnant?:</label>
                    <div class="col-auto">
                        <select name="someonepregnant" id="someonepregnant"  class="form-select">
                            <option value="" hidden selected>Select Option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <div id="pn" class="col-12 col-sm-6 col-lg-2 d-none">
                    <label for="ParentsNameMother" class="col-form-label">*Mother's Name :</label>
                    <div class="col-auto">
                        <input type="text" name="ParentsNameMother" id="ParentsNameMother" class="form-control" placeholder="Parents Name Mother">
                    </div>
                </div>
                <div id="pd" class="col-12 col-sm-6 col-lg-2 d-none">
                    <label for="Birth" class="col-form-label">*Pregnant Due:</label>
                    <div class="col-auto">
                        <input type="date" name="Birth" id="Birth " class="form-control">
                    </div>
                </div>
                <div id="pbt" class="col-12 col-sm-6 col-lg-2 d-none">
                    <label for="BloodType" class="col-form-label">*Pregnant Blood Type:</label>
                    <div class="col-auto">
                        <select name="BloodType" id="BloodType" class="form-select">
                            <option hidden selected disabled>Select Blood Type</option>
                            <option value="O positive">O positive</option>
                            <option value="O positive">O negative</option>
                            <option value="A positive">A positive</option>
                            <option value="A positive">A negative</option>
                            <option value="B positive">B positive</option>
                            <option value="B positive">B negative</option>
                            <option value="AB positive">AB positive</option>
                            <option value="AB positive">AB negative</option>
                            <option value="n/a">N/A</option>
                        </select>
                    </div>
                </div>
                <div id="hht" class="col-12 col-sm-6 col-lg-2 d-none">
                    <label for="Height" class="col-form-label">*Height:</label>
                    <div class="col-auto">
                        <input type="text" name="Height" id="Height" class="form-control" placeholder="Height">
                    </div>
                </div>
                <div id="wht" class="col-12 col-sm-6 col-lg-2 d-none">
                    <label for="Weight" class="col-form-label">*Weight:</label>
                    <div class="col-auto">
                        <input type="text" name="Weight" id="Weight" class="form-control" placeholder="Weight">
                    </div>
                </div>
                <div id="ages" class="col-12 col-sm-6 col-lg-2 d-none">
                    <label for="Ages" class="col-form-label">*Age:</label>
                    <div class="col-auto">
                        <input type="text" name="Ages" id="Ages" class="form-control" placeholder="Age">
                    </div>
                </div>
                <div id="ages" class="col-12 col-sm-6 col-lg-2 d-none">
                    <label for="rth" class="col-form-label">*Relationship to head:</label>
                    <div class="col-auto">
                        <input type="text" name="rth" id="rth" class="form-control" placeholder="Relationship to head">
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center column-gap-5 mt-4">
                    <input type="submit" name="submit" value="Add" class="btn btn-primary fw-bold px-4">
                    <button class="btn btn-danger fw-bold px-4" id="clearId">Cancel</button>
                </div>


            </form>
        </section>
    </main>
    
</body>
    <?php include 'footer.php' ;?>
    <script>
        $(document).ready(function() {
           $('#someonepregnant').change(function(){
                if($(this).val() == 'Yes'){
                    $('#pn, #pd, #pbt, #hht, #wht, #ages').removeClass('d-none');
                }else {
                    $('#pn, #pd, #pbt, #hht, #wht, #ages').addClass('d-none');
                }
            }); 
          $('#Birthday').on('input', updateAge);

              function updateAge() {
                var birthday = new Date($('#Birthday').val());

                var currentDate = new Date();

                var age = currentDate.getFullYear() - birthday.getFullYear();

                if (
                  currentDate.getMonth() < birthday.getMonth() ||
                  (currentDate.getMonth() === birthday.getMonth() && currentDate.getDate() < birthday.getDate())
                ) {
                  age--;
                }

                $('#Age').val(age);
              }
        });
    </script>
</html>

