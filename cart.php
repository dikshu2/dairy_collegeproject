
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
    <?php
    include('header.php')
    ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>

            <div class="col-lg-8">
                <table class="table">
                <thead class="text-center">
                    <tr>
                    <th scope="col">Serial No.</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Item Price</th>
                    <th scope="col">Quantity</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                <?php
                    $total=0;
                    if(isset($_SESSION['cart']))
                    {
                        foreach($_SESSION['cart'] as $key => $value)
                        {
                            $total=$total+$value['Price'];
                            echo"
                                <tr>
                                <td>1</td>
                                <td>$value[Item_Name]</td>
                                <td>$value[Price]</td>
                                <td><input type='number' value='$value[Quantity]' min='1' max='10'</td>
                                <td>
                                    <form action='manage_cart.php' method='POST'> 
                                        <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                    </form>
                                </td>
                                </tr>
                            ";
                        }
                    }
                ?>
                    
                </tbody>
                </table>

            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">   
                    <h4>Total:</h4>
                    <h5 clas="text-right"><?php echo $total ?></h5>
                    <form action="">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Cash On Delivery
                        </label>
                        </div>
                        <br>
                        <button class="btn btn-primary btn-block">Make Purchase</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>
</html>