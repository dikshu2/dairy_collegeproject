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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
     
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="navbar.css">
     


    <title>Contact</title>
</head>

<body>

  
</body>
<section class="Contact py-5 ">
    <div class="container text -white py-5 ">
        <div class="row py-5 ">
            <div class="col-lg-8 m-auto text-center ">
                <h1> Contact Us </h1>
                <h6 style="color: rgb(189, 27, 27); "> Always Be In Touch With Us</h6>

            </div>
        </div>
        <div class="row " py-5>
            <div class="col-lg-9 m-auto ">
                <div class="row ">
                    <div class="col-lg-4 ">
                        <h6>LOCATION</h6>
                        <P>Balkumari-4 Lalitpur</P>

                        <h6>PHONE</h6>
                        <P> 9861578543</P>


                        <h6>EMAIL</h6>
                        <P> hamrodiary123@gmail.com</P>
                    </div>

                    

                    <div class="col-lg-7 ">
                    <form action="contactjs.php" method="post">
                        <div class="row ">
                            <div class="col-lg-6 ">
                                <input type="text " name="fname" class="form-control bg-light " placeholder="First Name ">
                            </div>
                            <div class="col-lg-6 ">
                                <input type="text " name="lname" class="form-control bg-light " placeholder="Last Name ">
                            </div><br><br>
                            <div class="col-lg-6 ">
                                <input type="text " name="email" class="form-control bg-light " placeholder="Enter Your Email ">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-lg-12 py-3 ">
                                <textarea class="form-control bg-light" name="message" placeholder="Enter Your Message " id=" " cols="10 " rows="5 "></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn1">Submit</button>
                    </div>
                    </form>

                    <?php

                        if(isset($_GET['errmsg'])){ ?>
                        <div class="alert alert-success">
                            <?php echo $_GET['errmsg']; ?>
                        </div>
                        <?php  }
                        ?>

                </div>
               
            </div>
        </div>
</section>
</form>
<section class="news ">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-9 ">
                    <h1>Join Our Secret Society</h1>
                    <!-- <input type="text " class="px-3 " placeholder="Enter Your Email ">
                    <button class="btn2 ">Submit</button> -->
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-11 ">
                    <div class="row ">
                        <div class="col-lg-3 ">
                            <h5 class="pb-3 ">CUSTOMER CARE</h5>
                            <p>Regular</p>
                            <p>On Time</p>
                            <p>Always</p>
                        </div>
                        <div class="col-lg-3 ">
                            <h5 class="pb-3 "> Our policies</h5>
                            <p>Buyer Protection Policy</p>
                            <p>Shipping & Delivery Policy</p>
                            <p>Cancellation Policy</p>
                            <p>Refund Policy</p>
                        </div>
                        <div class="col-lg-3 ">
                            <h5 class="pb-3 ">Express Delivery <i class="fa fa-truck" aria-hidden="true"></i></h5>
                            <p>Delivery your desired product at your doorstep on time</p>

                        </div>
                        <div class="col-lg-3 ">
                            <h5 class="pb-3 ">Quality Checked</h5>
                            <p>We are providing top quelity genuine product and service. </p>

                        </div>
                        <div class="col-lg-3 ">
                            <h5 class="pb-3 "> CUSTOMER CARE </h5>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <p class="text-center ">Copyright 2022 All rights reserved . </p>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>


</body>

</html>