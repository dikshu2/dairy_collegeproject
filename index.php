<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="Css_F/css/bootstrap.min.css">
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

  <?php
  include 'header.php';
  session_start();
  echo $_SESSION['name'];
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

<section>
  <div class="container">
    <div class="row">
    <div class="col-sm">
      <img src="" alt="" srcset="">
    </div>
  <div class="col-sm">col-sm</div>
  <div class="col-sm">col-sm</div>
  </div>
</section>
<?php
include 'footer.php'
?>
 </body>
</html>