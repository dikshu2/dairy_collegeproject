<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- google font link -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Palette+Mosaic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Poppins:wght@300&display=swap" rel="stylesheet">
<!-- font awesome link -->
<script src="https://kit.fontawesome.com/62f5df6ae3.js" crossorigin="anonymous"></script>
<!-- css link -->
<link rel="stylesheet" href="style.css">
    <title>online vegetable store</title>
  </head>
  <body>

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
            <li class="nav-item dropdown">
              <a class="nav-link "  >product</a>
              <ul class="dropdown-content">
                <li><a href="vegetable.php">Vegetables</a></li>
                <li><a href="fruit.php">Fruits</a></li>
              </ul>
            </li>

            <li class="nav-item ">
              <a class="nav-link " href="about.php" >about</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#contact">contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="login.php">login</a>
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

<section class="main">
  <div class="container py-5">
    <div class="row py-5">
      <div class="col-lg-7 ">
          <h1 class="pt-5">Nature Has Always Cared For Us!</h1>
           <button class="btn1 mt-3">Explore</button>
        </div>
      </div>
  </div>
</section>

<section class="contact py-5" id="contact">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-5 m-auto text">
        <h1>Contact us</h1>
        <h6 style="color: red;"> Always Be In Touch With Us</h6>
      </div>
    </div>
    <div class="row py-5">
      <div class="col-lg-9 m-auto">
        <div class="row">
          <div class="col-lg-4">
            <h6>location</h6>
              <p>Kathmandu,Nepal<p>
      
            <h6>Phone</h6>
             <p>98601178545</p>
    
            <h6>email</h6>
              <p>abcd@gmail.com</p>
     
          </div>
          <div class="col-lg-7">
            <div class="row">
              <div class="col-lg-6">
                <input type="text" name="" class="form-cotrol bg-light" placeholder="enter firstname"id="">
              </div>
              <div class="col-lg-6">
                <input type="text" name="" class="form-cotrol bg-light" placeholder="enter lastname"id="">
              </div>
              <div class="row">
                  <div class="col-lg-12 py-3">
                    <textarea name="" class="form-control bg-light " id="" placeholder="write a message"cols="30" rows="5"></textarea>
                  </div>
              </div>
              <button class="btn1">submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
</section>

<section class="news py-6">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-9 m-auto text-center">
        <h1>stay with us</h1>
        <input type="text" name="" class="px-4" placeholder="Enter your email" id="">
        <button class="btn2 ">submit</button>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-11 py-4">
        <div class="row">
          <div class="col-lg-3">
            <h5 class="pb-3">CUSTOMER CARE</h5>
            <p>Regular</p>
            <p>On Time</p>
            <p>Always Care</p>
          </div>
          
          <div class="col-lg-3">
            <h5 class="pb-3">CUSTOMER CARE</h5>
            <p>Regular</p>
            <p>On Time</p>
            <p>Always Care</p>
          </div>

          <div class="col-lg-3">
            <h5 class="pb-3" >CUSTOMER CARE</h5>
            <p>Regular</p>
            <p>On Time</p>
            <p>Always Care</p>
          </div>
          <div class="col-lg-3">
            <h5 class="pb-3">CUSTOMER CARE</h5>
            <span><i class="fa-brands fa-facebook fa-2x"></i></span>
            <span><i class="fa-brands fa-instagram fa-2x"></i></span>
            <span><i class="fa-brands fa-twitter fa-2x"></i></span>
            
          </div>
        
      </div>
    </div>
    <div>
    <hr>
    <p>copyright@2022</p>
    </div>
  </div>
</section>
  </body>
</html>