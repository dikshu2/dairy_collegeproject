
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="product.css">
    
    <title>Vegetables</title>
</head>
<body>

<?php
include 'header.php';
?>
<section class="product">
        <div class="row py-3">
            <div class="col-lg-3  py-3 text-center">
            <div class="card border-2 bg-light mb-2">
                <div class="card-body">
                    <img src="image/pea.jpg" class="img-fluid" alt="" srcset="">
                </div>
            </div>
            <h6>Pea</h6>
            <p>Rs.<span id="price">60</span></p>
            <div class="quantity">
                <button class="button minus-btn" type="button">-</button>
                <input type="text" id="1" value="1">
                <button class="button plus-btn" type="button">+</button>
            </div>
            <button type="submit"class="btn4">add to cart</button>
            </div>

            <div class="col-lg-3 py-3 text-center">
            <div class="card border-2 bg-light mb-2">
                <div class="card-body">
                    <img src="image/onion.jpg" class="img-fluid" alt="" srcset="">
                </div>
            </div>
            <h6>onion</h6>
            <p>Rs.<span id="price">70</span></p>
            <div class="quantity">
                <button class="button minus-btn" type="button">-</button>
                <input type="text" id="2" value="1">
                <button class="button plus-btn" type="button">+</button>
            </div>
            <button type="submit"class="btn4">add to cart</button>
            </div>

            <div class="col-lg-3 py-3  text-center">
            <div class="card border-2 bg-light mb-2">
                <div class="card-body">
                    <img src="image/capsicum.jpg" class="img-fluid" alt="" srcset="">
                </div>
            </div>
            <h6>Capsicum</h6>
            <p>Rs.<span id="price">60</span></p>
            <div class="quantity">
                <button class="button minus-btn" type="button">-</button>
                <input type="text" id="price" value="1">
                <button class="button plus-btn" type="button">+</button>
            </div>
            <button type="submit"class="btn4">add to cart</button>
            </div>

            <div class="col-lg-3  py-3 text-center">
            <div class="card border-2 bg-light mb-2">
                <div class="card-body">
                    <img src="image/carrot.jpg" class="img-fluid" alt="" srcset="">
                </div>
            </div>
            <h6>carrot</h6>
            <p>Rs50 per kg</p>
            <button type="submit"class="btn4">add to cart</button>
            </div>
            
            <div class="col-lg-3  py-3 text-center">
            <div class="card border-2 bg-light mb-2">
                <div class="card-body">
                    <img src="image/tomato.jpg" class="img-fluid" alt="" srcset="">
                </div>
            </div>
            <h6>Tomato</h6>
            <p>Rs90 per kg</p>
            <button type="submit"class="btn4">add to cart</button>
            </div>

            <div class="col-lg-3  py-3 text-center">
            <div class="card border-2 bg-light mb-2">
                <div class="card-body">
                    <img src="image/broccoli.png" class=""height="220px" alt="" srcset="">
                </div>
            </div>
            <h6>Broccoli</h6>
            <p>Rs80 per kg</p>
            <button type="submit"class="btn4">add to cart</button>
            </div>

            <div class="col-lg-3 py-3 text-center">
            <div class="card border-2 bg-light mb-2">
                <div class="card-body">
                    <img src="image/potato.png" class="" height="220px"alt="" srcset="">
                </div>
            </div>
            <h6>potato</h6>
            <p>Rs40 per kg</p>
            <button type="submit"class="btn4">add to cart</button>
            </div>

            <div class="col-lg-3 py-3 text-center">
            <div class="card border-2 bg-light mb-2">
                <div class="card-body">
                    <img src="image/lemon.png" class=""height="220px" alt="" srcset="">
                </div>
            </div>
            <h6>lemon</h6>
            <p>Rs70 per kg</p>
            <button type="submit"class="btn4">add to cart</button>
            </div>
            
        </div>
        
    </section>

<?php
include 'footer.php'
?>
    
</body>
<script src="product.js"></script>
</html>

