<?php
  include('connect.php');
  $email = $_POST['email'];
  $password = $_POST['pass1'];
  $encryptedPassword = md5($password); 

  $query = "SELECT * FROM users WHERE email = '$email' AND password = '$encryptedPassword'";
  $result = mysqli_query($conn,$query);
  $count = mysqli_num_rows($result);
  if($count==1){
      $msg = "login successfull";
      session_start();
      $_SESSION['name'] = $email;
      echo $_SESSION['name'];
      header('Location:../index.php?msg='.$msg);
      
  }else{
    $msg = "Username and password does not match";
    header('Location:../login.php?errmsg='.$msg);
  }
?>