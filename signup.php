<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="Css_F/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Palette+Mosaic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Poppins:wght@300&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="signup.css"> -->
<script src="https://kit.fontawesome.com/62f5df6ae3.js"></script>
    <title>online vegetable store</title>
  </head>
  <body style="background-image: url('image/bk4.jpg');">

  <?php
include 'header.php'
?>

<!-- form -->
<section class="vh-100 bg-image" >
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-4">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form method="POST" action="database/signup.php" onsubmit=" return validateForm()">

              <form action="database/signup.php" method="post">

              <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1cg">Full Name</label>
                  <input type="text" id=""  name="fullname" class="form-control form-control-lg" autocomplete="off" required>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1cg">UserName</label>
                  <input type="text" id=""  name="fname" class="form-control form-control-lg" autocomplete="off"  pattern="^[A-Za-z][A-Za-z0-9_]{7,29}$" title=" username can be alphabets, numbers or an underscore"required/>
                 </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg" >Your Email</label>
                  <input type="email" id="" name="email" class="form-control form-control-lg" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/>
                 </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg" >Address</label>
                  <input type="text" id="" name="address" class="form-control form-control-lg" autocomplete="off" required/>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg" >Phone Number</label>
                  <input type="number" id="" name="number" class="form-control form-control-lg"  pattern="/^\+?([0-9]{2})\)?[-]?([0-9]{3})?[-]?([0-9]{3})?[-]?([0-9]{4})$/" required/>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" id="myInput" name="pass1" class="form-control form-control-lg" name="password"
                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
                   <!-- <i class="bi bi-eye-slash" id="togglePassword"onclick="myFunction()"></i> -->
                   <input type="checkbox" onclick="myFunction()">Show Password
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

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cdg" >Confirm password</label>  
                <input type="password" id="" name="pass2" class="form-control form-control-lg" required/>   
                </div>

                <div class="d-flex justify-content-center">
                  <button type="sumbit" name ="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>
              </form>

              <?php
                        if(isset($_GET['errmsg'])){ ?>
                          <div class="alert alert-danger">
                              <?php echo $_GET['errmsg']; ?>
                          </div>
                      <?php  }
                     ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="js/bootstrap.min.js"></script>
</body>


</html>