<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- css link -->
    <link rel="stylesheet" href="style.css">
<!-- google font link -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Palette+Mosaic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Poppins:wght@300&display=swap" rel="stylesheet">
<!-- font awesome link -->
<script src="https://kit.fontawesome.com/62f5df6ae3.js" crossorigin="anonymous"></script>
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
        <li class="nav-item">
          <a class="nav-link" href="#">product</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="about.php" >about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">contact</a>
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

<section class="product">
        <div class="row py-3">
            <div class="col-lg-3  py-3 text-center">
            <div class="card border-2 bg-light mb-2">
                <div class="card-body">
                    <img src="image/product-3.jpg" class="img-fluid" alt="" srcset="">
                </div>
            </div>
            <h6>pea</h6>
            <p>Rs60 per kg</p>
            <button type="submit"class="btn4">add to cart</button>
            </div>

            <div class="col-lg-3 py-3 text-center">
            <div class="card border-2 bg-light mb-3">
                <div class="card-body">
                    <img src="image/product-2.jpg" class="img-fluid" alt="" srcset="">
                </div>
            </div>
            <h6>strawberry</h6>
            <p>Rs70 per kg</p>
            <button type="submit"class="btn4">add to cart</button>
            </div>

            <div class="col-lg-3 py-3  text-center">
            <div class="card border-2 bg-light mb-2">
                <div class="card-body">
                    <img src="image/product-1.jpg" class="img-fluid" alt="" srcset="">
                </div>
            </div>
            <h6>Capsicum</h6>
            <p>Rs60 per kg</p>
            <button type="submit"class="btn4">add to cart</button>
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