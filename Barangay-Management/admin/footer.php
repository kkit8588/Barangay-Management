<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

  <!-- JQUERY -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- CUSTOM JAVASCRIPT -->
  <script type="text/javascript" src="../assets/js/script.js"></script>
  <!-- BOOTSTRAP JS OFFLINE -->
  <script type="text/javascript" src="../plugins/bootstrap5/bootstrap.min.js"></script>
  <!-- FONT AWESOME OFFLINE -->
  <script src="../plugins/fontawesome/all.min.js" crossorigin="anonymous"></script>
  
  <!-- TABLE DESIGN AND SEARCH START-->
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/zf/dt-1.10.18/b-1.5.2/b-colvis-1.5.2/cr-1.5.0/kt-2.4.0/r-2.2.2/datatables.min.js"></script>
  <!-- TABLE DESIGN AND SEARCH END-->

  <script type="text/javascript">
  $(document).ready(function() {
    /*==================================
    clear btn
    ==================================*/
    $('#clearId').click(function () {
        $('input.form-control').val(''); 
    });
    /*==================================
      //VACCINATION FORM AND TABLE
    ==================================*/
      $('.vaccinationsClass').submit(function(event) {
          event.preventDefault();

          var vacData = $(this).serialize();

          $.ajax({
              url: '../controller/vacController.php',
              type: 'post',
              data: vacData,
              success: function() {
                  vacTable();
                  $('input.form-control').val('');
              }
          });
      });

      $('#VaccinationsBtn').click(function () {
                $('.VaccinationDiv').removeClass('d-none');
                $('.PregnancyDiv, .FeedingDiv, .ReliefDiv, .HealthMonitoringDiv, .DisasterRiskDiv').addClass('d-none');
                vacTable();
            });

      function vacTable() {
       $.ajax({
              type: 'POST',
              url: 'Table-Vaccination.php',
              success: function (data) {
                  $('.vactable').html(data);
                  
              },
          });
      }
      vacTable()
    /*==================================
          PREGNANCY FORM AND TABLE
    ==================================*/
      $('.pregnancyClass').submit(function(event) {
          event.preventDefault();

          var pregData = $(this).serialize();

          $.ajax({
              url: '../controller/pregController.php',
              type: 'post',
              data: pregData,
              success: function() {
                  pregTable();
                  $('input.form-control').val('');
              }
          });
      });

      $('#PregnancyBtn').click(function () {
                $('.PregnancyDiv').removeClass('d-none');
                $('.VaccinationDiv, .FeedingDiv, .ReliefDiv, .HealthMonitoringDiv, .DisasterRiskDiv').addClass('d-none');
                pregTable();
            });

      function pregTable() {
       $.ajax({
              type: 'POST',
              url: 'Table-Pregnancy.php',
              success: function (data) {
                  $('.pregtable').html(data)
              },
          });
      }
      pregTable()
    /*==================================
          FEEDING FORM AND TABLE
    ==================================*/
      $('.feedingClass').submit(function(event) {
          event.preventDefault();

          var feedData = $(this).serialize();

          $.ajax({
              url: '../controller/feedController.php',
              type: 'post',
              data: feedData,
              success: function() {
                  feedTable();
                  $('input.form-control').val('');
              }
          });
      });

      $('#FeedingBtn').click(function () {
                $('.FeedingDiv').removeClass('d-none');
                $('.VaccinationDiv, .PregnancyDiv, .ReliefDiv, .HealthMonitoringDiv, .DisasterRiskDiv').addClass('d-none');
                feedTable();
            });

      function feedTable() {
       $.ajax({
              type: 'POST',
              url: 'Table-Feeding.php',
              success: function (data) {
                  $('.feedtable').html(data)
              },
          });
      }
      feedTable()
    /*==================================
      HEALTH MONITORING FORM AND TABLE
    ==================================*/
      $('.healthmonitoringClass').submit(function(event) {
          event.preventDefault();

          var hmData = $(this).serialize();

          $.ajax({
              url: '../controller/hmController.php',
              type: 'post',
              data: hmData,
              success: function() {
                  hmTable();
                  $('input.form-control').val('');

              }
          });
      });

      $('#HealthMonitoringBtn').click(function () {
                $('.HealthMonitoringDiv').removeClass('d-none');
                $('.VaccinationDiv, .PregnancyDiv, .FeedingDiv, .ReliefDiv, .DisasterRiskDiv').addClass('d-none');
                  hmTable()
            });

      function hmTable() {
       $.ajax({
              type: 'POST',
              url: 'Table-Health-Monitoring.php',
              success: function (data) {
                  $('.hmtable').html(data)
              },
          });
      }
      hmTable()
    /*==================================
           RELIEF FORM AND TABLE
    ==================================*/
      $('.reliefClass').submit(function(event) {
          event.preventDefault();

          var reliefData = $(this).serialize();

          $.ajax({
              url: '../controller/reliefController.php',
              type: 'post',
              data: reliefData,
              success: function() {
                  reliefTable();
                  $('input.form-control').val('');

              }
          });
      });


      $('#ReliefBtn').click(function () {
          $('.ReliefDiv').removeClass('d-none');
          $('.VaccinationDiv, .PregnancyDiv, .FeedingDiv, .HealthMonitoringDiv, .DisasterRiskDiv').addClass('d-none');
           reliefTable()
      });

      function reliefTable() {
       $.ajax({
              type: 'POST',
              url: 'Table-Relief.php',
              success: function (data) {
                  $('.relieftable').html(data)
              },
          });
      }
      reliefTable()
    /*==================================
        DISASTER RISK FORM AND TABLE
    ==================================*/
      $('.disasterriskClass').submit(function(event) {
          event.preventDefault();

          var drData = $(this).serialize();

          $.ajax({
              url: '../controller/drController.php',
              type: 'post',
              data: drData,
              success: function() {
                  drTable();
                  $('input.form-control').val('');

              }
          });
      });

      $('#DisasterRiskBtn').click(function () {
                $('.DisasterRiskDiv').removeClass('d-none');
                $('.VaccinationDiv, .PregnancyDiv, .FeedingDiv, .ReliefDiv, .HealthMonitoringDiv').addClass('d-none');
                drTable();
            });

      function drTable() {
       $.ajax({
              type: 'POST',
              url: 'Table-Disaster-Risk.php',
              success: function (data) {
                  $('.drtable').html(data)
              },
          });
      }
      drTable()



      /*==================================
          ADD and EDIT RESIDENT FORM
      ==================================*/
      $('.addResForm').submit(function(event) {
          event.preventDefault();

          var arData = $(this).serialize();

          $.ajax({
              url: '../controller/addResident.php',
              type: 'post',
              data: arData,
              success: function() {
                  resTable();
                  $('input.form-control').val('');

              }
          });
      });
      $('.editResForm').submit(function(event) {
          event.preventDefault();

          var arData = $(this).serialize();

          $.ajax({
              url: '../controller/editResident.php',
              type: 'post',
              data: arData,
              success: function() {
                  resTable();
                  $('input.form-control').val('');

              }
          });
      });
      
      $('.deleteForm').submit(function(event) {
          event.preventDefault();

          var dataId = $(this).serialize();
          $.ajax({
              url: '../controller/deleteController.php',
              type: 'post',
              data: dataId,
              success: function() {
                  resTable();
                  $('input.form-control').val('');
                  $('#deleteModal').modal('hide');

              }
          });
      });
       function resTable() {
       $.ajax({
              type: 'POST',
              url: 'Table-Resident.php',
              success: function (data) {
                  $('.residenttable').html(data)
              },
          });
      }
      resTable()

  });
  
  /*==================================
          HOME|ORG TABLE
  ==================================*/
  $(document).ready(function() {
    //ORG
      $('.orgClass').submit(function(event) {
          event.preventDefault();

          var orgData = $(this).serialize();

          $.ajax({
              url: '../controller/orgController.php',
              type: 'post',
              data: orgData,
              success: function() {
              }
          });
      });

    //HOME
      $('.homeForm').submit(function(event) {
          event.preventDefault();

          var homeData = $(this).serialize();

          $.ajax({
              url: '../controller/homeController.php',
              type: 'post',
              data: homeData,
              success: function() {
                homeContainer()
                $('#homeModal').modal('hide');
              }
          });
      });
      function homeContainer(){
          $.ajax({
              url: 'homeOutput.php',
              type: 'post',
              success: function(output) {
                $('.homeContainer').html(output)
              }
          });
      }
      homeContainer()
  });


  </script>
  
  
</body>
  
</html>