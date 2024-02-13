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
      <form id="cpID" class="loginForm shadow-sm rounded-4 dow-sm py-5 px-4 d-flex flex-column row-gap-3" >
         
         <center><img src="./upload/logo.png" width="150" height="150"></center>
         <h3 class="mt-2 fw-bold text-secondary text-center">Change Password</h3>
            <input type="email" name="email" value="<?php echo $_GET['email']?>" hidden>
         <div class="inputContainer d-flex align-items-center shadow-sm rounded">
            <input type="password" name="password" id="newpassword" placeholder="Type your new password" class="password form-control form-control-lg rounded-0 rounded-start" required>
            <i class="fa-solid fa-key fs-3 px-3 text-white"></i>
         </div>
         <div class="inputContainer d-flex align-items-center shadow-sm rounded">
            <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm your password" class="password form-control form-control-lg rounded-0 rounded-start" required>
            <i class="fa-solid fa-key fs-3 px-3 text-white"></i>
         </div>
         <div id="emailHelp" class="form-text text-danger fst-italic d-none">Your confirmation password is not the same as the new password*</div>
         <div class="d-flex ">
            <input type="checkbox" id="showPassword"><label class="ms-1 fw-bold" for="showPassword"><small>Show Password</small></label>
         </div>
         <input type="submit" name="submit" value="submit" class="btn btn-outline-success fw-bold">
         <a href="index.php" class="text-decoration-none">Login here</a>
      </form>
   </div>
   <div class="hf-bg py-5"></div>
</div>

   <?php include 'footer.php'; ?>
   <script type="text/javascript">
         $(document).ready(function () {
            const passwordInput = $(".password");
            const showPasswordCheckbox = $("#showPassword");

            showPasswordCheckbox.change(function () {
                if (showPasswordCheckbox.is(":checked")) {
                    // Change input type to "text" to show the password
                    passwordInput.attr("type", "text");
                } else {
                    // Change input type back to "password" to hide the password
                    passwordInput.attr("type", "password");
                }
            });


            $('#cpID').submit(function(event) {
              event.preventDefault();

              var cpData = $(this).serialize();
              $.ajax({
                  type: 'post',
                  url: './controller/cp-controller.php',
                  data: cpData,
                  dataType: 'json',
                  success: function(response) {
                        if (response.status == 'success') {
                            Swal.fire({
                                      text: response.message,
                                      icon: 'success',
                                      confirmButtonColor: '#3085d6',
                                      cancelButtonColor: '#d33',
                                      confirmButtonText: 'Thank You!'
                            });
                        }else if (response.status == 'error') {
                            Swal.fire({
                                      text: response.message,
                                      icon: 'error',
                                      confirmButtonColor: '#3085d6',
                                      cancelButtonColor: '#d33',
                                      confirmButtonText: 'Okay'
                            });
                        }            

                     }
               });
            });


             $('#confirmpassword').keyup(function(){

               var cp = $(this).val();
               var np = $('#newpassword').val();

               if (cp !== np) {
                     $('#emailHelp').removeClass('d-none');
                }else{
                     $('#emailHelp').addClass('d-none');
                }
             });
         });



   </script>
</body>
</html>
