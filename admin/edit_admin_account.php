<?php include_once('/../dbconnect.php');
$id=$_GET['user_id'];
if ($id !=""){
    $user_edit=mysqli_query($conn,"SELECT * FROM accounts WHERE id='$id' LIMIT 1");
    $row_edit=mysqli_fetch_assoc($user_edit);
}
else{
    header('Location: admin_accounts.php');
}

?>
<?php  require_once('include/header.php');  ?>
<!-- =============================================== --><!-- Left side column. contains the sidebar -->
<?php require_once('include/sidebar.php');  ?>
<style>
    .required,.error{
        color: red;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Admin Accounts
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">


        <span id="showingit"></span>

        <div class="row">
            <span id="news_scroller" style="visibility:hidden;">   </span>
        </div>

        <?php
        if(isset($_POST['submit'])){
            move_uploaded_file($_FILES['photo']['tmp_name'], "image/profiles/".$_FILES['photo']['name']);
            $firstname=$_POST['fname'];
            $middlename=$_POST['mname'];
            $lastname=$_POST['lname'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $photo=$_FILES['photo']['name'];
            $role_id=$_POST['role_id'];
            //$password=$_POST['password'];
            //$pass=md5($password);

            $sql="UPDATE accounts SET fname='$firstname',mname='$middlename',lname='$lastname',username='$email',phone='$phone',role_id='$role_id',photo='$photo' WHERE id='$id'";
            if(mysqli_query($conn,$sql)){
                echo"<div class='alert alert-success'>data successfully updated</div>";
            }
            else{
                echo"<div class='alert alert-danger'>error encountered please try again</div>";
            }
            mysqli_close($conn);
        }
        ?>

        <div class="panel panel-primary">
            <div class="panel-heading">Administrators</div>
            <div class="panel-body">
                <form autocomplete="off" id="register12" action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="comment-name"><i class="glyphicon glyphicon"></i> <b>Surname: <span class="required">*</span></b></label>
                                <input class="form-control" id="fname" name="fname" value="<?php echo $row_edit['fname']?>" required="required" type="text" placeholder="">
                            </div></div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="comment-name"><i class="glyphicon glyphicon"></i> <b>Middle Name:</b></label>
                                <input class="form-control" id="mname" name="mname" value="<?php echo $row_edit['mname']?>" type="text" placeholder="">
                            </div></div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="comment-name"><i class="glyphicon glyphicon"></i> <b>Last Name: <span class="required">*</span></b></label>
                                <input class="form-control" id="lname" name="lname" value="<?php echo $row_edit['lname']?>" required="required" type="text" placeholder="">
                            </div></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label for="comment-name"><i class="glyphicon glyphicon"></i> <b>Email Address:<span class="required">*</span></b></label>
                                <input name="email" type="email" class="form-control" value="<?php echo $row_edit['email']?>" required="required" placeholder="username@email.com">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label for="comment-name"><i class="glyphicon glyphicon"></i> <b>Mobile Number:<span class="required">*</span></b></label>
                                <input name="phone" type="text" class="form-control" value="<?php echo $row_edit['phone']?>" required="required" placeholder="+countryCodePhoneNumber">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label for="photo"><i class="glyphicon glyphicon"></i> <b>Photo:<span class="required">*</span></b></label>
                                <input id="photo" name="photo" type="file" class="form-control"  value="<?php echo $row_edit['photo']?>" required="required" >
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label for="passport"><i class="glyphicon glyphicon"></i> <b>Role Id:<span class="required">*</span></b></label>
                                <select class="form-control" id="role_id" name="role_id" required="required">
                                    <option  selected ="selected"   value ="<?php echo $row_edit['role_id']?>" ><?php echo $row_edit['role_id']?></option>
                                    <option  value ="Admin" >Admin </option>
                                    <option  value ="User" >User </option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info" name="submit">Update</button>
                    </div>

                </form>
            </div>
        </div>

        <!--END PAGE CONTENT -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require_once('include/footer.php');?>

