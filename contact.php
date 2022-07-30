<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
    <script src="jscontact.js"></script>
    <?php
    include('header.php');
    ?>
</head>
<body>
    
    <section class="Contact py-5 ">
        <div class="container text -white py-5 ">
            <div class="row py-5 ">
                <div class="col-lg-8 m-auto text-center ">
                    <h1> Contact Us </h1>
                    <h6 style="color: rgb(189, 27, 27); "> Always Be In Touch With Us</h6>

                </div>
            </div>
            

                        <!-- <form action="contactjs.php" method="post" onsubmit="return submit()">
                        <input type="text" name="fname" id="name1" class="form-control bg-light " placeholder="First Name"><span id="uspan"></span>
                        <input type="text" name="lname" id="lastname2" class="form-control bg-light " placeholder="Last Name"><span id="lspan"></span>
                        <input type="text" name="email" id="umail3" class="form-control bg-light " placeholder="Enter Your Email"><span id="espan"></span>
                       <textarea class="form-control bg-light" name="message" placeholder="Enter Your Message " id="msg" cols="10 " rows="5"></textarea><span id="mspan"></span>
                        <input type="submit" value="Submit" name="submit" onclick="return submit()">
                                </form> -->
                        <!-- <div class="col-lg-7 "> -->
                        <form action="contactjs.php" method="post" onsubmit="return Submit()">
                            <div class="row ">
                                <div class="col-lg-6 ">
                                    <input type="text" name="fname" id="name1" class="form-control bg-light" placeholder="First Name" onkeyup="return Submit()" required><span id="uspan"></span>
                                </div>
                                <div class="col-lg-6 ">
                                    <input type="text" name="lname" id="lastname2" class="form-control bg-light" placeholder="Last Name" onkeyup="return Submit()" required><span id="lspan"></span>
                                </div><br><br>
                                <div class="col-lg-6 ">
                                    <input type="text" name="email" id="umail3" class="form-control bg-light" placeholder="Enter Your Email" onkeyup="return Submit()" required><span id="espan"></span>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-lg-12 py-3 ">
                                    <textarea class="form-control bg-light" name="message" placeholder="Enter Your Message " id="msg" cols="10" rows="5" onkeyup="return Submit()" required></textarea><span id="mspan"></span>
                                </div>
                            </div>
                            <input type="submit" value="Submit" name="submit" style="background-color: pink;" onclick="return Submit()">
                        </form>
                    </div>

                    <?php

                    if (isset($_GET['errmsg'])) {
                    ?>
                        <div class="alert alert-success">
                            <?php echo $_GET['errmsg'];
                            ?>
                        </div>
                    <?php  }
                    ?>

                </div>

            </div>
        </div>
    </section>
    <?php
    include('footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>


</body>

</html>