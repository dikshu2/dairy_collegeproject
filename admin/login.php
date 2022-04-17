<?php
require('connection.inc.php');
require('functions.inc.php');
$msg='';

if (isset($_POST['submit'])){
   $email= get_safe_value($con,$_POST['email']);
   $password= get_safe_value($con,$_POST['password']);
   $sql= "select * from admin_users where email='$email' and password='$password'";
   $res=mysqli_query($con,$sql);
   $count=mysqli_num_rows($res);
   if($count>0){
      $_SESSION['ADMIN_LOGIN']='yes';
      $_SESSION['ADMIN_EMAIL']=$email;
      header('location:categories.php');
      die();
   }else{
     $msg="Please enter correct login details.";
   }
}
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>online vegetable store admin</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Palette+Mosaic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Poppins:wght@300&display=swap" rel="stylesheet">

<!-- <link rel="stylesheet" href="signup.css"> -->
<script src="https://kit.fontawesome.com/62f5df6ae3.js" crossorigin="anonymous"></script>
 
  </head>
  <body style="background-image: url('img/bk4.jpg');">
</head>
<body style="background-image: url('image/bk4.jpg');>
<section class="vh-100 bg-image" >
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-4">
              <h2 class="text-uppercase text-center mb-5">Admin Login</h2>

              <form action ="" method="post" >
              <div class="form-outline mb-4">
                  <label class="form-label" autocomplete="off" for="form3Example3cg">Your Email</label>
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" auto-complete="off" required />                  
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" id="myInput" class="form-control form-control-lg" name="password" required/>                 
                  
                  <input type="checkbox" onclick="myFunction()"> Show Password
                       <script>
                        function myFunction() {
                          var x = document.getElementById("myInput");
                          if (x.type === "password") {
                            x.type = "text";
                          } else {
                            x.type = "password";
                          }
                        }
                      </script>  
                </div>


                <div class="d-flex justify-content-center">
                  <button type="sumbit" name="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Login</button>
                </div>

              </form>
              <div class="field_error" style="color:red; margin-top:15px;">
                    <?php
                      echo $msg;
                    ?>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
                     
</body>

<script src="js/bootstrap.min.js"></script>

</body>
</html>