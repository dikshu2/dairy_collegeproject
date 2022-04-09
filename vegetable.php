
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
            <form action="manage_cart.php" method="POST">
                <div class="card border-2 bg-light mb-2">
                    <div class="card-body">
                        <img src="image/pea.jpg" class="img-fluid" alt="" srcset="">
                    </div>
                </div>
                <h6>Pea</h6>
                <p>Rs.<span class="price">60</span></p>
                <div class="quantity">
                    <button class="button minus-btn" type="button">-</button>
                    <input type="text" id="1" value="1">
                    <button class="button plus-btn" type="button">+</button>
                </div>
                <button type="submit" name="Add_To_Cart" class="btn4">add to cart</button>
                <input type="hidden" name="Item_Name" value="Pea">
                <input type="hidden" name="Price" value="60">
            </form>
        </div>

        <div class="col-lg-3 py-3 text-center">
            <form action="manage_cart.php" method="POST">
                <div class="card border-2 bg-light mb-2">
                    <div class="card-body">
                        <img src="image/onion.jpg" class="img-fluid" alt="" srcset="">
                    </div>
                </div>
                <h6>Onion</h6>
                <p>Rs.<span class="price">70</span></p>
                <div class="quantity">
                    <button class="button minus-btn" type="button">-</button>
                    <input type="text" id="2" value="1">
                    <button class="button plus-btn" type="button">+</button>
                </div>
                <button type="submit" name="Add_To_Cart" class="btn4">add to cart</button>
                <input type="hidden" name="Item_Name" value="Onion">
                <input type="hidden" name="Price" value="70">
            </form>
        </div>

        <div class="col-lg-3 py-3  text-center">
            <form action="manage_cart.php" method="POST"method="POST">
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
                <button type="submit" name="Add_To_Cart" class="btn4">add to cart</button>
                <input type="hidden" name="Item_Name" value="Capsicum">
                <input type="hidden" name="Price" value="60">
            </form> 
        </div>

        <div class="col-lg-3  py-3 text-center">
            <form action="manage_cart.php" method="POST"method="POST">
                <div class="card border-2 bg-light mb-2">
                    <div class="card-body">
                        <img src="image/carrot.jpg" class="img-fluid" alt="" srcset="">
                    </div>
                </div>
                <h6>Carrot</h6>
                <p>Rs60 per kg</p>
                <button type="submit" name="Add_To_Cart" class="btn4">add to cart</button>
                <input type="hidden" name="Item_Name" value="Carrot">
                <input type="hidden" name="Price" value="60">
            </form>
        </div>
            
        <div class="col-lg-3  py-3 text-center">
            <form action="manage_cart.php" method="POST"method="POST">
                <div class="card border-2 bg-light mb-2">
                    <div class="card-body">
                        <img src="image/tomato.jpg" class="img-fluid" alt="" srcset="">
                    </div>
                </div>
                <h6>Tomato</h6>
                <p>Rs90 per kg</p>
                <button type="submit" name="Add_To_Cart" class="btn4">add to cart</button>
                <input type="hidden" name="Item_Name" value="Tomato">
                <input type="hidden" name="Price" value="90">
            </form>
        </div>

        <div class="col-lg-3  py-3 text-center">
            <form action="manage_cart.php" method="POST"method="POST">
                <div class="card border-2 bg-light mb-2">
                    <div class="card-body">
                        <img src="image/broccoli.png" class=""height="220px" alt="" srcset="">
                    </div>
                </div>
                <h6>Broccoli</h6>
                <p>Rs80 per kg</p>
                <button type="submit" name="Add_To_Cart" class="btn4">add to cart</button>
                <input type="hidden" name="Item_Name" value="Broccoli">
                <input type="hidden" name="Price" value="80">
            </form>
        </div>

        <div class="col-lg-3 py-3 text-center">
            <form action="manage_cart.php" method="POST"method="POST">
                <div class="card border-2 bg-light mb-2">
                    <div class="card-body">
                        <img src="image/potato.png" class="" height="220px"alt="" srcset="">
                    </div>
                </div>
                <h6>Potato</h6>
                <p>Rs40 per kg</p>
                <button type="submit" name="Add_To_Cart" class="btn4">add to cart</button>
                <input type="hidden" name="Item_Name" value="Potato">
                <input type="hidden" name="Price" value="40">
            </form>
        </div>

        <div class="col-lg-3 py-3 text-center">
            <form action="manage_cart.php" method="POST"method="POST">
                <div class="card border-2 bg-light mb-2">
                    <div class="card-body">
                        <img src="image/lemon.png" class=""height="220px" alt="" srcset="">
                    </div>
                </div>
                <h6>Lemon</h6>
                <p>Rs50 per kg</p>
                <button type="submit" name="Add_To_Cart" class="btn4">add to cart</button>
                <input type="hidden" name="Item_Name" value="Lemon">
                <input type="hidden" name="Price" value="50">
            </form>
        </div>
            
    </div>
        
</section>

<?php
include 'footer.php'
?>
    
</body>
<script src="product.js"></script>
</html>

