<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- CUSTOM JAVASCRIPT -->
  <script type="text/javascript" src="./assets/js/script.js"></script>
  <!-- BOOTSTRAP JS OFFLINE -->
  <script type="text/javascript" src="./plugins/bootstrap5/bootstrap.min.js"></script>
  <!-- FONT AWESOME OFFLINE -->
  <script type="text/javascript" src="./plugins/fontawesome/all.min.js"></script>
  <!-- JQUERY -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- SWEET ALERT -->


  <script>

   $(document).ready(function() {
    $('#loginFormID').submit(function(event) {
        event.preventDefault();

        var loginData = $(this).serialize();

        $.ajax({
            url: './controller/loginController.php',
            type: 'post',
            data: loginData,
            dataType: 'json',
            success: function(send) {
                if (send.status == 'Success') {
                    window.location.href="./admin/index.php";
                }else{
                    alert(send.message); 
                }
            }
        });
    });
});


  </script>


</body>
  
</html>