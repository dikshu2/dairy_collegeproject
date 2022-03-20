<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Palette+Mosaic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Poppins:wght@300&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="signup.css"> -->
<script src="https://kit.fontawesome.com/62f5df6ae3.js" crossorigin="anonymous"></script>
    <title>online vegetable store</title>
  </head>
  <body style="background-image: url('image/bk4.jpg');">
<!-- navbar -->
<div class="bc">
    <nav class="navbar navbar-expand-lg ">
  <div class="container">
    <a class="navbar-brand" href="index.php">Vege</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active"  href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">product</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="#" >
           about
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="cart.php"><i class="fa-solid fa-cart-shopping fa-1x"></i></a>
        </li>
      </ul>
      
      <form class="d-flex">
        <input class="px-2 search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>

<!-- form -->
<section class="vh-100 bg-image" >
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-4">
              <h2 class="text-uppercase text-center mb-5">Login</h2>

              <form action ="database/check.php" method="post" >

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg" name="email">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg" name="pass1">Password</label>
                </div>


                <div class="d-flex justify-content-center">
                  <button type="sumbit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Login</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Create an account <a href="signup.php" class="fw-bold text-body"><u>Sign Up here</u></a></p>
              </form>

              <?php

                        if(isset($_GET['errmsg'])){ ?>
                          <div class="alert alert-danger">
                              <?php echo $_GET['errmsg']; ?>
                          </div>
                      <?php  }
                     ?>
                     <?php

                        if(isset($_GET['msg'])){ ?>
                          <div class="alert alert-success">
                              <?php echo $_GET['msg']; ?>
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
                     
</body>

<script src="js/bootstrap.min.js"></script>

</html>