<?php

include 'connect.php';

session_start();

if (isset($_SESSION['admin'])) {
   $admin = $_SESSION['admin'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <?php include 'header.php' ?>


</head>
<body>

<div class="login-container d-flex flex-column justify-content-between">
   <div class="hf-bg py-3"><h1 class="text-white text-center ">BAYAN NG STA. CRUZ, MARINDUQUE SYSTEM</h1></div>   
   <div class="form-container bg-transparent border-0 d-flex justify-content-center form-control">
      <form id="loginFormID" class="loginForm shadow-sm rounded-4 dow-sm py-5 px-4 d-flex flex-column row-gap-3" >
         
         <center><img src="./upload/logo.png" width="150" height="150"></center>
         <div class="inputContainer d-flex align-items-center shadow-sm rounded">
            <input type="text" name="username" placeholder="enter your username" class="form-control form-control-lg rounded-0 rounded-start" required>
            <i class="fa-solid fa-user fs-3 px-3 text-white"></i>
         </div>

         <div class="inputContainer d-flex align-items-center shadow-sm rounded">
            <input type="password" name="password" placeholder="enter your password" class="form-control form-control-lg rounded-0 rounded-start" required>
            <i class="fa-solid fa-key fs-4 px-3 text-white"></i>
         </div>
         <input type="text" name="activity" value="Admin Logged In" hidden>
         <input type="submit" name="submit" value="Login Now" class="btn fw-bold" style="border: 2px solid #047fb2; color: #fff; background: #047fb2;" >
         <a href="forgotpassword.php" class="text-decoration-none">Forgot password?</a>
      </form>
   </div>
   <div class="hf-bg py-5"></div>
</div>
   
   <?php include 'footer.php' ?>
</body>
</html>