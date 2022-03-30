<?php
  $username = $_POST['fname'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $number = $_POST['number'];
  $pass1 = $_POST['pass1'];
  $pass2 = $_POST['pass2'];

  include('connect.php');
    if($email != null && $email != "") {
        $checkEmailUnique =  "SELECT * from users where email ='$email'";
        $finalRe = mysqli_query($conn, $checkEmailUnique);
        $numRows = mysqli_num_rows($finalRe);
        if($numRows >= 1){
            $msg =  "Email is already in use. Please use another email and proceed.";
            header('location:../signup.php?msg='.$msg);
        }
        else {
            if($pass1===$pass2){
                $encryptedPassword = md5($pass1);
                    $query = "INSERT INTO users(userName,email,address,phoneNo,password) 
                    VALUES ('$username','$email','$address','$number','$encryptedPassword')";
                    if(mysqli_query($conn,$query)){
                        $msg ="Signup sauccessfull";
                        header('location:../index.php?msg='.$msg);
                    }else{
                        $msg = "Error:".mysqli_error($conn);
                        header('location:../signup.php?errmsg='.$msg);
                    }
                    
                }else{
                    $msg = "password and confirm password does not match";
                    header('Location:../signup.php?errmsg='.$msg);
                }

            }
        }
?>