<?php include_once("include/header.php"); ?>
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>
           
            <li><strong>Contact Us</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 

  <!-- Main Container -->
  <section class="main-container col1-layout" style="background-image: url('images/page-background.png'); ">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-12">
          
          <div id="contact" class="page-content page-contact">
            <div class="row">
              <div class="col-xs-12 col-sm-6" id="contact_form_map">
                <h3 class="page-subheading">Let's get in touch</h3>
                <p>Kindly feel free to contact us anytime, we really value our users feedback for provision of quality service. Thanks.  </p>
                <br/>
                <ul>
                  <li><a href="about_us">Our Mission. CLICK HERE</a></li>
                  <li><a href="about_us">Our Vision. CLICK HERE</a></li>
                  <li><a href="about_us">Core Values. CLICK HERE</a></li>
                </ul>
                <br/>
                <ul class="store_info">
                  <li><i class="fa fa-home"></i>Day 2 Day Home Experts</li>
                  <li><i class="fa fa-phone"></i><span>+254738489589</span></li>
                  <li><i class="fa fa-fax"></i><span>+254700000000</span></li>
                  <li><i class="fa fa-envelope"></i>Email: <span><a href="#">day2dayhomeexperts@gmail.com</a></span></li>
                </ul>
              </div>
              <div class="col-sm-6" >
                <div class="panel panel-info">
                  <div class="panel-heading">Make an enquiry</div>
                  <div class="panel-body">

                    <?php
                    if(isset($_POST['submit'])){
                      $fullname=$_POST['fullname'];
                      $email=$_POST['email'];
                      $message=$_POST['message'];

                      $sql="INSERT INTO contact(fullname,email,message) VALUES ('$fullname','$email','$message')";
                      $query=mysqli_query($conn,$sql);
                      if($query){
                        echo"<div class='alert alert-success'>
                <button class='close' data-dismiss='alert'>&times;</button><strong>Hi $fullname thanks for contacting us. We'll get in touch soon.</strong>
                </div>";
                      }
                      else{
                        echo"<div class='alert alert-success'>
                <button class='close' data-dismiss='alert'>&times;</button><strong>Error encoutered!! Please try again later. Thank you.</strong>
                </div>";
                      }
                      mysqli_close($conn);
                    }
                    ?>
                    <form method="post" action="">
                      <div class="contact-form-box">
                        <div class="form-selector">
                          <label>Full Name</label>
                          <input style="border-radius: 3px;" name="fullname" type="text" class="form-control input-sm" required="required" id="name" />
                        </div>
                        <div class="form-selector">
                          <label>Email <span class="required">*</span></label>
                          <input style="border-radius: 3px;" name="email" type="text" class="form-control input-sm" id="email" />
                        </div>
                        <div class="form-selector">
                          <label>Message <span class="required">*</span></label>
                          <textarea name="message" class="form-control input-sm" id="message" placeholder="Your message/ question."></textarea>
                        </div>
                        <div class="form-selector">
                          <button  class="btn btn-info" name="submit" type="submit"><i class="fa fa-send"></i>&nbsp; <span>Send Message</span></button>
                          <button type="reset" class="btn btn-warning">Clear</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>


            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
  <!-- Main Container End -->
   <!-- our clients Slider -->
  <?php include_once("include/footer.php")?>
