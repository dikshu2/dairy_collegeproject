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
<link rel="stylesheet" href="about.css">
    <title>about</title>
    
     <!--slider -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  
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

 <div class="section">
   <div class="container">
     <div class="title">
        <h2 class="head">ABOUT US</h2>
     </div>
     <!-- <div class="content">
       <div class="image-section">
             <img src="image/bk5.jpg" alt="" srcset="" >
          </div> -->

           <div id="slide-wrap">
        <section class="image-section">
          <ul class="slider1">
            <li><img src="image/bk6.jpg" height="300px" width="100%" alt=""></li>
            <li><img src="image/bk5.jpg" height="350px" width="100%" alt=""></li>
            <li><img src="image/bk3.jpg" height="350px" width="100%" alt=""></li>
          </ul>
        </section>
      <br>
    
     
       <div class="article">
          <p> We are online vegetable & fruits store. We deliver fresh vegetables and fruits.<br> 
              You can buy our produt, add to cart fill your address for delivery. We aim to<br> 
              change the traditionally way of buying vegetables and fruits.
          </p>

          <p>You don't have to waste your time on buying fruits and vegetables to a local <br>
             markets bargining with shopkeepers and bring your bag. With us you can <br> 
             select the product you want and buy online.We offer classic deals with <br>
             lowest prices and best quality products.Also, we take you to satisfy  your <br>
             hunger,we are then there for you at the time of your adrenaline cravings! <br>
          </p>

          <p> Our goal is to make you healthy and serve you fresh products for lifetime. 
              <br>So, get along with us and enjoy the bestfood you want!   
          </p>
          <div class="button">
         <a href="vegetable.php">Shop Now</a>
       </div>
       </div> 
      </div>
   </div>
 </div>
<div>
<br>
<<<<<<< HEAD
<br>
=======
>>>>>>> 39796f3ec9c5a26a1a81e1f20f3fd0aada248f1e
<?php
include 'footer.php'
?>
</div>

  </body>

  <!-- SCRIPTS -->
  <script>
    $(document).ready(function(){
      $('.slider1').bxSlider({
        mode: 'fade',
      });
      $('.slider2').bxSlider({
        mode: 'fade',
      });
      $('.slider3').bxSlider({
        mode: 'fade',
      });
    });
  </script>
</html>

