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
    <title>about</title>
  </head>
  <body>

<?php
include 'header.php'
?>

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

  <section class="about py-5">
  <h2 class="head">ABOUT US</h2>
                 <div class="para">
                    <p>  We are online vegetable & fruits store. We deliver fresh vegetables and fruits.<br> 
                         You can buy our produt, add to cart fill your address for delivery. We aim to<br> change 
                          the traditionally way of buying vegetables and fruits. You don't <br>have to waste your time 
                          on buying fruits and vegetables to a local markets<br> bargining with shopkeepers and bring your 
                          bag. With us you can select the <br> product you want and buy online.We offer classic deals with 
                          lowest prices and best quality products. Also, we take you to satisfy your hunger, we are then
                           there for you at the time of your adrenaline cravings! So, get along with us and enjoy the best
                            food you want!
                            Our goal is to make you healthy and serve you fresh products for lifetime.   
                     </p>
                     <a href="product.php"> Shop now </a>
               
                </div>
  </section>
<section class="contact py-5">
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

<?php
include 'footer.php'
?>

  </body>
</html>

