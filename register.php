<?php include_once("include/header.php");
include_once("dbconnect.php");
?>
  <!-- end header -->
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>
            <li><strong>New Employer</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="page-content">
        <div class="account-login">
          <div class="box-authentication new-customer-box Account Page " style="border-radius: 6px;">
            <?php
            if(isset($_POST['submit'])){
              $fname=$_POST['fname'];
              $lname=$_POST['lname'];
              $id_number=$_POST['id_number'];
              $email=$_POST['email'];
              $phone=$_POST['phone'];
              $address=$_POST['address'];
              $town=$_POST['town'];
              $password=$_POST['password'];
              $safe=md5($password);
              $role_id=2;

              $sql="INSERT INTO accounts(fname,lname,id_number,email,phone,address,town,password,role_id) VALUES('$fname','$lname','$id_number','$email','$phone','$address','$town','$safe','$role_id')";
              $query=mysqli_query($conn,$sql);
              if($query){
                echo"<div class='alert alert-success'>
                <button class='close' data-dismiss='alert'>&times;</button><strong>Hi $fname Your Account Successfully created. You can now login to get your helper.</strong>
                </div>";
              }
              else{
                echo"Failed Please try again later".mysqli_error($conn);
              }
              mysqli_close($conn);
            }
            ?>
          
          <form  id="register" method="post" action="">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="check-title">
                      <h4 style="text-align: center;">EMPLOYER REGISTRATION FORM</h4>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>First Name:<span class="required">*</span></label>
                    <div class="input-text">
                      <input style="border-radius: 3px;" type="text" name="fname"  required="required" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>Last Name:<span class="required">*</span></label>
                    <div class="input-text">
                      <input style="border-radius: 3px;" type="text" name="lname" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>Id Number:<span class="required">*</span></label>
                    <div class="input-text">
                      <input style="border-radius: 3px;" type="text" name="id_number" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>Email:<span class="required">*</span></label>
                    <div class="input-text">
                      <input style="border-radius: 3px;" type="text" name="email" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>Phone:<span class="required">*</span></label>
                    <div class="input-text">
                      <input style="border-radius: 3px;" type="text" name="phone" required="required" placeholder="+countrycodePhone Number" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>Address:<span class="required">*</span></label>
                    <div class="input-text">
                      <input style="border-radius: 3px;" type="text" name="address" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>City/Town:<span class="required">*</span></label>
                    <div class="input-text">
                      <input style="border-radius: 3px;" type="text" name="town" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>Password:<span class="required">*</span></label>
                    <div class="input-text">
                      <input style="border-radius: 3px;" id="password" type="password" name="password" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>Confirm Password:</label>
                    <div class="input-text">
                      <input style="border-radius: 3px;" id="password2" type="password" name="password2" required="required" class="form-control">
                    </div>
                  </div>

                  <div class="col-xs-12">
                    <!--<div class="billing-checkbox">
                    <label class="inline" for="rememberme">
                      <input type="checkbox" value="forever" id="rememberme" name="rememberme">
                      Sign up for our newsletter! </label>
                    </div>-->
                    <div class="submit-text">
                      <button style="border-radius: 3px;" type="submit" name="submit" class="button"><i class="fa fa-user"></i>&nbsp; <span>Register</span></button>
                      <a class="btn btn-sm btn-info" href="login">Login</a>
                    </div>
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include_once("include/footer.php")?>