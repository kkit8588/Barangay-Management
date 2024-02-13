<?php //include 'sessionLimit.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assistance Category</title>
    <?php include 'header.php'; ?>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <main class="content px-4 pb-3 pt-4">
        <h4 class="text-white">Assistance Category</h4>
        <hr class="text-white">
        <section class="pt-2 d-flex flex-column row-gap-3 bg-white shadow-sm p-4 rounded">
            <div class="assistanceBtn row gap-1 justify-content-center py-3">
                <button id="VaccinationsBtn" class="btnClass actives btn fw-bold btn-sm col-auto">Vaccine</button>
                <button id="PregnancyBtn" class="btnClass btn fw-bold btn-sm col-auto">Pregnancy</button>
                <button id="FeedingBtn" class="btnClass btn fw-bold btn-sm col-auto">Feeding</button>
                <button id="HealthMonitoringBtn" class="btnClass btn fw-bold btn-sm col-auto">Health Monitoring</button>
                <button id="ReliefBtn" class="btnClass btn fw-bold btn-sm col-auto">Relief</button>
                <button id="DisasterRiskBtn" class="btnClass btn fw-bold btn-sm col-auto">Disaster Risk</button>
            </div>

            <div class="row row-gap-5 VaccinationDiv">
                <form class="vaccinationsClass row d-flex flex-wrap mx-auto justify-content-center column-gap-lg-1 row-gap-md-2">
                        <div class="AC_Title d-flex py-2 col-12 col-sm-12 col-lg-10 mb-3">
                            <h5 class="m-auto text-white fw-bold">VACCINE RECORD FORM</h5>
                        </div>
                        <input type="text" name="performed" value="<?php echo $admin?>" hidden>
                        <input type="text" name="activity" value="<?php echo $admin?> Input on Vaccination Form" hidden>
                        <div class="col-12 col-sm-6 col-lg-5 pe-0 pe-sm-1 ps-0">
                            <label for="ResidenceName" class="col-form-label">Residence Name:</label>     
                            <div class="col-auto">
                                <input type="text" name="ResidenceName" id="ResidenceName" placeholder="Residence Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-5 ps-0 ps-sm-1 pe-0">
                            <label for="VaccineType" class="col-form-label">Vaccine Type:</label>
                            <div class="col-auto">
                                <input type="text" name="VaccineType" id="VaccineType" placeholder="VaccineType" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-3 p-0">
                            <label for="Sex" class="col-form-label">Sex:</label>     
                            <div class="col-auto">
                                <input type="text" name="Sex" id="Sex" placeholder="Sex" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-4 px-0 px-sm-2">
                            <label for="Age" class="col-form-label">Age:</label>
                            <div class="col-auto">
                                <input type="text" name="Age" id="Age" placeholder="Age" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-3 p-0">
                            <label for="Date" class="col-form-label">Date:</label>
                            <div class="col-auto">
                                <input type="date" name="inputDate" id="inputDate" placeholder="Date" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center column-gap-5 mt-4">
                            <input type="submit" name="submit" value="Save" class="btn btn-primary fw-bold px-4">
                            <button class="btn btn-danger fw-bold px-4">Clear</button>
                        </div>
                </form>
                <div class="vactable"></div>
            </div>

            <div class="row row-gap-5 d-none PregnancyDiv">
                <form class="pregnancyClass row d-flex flex-wrap mx-auto justify-content-center column-gap-lg-1 row-gap-md-2">
                        <div class="AC_Title d-flex py-2 col-12 col-sm-12 col-lg-10 mb-3">
                            <h5 class="m-auto text-white fw-bold">PREGNANCY RECORD FORM</h5>
                        </div>
                        <input type="text" name="performed" value="<?php echo $admin?>" hidden>
                        <input type="text" name="activity" value="<?php echo $admin?> Input on Pregnancy Form" hidden>
                        <div class="col-12 col-sm-6 col-lg-4 px-0 pe-sm-1 pe-lg-0">
                            <label for="ParentsNameMother" class="col-form-label">Parents Name Mother:</label>     
                            <div class="col-auto">
                                <input type="text" name="ParentsNameMother" id="ParentsNameMother" placeholder="Parents Name Mother" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 px-0 ps-sm-1 ps-md-0">
                            <label for="BloodType" class="col-form-label">Blood Type:</label>
                            <div class="col-auto">
                                <input type="text" name="BloodType" id="BloodType" placeholder="Blood Type" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-2 px-0 pe-sm-1">
                            <label for="Age" class="col-form-label">Age:</label>
                            <div class="col-auto">
                                <input type="text" name="Age" id="Age" placeholder="Age" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 px-0 ps-sm-1 ps-md-0">
                            <label for="Height" class="col-form-label">Height:</label>     
                            <div class="col-auto">
                                <input type="text" name="Height" id="Height" placeholder="Height" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 px-0 pe-sm-1 pe-lg-0">
                            <label for="Weight" class="col-form-label">Weight:</label>
                            <div class="col-auto">
                                <input type="text" name="Weight" id="Weight" placeholder="Weight" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 px-0 ps-sm-1 ps-md-0">
                            <label for="Birth" class="col-form-label">Due of Giving Birth:</label>
                            <div class="col-auto">
                                <input type="date" name="Birth" id="Birth" placeholder="Due of Giving Birth" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center column-gap-5 mt-4">
                            <input type="submit" name="submit" value="Save" class="btn btn-primary fw-bold px-4">
                            <button class="btn btn-danger fw-bold px-4" id="clearId">Clear</button>
                        </div>
                </form>
                <div class="pregtable"></div>
            </div>    

            <div class="row row-gap-5 d-none FeedingDiv">
                <form class="feedingClass row d-flex flex-wrap mx-auto justify-content-center column-gap-lg-1 row-gap-md-2">
                        <div class="AC_Title d-flex py-2 col-12 col-sm-12 col-lg-10 mb-3">
                            <h5 class="m-auto text-white fw-bold">FEEDING RECORD FORM</h5>
                        </div>
                </form>
                <div class="feedtable" style="min-height: 60vh;"></div>
            </div>

            <div class="row row-gap-5 d-none HealthMonitoringDiv">
                <form class="healthmonitoringClass row d-flex flex-wrap mx-auto justify-content-center column-gap-lg-1 row-gap-md-2">
                        <div class="AC_Title d-flex py-2 col-12 col-sm-12 col-lg-10 mb-3">
                            <h5 class="m-auto text-white fw-bold">HEALTH MONITORING RECORD FORM</h5>
                        </div>
                        <input type="text" name="performed" value="<?php echo $admin?>" hidden>
                        <input type="text" name="activity" value="<?php echo $admin?> Input on Health Monitoring Form" hidden>
                        <div class="col-12 col-sm-6 col-lg-5 pe-0 pe-sm-1 ps-0">
                            <label for="ResidenceName" class="col-form-label">Residence Name:</label>     
                            <div class="col-auto">
                                <input type="text" name="ResidenceName" id="ResidenceName" placeholder="Residence Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-5 ps-0 ps-sm-1 pe-0">
                            <label for="MonitoringType" class="col-form-label">Medical History:</label>
                            <div class="col-auto">
                                <select name="MonitoringType" class="form-select">
                                    <option value="" hidden selected>Select Disease</option>
                                    <option value="Hypertension" >Hypertension</option>
                                    <option value="Diabetes" >Diabetes</option>
                                    <option value="Tuberculosis" >Tuberculosis</option>
                                    <option value="Others" >Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-3 p-0">
                            <label for="Sex" class="col-form-label">Sex:</label>     
                            <div class="col-auto">
                                <input type="text" name="Sex" id="Sex" placeholder="Sex" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-4 px-0 px-sm-2">
                            <label for="Age" class="col-form-label">Age:</label>
                            <div class="col-auto">
                                <input type="text" name="Age" id="Age" placeholder="Age" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-3 p-0">
                            <label for="currentDate" class="col-form-label">Date:</label>
                            <div class="col-auto">
                                <input type="date" name="currentDate" id="currentDate" placeholder="currentDate" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center column-gap-5 mt-4">
                            <input type="submit" name="submit" value="Save" class="btn btn-primary fw-bold px-4">
                            <button class="btn btn-danger fw-bold px-4" id="clearId">Clear</button>
                        </div>
                </form>
                <div class="hmtable"></div>
                
            </div>

            <div class="row row-gap-5 d-none ReliefDiv">
                <form class="reliefClass row d-flex flex-wrap mx-auto justify-content-center column-gap-lg-1 row-gap-md-2">
                        <div class="AC_Title d-flex py-2 col-12 col-sm-12 col-lg-10 mb-3">
                            <h5 class="m-auto text-white fw-bold">RELIEF RECORD FORM</h5>
                        </div>
                        <input type="text" name="performed" value="<?php echo $admin?>" hidden>
                        <input type="text" name="activity" value="<?php echo $admin?> Input on Relief Form" hidden>
                        <div class="col-12 col-sm-6 col-lg-5 col-xl-3 px-0 pe-sm-2">
                            <label for="ResidenceName" class="col-form-label">Residence Name:</label>     
                            <div class="col-auto">
                                <input type="text" name="ResidenceName" id="ResidenceName" placeholder="Residence Name" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-5 col-xl-3 px-0 pe-xl-2">
                            <label for="HouseholdMembers" class="col-form-label">Household Members:</label>
                            <div class="col-auto">
                                <input type="text" name="HouseholdMembers" id="HouseholdMembers" placeholder="Household Members" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-5 col-xl-2 px-0 pe-sm-2">
                            <label for="Sex" class="col-form-label">Sex:</label>     
                            <div class="col-auto">
                                <input type="text" name="Sex" id="Sex" placeholder="Sex" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-5  col-xl-2 px-0 ">
                            <label for="Age" class="col-form-label">Age:</label>
                            <div class="col-auto">
                                <input type="text" name="Age" id="Age" placeholder="Age" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center column-gap-5 mt-4">
                            <input type="submit" name="submit" value="Save" class="btn btn-primary fw-bold px-4">
                            <button class="btn btn-danger fw-bold px-4" id="clearId">Clear</button>
                        </div>
                </form>
                <div class="relieftable"></div>
                
            </div>
            
            <div class="row row-gap-5 d-none DisasterRiskDiv">
                <form class="disasterriskClass row d-flex flex-wrap mx-auto justify-content-center column-gap-lg-1 row-gap-md-2">
                        <div class="AC_Title d-flex py-2 col-12 col-sm-12 col-lg-10 mb-3">
                            <h5 class="m-auto text-white fw-bold">DISASTER RISK RECORD FORM</h5>
                        </div>
                        <input type="text" name="performed" value="<?php echo $admin?>" hidden>
                        <input type="text" name="activity" value="<?php echo $admin?> Input on Disaster Risk Form" hidden>
                        <div class="col-12 col-sm-6 col-lg-5 col-xl-3 px-0 pe-sm-2">
                            <label for="ResidenceName" class="col-form-label">Residence Name:</label>     
                            <div class="col-auto">
                                <input type="text" name="ResidenceName" id="ResidenceName" placeholder="Residence Name" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-5 col-xl-3 px-0 pe-xl-2">
                            <label for="HouseholdMembers" class="col-form-label">Household Members:</label>
                            <div class="col-auto">
                                <input type="text" name="HouseholdMembers" id="HouseholdMembers" placeholder="Household Members" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-5 col-xl-2 px-0 pe-sm-2">
                            <label for="Barangay" class="col-form-label">Barangay:</label>
                            <select name="Barangay" id="Barangay" class='col-auto form-select' onchange="convertAddress()">
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
                        <div class="col-12 col-sm-6 col-lg-5  col-xl-2 px-0 ">
                            <label for="Age" class="col-form-label">Age:</label>
                            <div class="col-auto">
                                <input type="text" name="Age" id="Age" placeholder="Age" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center column-gap-5 mt-4">
                            <input type="submit" name="submit" value="Save" class="btn btn-primary fw-bold px-4">
                            <input type="submit" name="clear" value="Clear" class="btn btn-danger fw-bold px-4">
                        </div>
                        <input type="text" name="latitude" id="latitude" hidden>
                        <input type="text" name="longitude" id="longitude" hidden>
                </form>
                <div class="drtable"></div>
            </div>
            
        </section>
    </main>
    <script>
        function convertAddress() {
            var addressSelect = document.getElementById('Barangay');
            var selectedOption = addressSelect.options[addressSelect.selectedIndex];
            var address = selectedOption.value;
            
            if (address) {
                // Replace 'YOUR_API_KEY' with your actual OpenCage Data Geocoding API key
                var apiKey = 'YOUR_API_KEY';
                var apiUrl = `https://api.opencagedata.com/geocode/v1/json?q=${encodeURI(address)}&key=29f46aee681943bd84e13b5914b4b64e`;

                fetch(apiUrl)
                    .then(response => response.json())
                    .then(data => {
                        if (data.results.length > 0) {
                            var latlng = data.results[0].geometry;
                            document.getElementById('latitude').value = latlng.lat;
                            document.getElementById('longitude').value = latlng.lng;
                        } else {
                            document.getElementById('latitude').value = 'Not found';
                            document.getElementById('longitude').value = 'Not found';
                        }
                    })
                    .catch(error => {
                        document.getElementById('latitude').value = 'Error';
                        document.getElementById('longitude').value = 'Error';
                    });
            }
        }
    </script>
</body>
    <?php include 'footer.php' ;?>
    
</html>

