<?php
  $name = $_POST['fname'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $pass1 = $_POST['pass1'];
  $pass2 = $_POST['pass2'];
   if($pass1===$pass2){
       $encryptedPassword = md5($pass1);
     include('connect.php');
     $query = "INSERT INTO users(userName,email,phoneNo,password) 
     VALUES ('$name','$email','$number','$encryptedPassword')";
     if(mysqli_query($conn,$query)){
         $msg ="signup successfull";
         header('location:../index.php?msg='.$msg);
     }else{
         $msg = "Error:".mysqli_error($conn);
         header('location:../signup.php?errmsg='.$msg);
     }
    
   }else{
       $msg = "password and confirm password does not match";
       header('Location:../signup.php?errmsg='.$msg);
   }

   function validateUsernam() {

    $username = $_POST['fname'];
    $email = $_POST['email'];

    if($username != null or $username != "") {
        $checkUsernameUnique =  "SELECT count(id) from users where username ='$username'";

        if($checkUsernameUnique > 0) {
            echo "Username is already in use. Please use another username and proceed";
        }

    }

    if($email != null or $email != "") {
        $emailUnique =  "SELECT count(id) from users where email ='$email'";

        if($emailUnique > 0) {
            echo "Email is already in use. Please use another email and proceed";
        }

    }


   }
?>