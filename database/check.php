<?php
  include('connect.php');
  $email = $_POST['email'];
  $password = $_POST['pass1'];
  $encryptedPassword = md5($password);  
  $query = "SELECT * FROM users WHERE email = '$email' AND password='$encryptedPassword'";
  $result = mysqli_query($conn,$query);

  if(mysqli_num_rows($result)==1){
    while($row=mysqli_fetch_assoc($result)){
      $msg = "login successfull";
      header('Location:../login.php?msg='.$msg);
    }
  }else{
    $msg = "Username and password does not match";
    header('Location:../login.php?errmsg='.$msg);
  }
?>