<div class="our-clients">
    <div class="container">
        <div class="slider-items-products">
            <div id="our-clients-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col6">
                    <div class="item"> <a href="#"><img src="images/brand1.png" alt="Image" class="grayscale"></a> </div>

                    <div class="item"> <a href="#"><img src="images/brand2.png" alt="Image" class="grayscale"></a> </div>

                    <div class="item"> <a href="#"><img src="images/brand3.png" alt="Image" class="grayscale"></a> </div>

                    <div class="item"> <a href="#"><img src="images/brand4.png" alt="Image" class="grayscale"></a> </div>

                    <div class="item"> <a href="#"><img src="images/brand5.png" alt="Image" class="grayscale"></a> </div>

                    <div class="item"> <a href="#"><img src="images/brand6.png" alt="Image" class="grayscale"></a> </div>

                    <div class="item"> <a href="#"><img src="images/brand7.png" alt="Image" class="grayscale"></a> </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer style="background-color: grey;">
    <div class="container">
        <div class="row">
            <div class="footer-newsletter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-5">
                            <h3 class="">Sign up for newsletter</h3>
                            <span>Subscribe with us to get our latest news. </span>
                        </div>
                        <div class="col-md-5 col-sm-7">
                            <?php
                            if(isset($_POST['subscribe'])){
                              $fname=$_POST['fname'];
                                $mail=$_POST['mail'];

                                $sql="INSERT INTO subscribers(fname,mail) VALUES('$fname','$mail')";
                                $query=mysqli_query($conn,$sql);
                                if($query){
                                    echo"<div class='alert alert-success'>
                                    <button class='close' data-dismiss='alert'>&times;</button><strong>Hi $fname thanks for subscribing with us.</strong>
                                    </div>";
                                }
                                else{
                                    echo"<div class='alert alert-success'>
                                    <button class='close' data-dismiss='alert'>&times;</button><strong>Error encountered!! Please try again later. Thank you.</strong>
                                    </div>";
                                }
                            }
                            ?>
                            <form id="#" method="post" action="#">
                                <div class="newsletter-inner">
                                    <input style="border-radius: 2px" class="newsletter-email" name='fname' required="required" placeholder='Enter Full Name'/>
                                </div>
                                <div class="newsletter-inner">
                                    <input style="border-radius: 2px" class="newsletter-email" name='mail' required="required" placeholder='Enter Your Email'/>
                                </div>
                                <div class="newsletter-inner">
                                    <button style="border-radius: 2px" class="btn btn-primary" name='subscribe' type="submit" title="Subscribe"><i class="fa fa-send"></i> Subscribe</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-3 col-sm-5">
                            <h3 class="">KINDLY FOLLOW US ON THE FOLLOWING Online plartforms..</h3>
                            <span> </span>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="social">
                                <ul class="inline-mode">
                                    <li class="social-network fb"><a title="Connect us on Facebook" target="_blank" href="https://www.facebook.com/Day2Day-HOME-Experts-509385022735676/"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-network googleplus"><a title="Connect us on Google+" target="_blank" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="social-network tw"><a title="Connect us on Twitter" target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-network linkedin"><a title="Connect us on Linkedin" target="_blank" href="https://www.pinterest.com/"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="social-network instagram"><a title="Connect us on Instagram" target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-2 col-xs-12 col-lg-3 collapsed-block">
                <div class="footer-links">
                    <div class="tabBlock" id="TabBlock-4"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-coppyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12 coppyright"> Copyright &copy;<?php echo date('Y'); ?> DAY TO DAY HOME EXPERTS. All Rights Reserved. Designed By <strong> <a href="mailto:journalreagan@gmail.com">journalreagan@gmail.com</a></strong></div>
                <div class="col-sm-6 col-xs-12">
                    <div class="payment">
                        <ul>
                            <li><a href="#"><img title="Visa" alt="Visa" src="images/visa.png"></a></li>
                            <li><a href="#"><img title="Paypal" alt="Paypal" src="images/paypal.png"></a></li>
                            <li><a href="#"><img title="Discover" alt="Discover" src="images/discover.png"></a></li>
                            <li><a href="#"><img title="Master Card" alt="Master Card" src="images/master-card.png"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" class="totop"> </a>
<!-- End Footer -->

</div>

<!-- mobile menu -->
<div id="jtv-mobile-menu" class="jtv-mobile-menu">
    <ul>
        <li class=""><a href="index">Home</a></li>
        <li class=""><a href="about_us">About Us</a></li>
        <li class="custom-menu"><a>Trainings</a>
            <ul class="#">
                <li> <a href="child_care"> Child Care</a></li>
                <li> <a href="household_management">household management</a></li>
                <li> <a href="dish_cooking">Dish Cooking </a></li>
            </ul>
        </li>
        <li><a href="news_events">News & Events</a></li>
        <li><a href="contact_us">Contact us</a></li>
        <li><a href="register">Employer's Sign Up</a></li>
        <li><a href="helper_registration">Helpers's Register Here</a></li>
        <li><a href="login">Log In</a></li>

        <!--<li class=""><a href="shop_grid.php">Services</a>
            <ul class="">
                <li><a href="shop_grid.php">Bages</a>
                    <ul>
                        <li><a href="#">Bootes Bages</a></li>
                        <li><a href="#">Blazers</a></li>
                        <li><a href="#">Mermaid</a></li>
                    </ul>
                </li>
                <li><a href="shop_grid.php">Clothing</a>
                    <ul>
                        <li><a href="shop_grid.php">coats</a></li>
                        <li><a href="shop_grid.php">T-shirt</a></li>
                    </ul>
                </li>
                <li><a href="shop_grid.php">lingerie</a>
                    <ul>
                        <li><a href="shop_grid.php">brands</a></li>
                        <li><a href="shop_grid.php">furniture</a></li>
                    </ul>
                </li>
            </ul>
        </li>-->
    </ul>
</div>

<!-- jquery js -->
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- owl.carousel.min js -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>

<!-- Mean Menu js -->
<script type="text/javascript" src="js/jquery.meanmenu.min.js"></script>

<!--jquery-ui.min js -->
<script type="text/javascript" src="js/jquery-ui.js"></script>

<!--validator-->

<!--<script type="text/javascript" src="js/validation.js"></script>-->
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>
<script type="text/javascript" src="js/validator.js"></script>

<!-- countdown js -->
<script type="text/javascript" src="js/countdown.js"></script>

<!-- wow JS -->
<script type="text/javascript" src="js/wow.min.js"></script>

<!-- mobile menu JS -->
<script type="text/javascript" src="js/jtv-mobile-menu.js"></script>

<!-- main js -->
<script type="text/javascript" src="js/main.js"></script>

<!-- nivo slider js -->
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<!-- Hot Deals Timer 1-->
<script type="text/javascript">
    var dthen1 = new Date("11/25/17 11:59:00 PM");
    start = "08/04/16 03:02:11 AM";
    start_date = Date.parse(start);
    var dnow1 = new Date(start_date);
    if(CountStepper>0)
        ddiff= new Date((dnow1)-(dthen1));
    else
        ddiff = new Date((dthen1)-(dnow1));
    gsecs1 = Math.floor(ddiff.valueOf()/1000);

    var iid1 = "countbox_1";
    CountBack_slider(gsecs1,"countbox_1", 1);
</script>
</body>
</html>
