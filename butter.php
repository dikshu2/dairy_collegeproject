
<!-- <?php
include 'header .php';
?>  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="product.css">
    
    <title>Butter</title>
</head>
<body>


<section class="product">
    <div class="row py-3">
        <div class="col-lg-3  py-3 text-center">
            <form action="manage_cart.php" method="POST">
                <div class="card border-2 bg-light mb-2">
                    <div class="card-body">
                        <img src="Newimage/butter.jpg" class="img-fluid" alt="" srcset="">
                    </div>
                </div>
                <h6>Butter</h6>
                <p>Rs. 400per kg</p>
                <!-- <div class="quantity">
                    <button class="button minus-btn" type="button">-</button>
                    <input type="text" id="1" value="1">
                    <button class="button plus-btn" type="button">+</button>
                </div> -->
                <button type="submit" name="Add_To_Cart" class="btn4">ADD TO CART</button>
                <input type="hidden" name="Item_Name" value="Butter">
                <input type="hidden" name="Price" value="400">
            </form>
        </div>

        <div class="col-lg-3 py-3 text-center">
            <form action="manage_cart.php" method="POST">
                <div class="card border-2 bg-light mb-2">
                    <div class="card-body">
                        <img src="Newimage/ddcghee.jpg" class="img-fluid" alt="" srcset="">
                    </div>
                </div>
                <h6>DDCGhee</h6>
                <p>Rs. 800per kg</p>
                <!-- <div class="quantity">
                    <button class="button minus-btn" type="button">-</button>
                    <input type="text" id="2" value="1">
                    <button class="button plus-btn" type="button">+</button>
                </div> -->
                <button type="submit" name="Add_To_Cart" class="btn4">ADD TO CART</button>
                <input type="hidden" name="Item_Name" value="DDCGhee">
                <input type="hidden" name="Price" value="800">
            </form>
        </div>

        <div class="col-lg-3 py-3  text-center">
            <form action="manage_cart.php" method="POST"method="POST">
                <div class="card border-2 bg-light mb-2">
                    <div class="card-body">
                        <img src="Newimage/dallaghee.jpg" class="img-fluid" alt="" srcset="">
                    </div>
                </div>
                <h6>Dallaghee</h6>
                <p>Rs. 700 per kg</p>
                <!-- <div class="quantity">
                    <button class="button minus-btn" type="button">-</button>
                    <input type="text" id="price" value="1">
                    <button class="button plus-btn" type="button">+</button>
                </div> -->
                <button type="submit" name="Add_To_Cart" class="btn4">ADD TO CART</button>
                <input type="hidden" name="Item_Name" value="Dallaghee">
                <input type="hidden" name="Price" value="60">
            </form> 
        </div>

         
            
         

         
            
    </div>
</section>

<!-- <?php
include 'footer.php'
?> -->
    
</body>
 <!-- <script src="product.js"></script>  -->
</html>

