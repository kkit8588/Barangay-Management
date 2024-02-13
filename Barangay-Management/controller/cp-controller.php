<?php

include '../connect.php';

   $email  = $_POST['email'];
   $pass = $_POST['password'];
   $cpass = $_POST['confirmpassword'];

   //For validation
   $sqlSelect = mysqli_query($conn, "SELECT * FROM admin WHERE password = '$pass' AND password = '$cpass' ");
   $output=[];

   if(mysqli_num_rows($sqlSelect) > 0){
      $output['status'] = 'error';
      $output['message'] = 'This is your old password!';

   }else{

      $sqlUpdate = mysqli_query($conn, "UPDATE admin SET password = '$pass' WHERE email = '$email'");
      $output['status'] = 'success';
      $output['message'] = 'Change password successfully!';

   }

echo json_encode($output);

?>