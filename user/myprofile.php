<?php  require_once('include/header.php'); ?>
<?php include_once('include/sidebar.php');  ?>
<style>
.required,.error{
color: red;
}
</style>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Profile Manager            <small>  My Profile </small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">


  <span id="showingit"></span>

  <div class="row">
    <span id="news_scroller" style="visibility:hidden;">   </span>
    </div>
                  <div class="row">

    <div class="col-lg-6">

    <div class="panel panel-primary">
     <div class="panel-heading">Account Update</div>
     <div class="panel-body">
    	<div class="register-box-body">
          <div class="row"></div>
          <?php
            if(isset($_POST['update']))
            {
              //move_uploaded_file($_FILES['photo']['tmp_name'],"../uploads/".$_FILES['photo']['name']);
              $fname = $_POST['fname'];
                $mname = $_POST['mname'];
                $lname = $_POST['lname'];
              $email = $_POST['username'];
              $phone = $_POST['phone'];
              $imgFile = $_FILES['photo']['name'];
             $imageTmp = $_FILES['photo']['tmp_name'];
             $imageSize = $_FILES['photo']['size'];
             $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
             $valid = array('jpeg','jpg','png','gif');

              if(in_array($imgExt,$valid))
             {
                  move_uploaded_file($imageTmp,"../uploads/".$imgFile);
                 $stmt=("UPDATE accounts SET fname='$fname',mname='$mname',lname='$lname',email='$email',phone='$phone',photo='$imgFile' WHERE email='$session_id'");
                 $result=mysqli_query($conn,$stmt);
                    if($result){
                       echo "<div class='alert alert-success'>
                      <button class='close' data-dismiss='alert'>&times;</button>
                      <strong> Success!!! </strong>You have updated your Profile successfully.</div>";
                    }
                  else
                    {
                      echo "<div class='alert alert-danger'>
                      <button class='close' data-dismiss='alert'>&times;</button>
                      <strong> Sorry!!! </strong>Error in updating your data.</div>".mysqli_error($conn);
                    }
             }
                else{
                    echo "<div class='alert alert-danger'>
                      <button class='close' data-dismiss='alert'>&times;</button>
                      <strong> Sorry!!! </strong>Invalid</div>";
                }
            }
          ?>

            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group has-feedback">
                <input required name="fname" type="text" class="form-control" placeholder="First name" value="<?php echo $row['fname']; ?>">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
                <div class="form-group has-feedback">
                    <input name="mname" type="text" class="form-control" placeholder="Middle name" value="<?php echo $row['mname']; ?>">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input required name="lname" type="text" class="form-control" placeholder="Last name" value="<?php echo $row['lname']; ?>">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
              <div class="form-group has-feedback">
                <input required name="username" type="email" class="form-control" placeholder="Email" value="<?php echo $row['email']; ?>">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input required name="phone" type="text" class="form-control" placeholder="Phone Number" value="<?php echo $row['phone']; ?>">
                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
              <label> Passport</label>
                <input  name="photo" type="file" required="required" class="form-control" accept="image/*"  >
                <span class="glyphicon glyphicon-file form-control-feedback"></span>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <button name="update" type="submit" class="btn btn-primary" value="" ><i class="fa fa-send"></i> Update Profile</button>
                </div><!-- /.col -->
              </div>
            </form>

      </div><!-- /.form-box -->

      </div>
      </div>
    </div><!--   end of first half -->

    <div class="col-lg-6">
    <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-blue">
                  <div class="widget-user-image">
                  <?php if($row['photo'] !=""):  ?>
                    <img class="img-circle" src="../uploads/<?php echo $row['photo']; ?>" alt="User image">
                    <?php else: ?>
                    <img src="../uploads/65.png<?php echo $photo ?>" alt="Profile Picture" />
                    <?php endif; ?>
                  </div><!-- /.widget-user-image -->
                  <h3 class="widget-user-username"><?php echo $row['fname'];   ?></h3>
                  <h5 class="widget-user-desc">User</h5>
                </div>
                <div class="box-footer nso-padding">
                <div class="row" style="width: 98%; margin: auto;"> <div class="col-lg-12s">
                <h3> Password Update Form</h3>
                 <div class="row">

                    </div>
                    <?php
                     if(isset($_POST['change_password']))
                     {
                         $pass=$_POST['password'];
                         $pass2 = $_POST['conpassword2'];


                          $passupdate =md5($pass2);
                          $stmt= $conn->prepare("UPDATE accounts SET password='$passupdate' WHERE email='$session_id'");
                          $stmt->execute();
                          echo "<div class='alert alert-success'>
						<button class='close' data-dismiss='alert'>&times;</button>
						<strong> Success!!! </strong>You have changed your Password successfully.</div>";
				        //header("refresh:5;dashboard");
                     }

                    ?>
                 <form id="profile-form" method="post" enctype="multipart/form-data">
                    <div class="form-group has-feedback">
                      <input required  name="password" id="password" type="password" class="form-control" placeholder="Enter New Password  ">
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                      <input required  name="conpassword2" id="conpassword2" type="password" class="form-control" placeholder="Enter Verify Password  ">
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                      <div class="col-xs-12">
                        <button name="change_password" type="submit" class="btn btn-primary">Update Password</button>
                      </div><!-- /.col -->
                    </div>
                  </form>
                  </div></div>

                </div>
              </div>

    </div>  <!--  end of second half -->
</div>

        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<?php require_once('include/footer.php'); ?>