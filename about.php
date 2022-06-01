<?php

include('header.php');
?>

   
     <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="icon.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
     
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="navbar.css"> 
     


    <title>About</title>
</head>

<body>

    <header id="header"> 
    <nav>
        <div class="logo">
            <a href="#">Hamro Dairy<span></span></a>
        </div>

        <ul class="navbar">
            <li><a href="home.php" data-navitem="Home">Home</a></li>
            <li><a href="contact.php" data-navitem="contact">Contact</a></li>
            <li><a href="product.php" data-navitem="product">Product</a></li>
            <li><a href="about.php" data-navitem="about">About</a></li>
            <li><a href="adminlogin.php" data-navitem="adminlodin">Adminlogin</a></li>
            <li>
            <?php
                            // session_start();
                            if(isset($_SESSION['uname'])){
                                ?>
                            <a class="nav-item dropdown">
                            <?php
                            echo $_SESSION['uname'];
                          ?>
                            </a>
                            <!-- <ul> -->
                                <li><a href="logout.php">Logout</a></li>
                            <!-- </ul> -->
                            <?php
                            }else{
                            ?>
                            <a href="login.php">Login</a>
                            <?php
                            }
                             ?>
        </li>
        </ul>

        <form class="d-flex">
            <input class="px-2 search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn0 " type="submit"><i class="fa fa-search"></i></button>
        </form>

        <div class="icon-links">
            <div id="customer-center"><span class="icon-phone-alt"></span></div>
            <div id="icon-shopping-cart"><span class="icon-cart-arrow-down"><span id="item-counter">0</span></div>
            <div id="login-or-signup"><span class="icon-user"></div>
            </div>
         </nav> 
    <div class="section">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1>About Us</h1>
                </div>
                <div class="content">
                    <h3>Dairy products or milk products, also known as lacticinia, are food products made from milk. </h3>
                    <p>Dairy products include common grocery store food items in the Western world such as yogurt, cheese and butter.
                        Many dairy product are available in our dairy like milk,butter, cheese, ice cream, yogurt, condensed and dried milk and many more.
                    </p>
                    <div class="button">
                        <a href="product.php">Explore More</a>
                    </div>
                </div>
                <div class="social">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="image-section">
            <img class="img-fluid mb-3" src="Newimage/pexels-charlotte-may-5947032.jpg"  style="height:400px"  alt="" >
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>


</body>

</html>