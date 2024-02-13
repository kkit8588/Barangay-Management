<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Forgot Password</title>

   <?php include 'header.php' ?>


</head>
<body>

<div class="login-container d-flex flex-column justify-content-between">
   <div class="hf-bg py-3"><h1 class="text-white text-center ">BAYAN NG STA. CRUZ, MARINDUQUE SYSTEM</h1></div>   
   <div class="form-container bg-transparent border-0 d-flex justify-content-center form-control">
      <form id="fpID" class="loginForm shadow-sm rounded-4 dow-sm py-5 px-4 d-flex flex-column row-gap-3" >
         
         <center><img src="./upload/logo.png" width="150" height="150"></center>
         <p class="mt-2 fw-bold text-secondary text-center">Please type your email to send the instructions</p>

         <div class="inputContainer d-flex align-items-center shadow-sm rounded">
            <input type="email" name="email" id="emailID" placeholder="Please enter your email" class="form-control form-control-lg rounded-0 rounded-start" required>
            <i class="fa-solid fa-envelope fs-3 px-3 text-white"></i>
         </div>
         <input type="submit" name="submit" value="Send Instructions" class="btn btn-outline-success fw-bold">
      </form>
   </div>
   <div class="hf-bg py-5"></div>
</div>

   <?php include 'footer.php'; ?>
   <script type="text/javascript">
      
        $('#fpID').submit(function(event) {
        event.preventDefault();

        var fpData = $(this).serialize();
        $.ajax({
            type: 'post',
            url: './src/sendmail.php',
            data: fpData,
            success: function() {
                Swal.fire({
                          title: 'Send Email Successfully',
                          icon: 'success',
                          confirmButtonColor: '#3085d6',
                          cancelButtonColor: '#d33',
                          confirmButtonText: 'Thank You!'
                });
            }
        });
    });

   </script>
</body>
</html>
