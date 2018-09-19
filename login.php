
<?php
session_start();
include_once("dbconnect.php");

?>
<?php include_once("include/header.php")?>
  <!-- end header -->

  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>
            <li><strong>My Account</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End -->

  <!-- Main Container -->
  <section class="main-container col1-layout" >
    <div class="main container">
      <div class="page-content">
        <div class="account-login">
          <div class="box-authentication" style="border-radius: 6px;">
            <?php
           date_default_timezone_set('Africa/Nairobi');
            if(isset($_POST['submit'])){
              $email=$_POST['email'];
              $password=$_POST['password'];
              $pass=md5($password);
              $start= date('h:i:s');

              $query=$conn->query("SELECT * FROM accounts WHERE email='$email' AND password='$pass'");
              $row=$query->fetch_array();
              $count=$query->num_rows;

              if($count==1){
                if($row['role_id']==1){
                  //echo "ok";
                  $_SESSION['admin']= $row['email'];
                  $_SESSION['role_session']= $row['role_id'];
                  //header('Location: administrator/index.php');
                   $query=$conn->query("INSERT INTO user_activity(userlogin,login_time) VALUES('$email','$start')");
                  echo " <script> window.location.href='admin/index';  </script>";
                }
                else{
                  $_SESSION['user_session']= $row['email'];
                  $_SESSION['role_session']= $row['role_id'];
                  echo " <script> window.location.href='user/index';  </script>";

                }
              }
              else{
                echo "<div class='alert alert-danger'> <button class='close' data-dismiss='alert'>&times;</button>
                Wrong Usename & Password!! Kindly check and try again</div>";
              }
            }
            ?>
            <form id="register" method="post">
            <h4>Log in</h4>
            <p class="before-login-text">Welcome back! Sign in to your account</p>
            <label for="emmail_login"> Your email or username <span class="required">*</span></label>
            <input style="border-radius: 8px;" name="email" id="emmail_login" type="text" class="form-control">
            <label for="password_login">Your password <span class="required">*</span></label>
            <input style="border-radius: 8px;" name="password" id="password_login" type="password" class="form-control">
            <p class="forgot-pass"><a href="recover_pass">Lost your password?</a></p>
            <button style="border-radius: 3px;" class="button" type="submit" name="submit"><i class="fa fa-lock"></i>&nbsp; <span>Login</span></button>
            <a class="btn btn-sm btn-info" href="register">Register</a>
            <label class="inline" for="rememberme">
              <input type="checkbox" value="forever" id="rememberme" name="rememberme">
              Remember me </label>
            </form>


          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include_once("include/footer.php") ?>