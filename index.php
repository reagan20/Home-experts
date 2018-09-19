<?php
include_once("dbconnect.php");
?>
<?php include_once("include/header.php");?>

  <div class="main-slider-area">
    <div class="container">
      <div class="row">
        <div class="col-md-1 col-xs-1"></div>
        <div class="col-md-10 col-xs-10">
          <!-- Main Slider -->
          <div class="main-slider">
            <div class="slider">
              <div id="mainSlider" class="nivoSlider slider-image">
                <img src="images/slider/s1.PNG" alt="main slider" title="#htmlcaption1"/>
                <img src="images/slider/s2.PNG" alt="main slider" title="#htmlcaption2"/>
                <img src="images/slider/s3.PNG" alt="main slider" title="#htmlcaption2"/>
                <img src="images/slider/s4.PNG" alt="main slider" title="#htmlcaption1"/>
              </div>
              <!-- Slider Caption 1 -->
              <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
                <div class="slider-progress"></div>
                <div class="slide-text">
                  <div class="middle-text">
                    <div class="cap-dec">
                      <h2 class="cap-dec wow fadeInUp animated" data-wow-duration="1.1s" data-wow-delay="0s">Professional House Helpers Now Available.</h2>
                      <h1 class="cap-dec wow fadeInUp animated" data-wow-duration="2.3s" data-wow-delay="0s">Discover greate helpers today</h1>
                      <!--<p class="cap-dec wow lightSpeedIn hidden-xs" data-wow-duration="1.5s" data-wow-delay="0s"> Loren ipsum dolorsit amet, consectetur adipisicing, sed do eiusmod.</p>-->
                    </div>
                    <div class="cap-readmore wow zoomInRight" data-wow-duration=".9s" data-wow-delay=".5s"> <a href="#">Get House Helper Now</a> </div>
                  </div>
                </div>
              </div>
              <!-- Slider Caption 2 -->
              <div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
                <div class="slider-progress"></div>
                <div class="slide-text slide-text-2">
                  <div class="middle-text">
                    <div class="cap-dec">
                      <h2 class="cap-dec wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="0s"><?php echo date('Y');?> </h2>
                      <h1 class="cap-dec wow fadeInUp" data-wow-duration="2.3s" data-wow-delay="0s"> GET YOUR FAMILY A HELPER NOW</h1>
                      <p class="cap-dec wow lightSpeedIn hidden-xs" data-wow-duration="1.5s" data-wow-delay="0s"> </p>
                    </div>
                    <!--<div class="cap-readmore wow zoomInUp" data-wow-duration="1.3s" data-wow-delay=".3s"> <a href="#">Shop Now</a> </div>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Main Slider -->

        </div>
        <div class="col-md-1 col-xs-1"></div>
      </div>
    </div>
  </div>
  <!-- End Main Slider Area -->

  <!-- Best selling -->
  <div class="container">
    <section class="main-container col1-layout" style="margin-top: 0px">
      <div class="main-container">
        <div class="row">
        <div class="col-md-8" style="background-color: #">
          <h2 style="text-align: center"> <span id="news_scroller" style="visibility: visible;"><marquee>Welcome to DAY TO DAY HOME EXPERTS where quality home care is our Service </marquee> </span></h2>
          <p style="color: #0275d8; font-size: large; text-align: center;"><strong>
              DAY 2 DAY HOME EXPERTS <br>P.O.BOX 12288-00100 NAIROBI <br>TELEPHONE: +254700000000 <br>EMAIL: day2dayhomeexperts@gmail.com
            </strong>
          </p>
          <p style="font-size: medium">DayToDayHomeExperts is a trusted society-oriented platform that brings together employers and helpers so that each one can find the perfect match.
            <br>Our goal is to empower employers finding the right helper for their homes, we also ensure that the helpers find their right employers considering
            their specific profiles and the needs of the employers.
            <a href="about_us" class="btn btn-sm btn-info">Read more</a> </p>
          <!--<p style="text-align: center">Kindly Sign Up with us to view our available home helpers profiles <a href="register" class="btn btn-sm btn-info"><u>CLICK HERE</u></a></p>-->
        </div>
          <div class="col-md-4">
            <h3>Why trust us?</h3>
            <hr style="border: #ff00ff; border-style: outset">
            <p style="font-size: medium">Life can be unpredictable, situations happen, circumstances change. We always provide replacements in cases where a house help
                is unable to attend to his/her duties due to various reasons such as sickness or personal problems.
                <br>We source for good house keepers, interview them, do thorough background checks before placing them at our program.
                There after we equip our shortlisted candidates with trainings required to undertake their duties.</p>
          </div>
        </div>
      </div>
    </section>

    <div class="row">
      <!-- main container -->
      <div class="home-tab">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- Home Tabs  -->

              <div class="tab-info">
                <h3 class="new-product-title pull-left">Trainings</h3>
                <ul class="nav home-nav-tabs home-product-tabs" style="background-color: lightgrey;">
                  <li class="active"><a href="#all" data-toggle="tab" aria-expanded="false" style="font-size: 20px;">CHILD CARE</a></li>
                  <!--<li> <a href="#women" data-toggle="tab" aria-expanded="false" style="font-size: 20px;">CHILD CARE</a> </li>-->
                  <li> <a href="#men" data-toggle="tab" aria-expanded="false" style="font-size: 20px;">HOUSEHOLD MANAGEMENT</a> </li>
                  <li> <a href="#kids" data-toggle="tab" aria-expanded="false" style="font-size: 20px;">DISH PREPARATION</a> </li>
                </ul>
                <!-- /.nav-tabs -->
              </div>
              <div id="productTabContent" class="tab-content">
                <div class="tab-pane active in" id="all">
                  <div class="row">
                    <div class="col-md-8">
                      <h3 style="text-align: center">Babysitting & Child Care Training</h3>
                      <p style="font-size: medium">
                        An accident can always happen, your helper should know how to react to and deal with emergency situations. Our helpers are trained
                        on medical emergencies that children face and how they differ from adult conditions. The curriculum also includes the importance of
                        attending to basic emergency situations with children, the emotional aspects of caring for children, and preventing common injuries
                        and illnesses in children.<br><br>
                        Our trainings are provided by the Kenya Red Cross and all our approved home helpers are holding several certifications in different
                        areas of training. As a result we can testify that our home helpers are professional and reliable all round. The following are the
                        courses they undertake..<a class="btn btn-sm btn-info" href="child_care">Read More</a> </p>
                    </div>
                    <div class="col-md-4">
                      <div class="entry-thumb"> <a href="child_care">
                          <figure><img src="images/care2.jpg" alt="Blog"></figure>
                        </a> </div>
                    </div>
                  </div>

                </div>
                <div class="tab-pane fade" id="men">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="entry-thumb"> <a href="household_management">
                          <figure><img src="images/about_us_slide1.jpg" alt="Blog"></figure>
                        </a> </div>
                    </div>
                    <div class="col-md-8">
                      <h3 style="text-align: center">House Management</h3>
                      <p style="font-size: medium">
                        We developed the Housekeeping and Management training program to bring a world class viewpoint to managing your home. With both health
                        and safety in mind for everyone who runs and manages a home, helper training has chosen a curriculum that covers five essential areas.
                        <a class="btn btn-sm btn-info" href="household_management">Read More</a> </p>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="kids">
                  <div class="row">
                    <div class="col-md-8">
                      <h3 style="text-align: center">Dish Cooking</h3>
                      <p style="font-size: medium">
                        Your helper may be great but you wish he/she could cook healthier food for your family. Day2DayHomeExpert team provide extensive training
                        about Side Dishes that will teach the helpers everything about how to cook healthy, fast but delicious food.
                        <a class="btn btn-sm btn-info" href="dish_cooking">Read More</a>
                      </p>
                    </div>
                    <div class="col-md-4">
                        <div class="entry-thumb"> <a href="dish_cooking">
                            <figure><img src="images/food1.jpg" alt="Blog"></figure>
                          </a> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- our clients Slider -->
<?php include_once("include/footer.php")?>
