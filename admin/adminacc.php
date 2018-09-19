<?php include_once('/../dbconnect.php') ?>
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
            $password=$_POST['password'];
            $pass=md5($password);

                        $sql="INSERT INTO account(fname,mname,lname,username,phone,photo,password,role_id)VALUES ('$firstname','$middlename','$lastname','$email','$phone','$photo','$pass','$role_id') ";
                        if(mysqli_query($conn,$sql)){
                            echo"<div class='alert alert-success'>data successfully inserted</div>";
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
                                <input class="form-control" id="fname" name="fname" required="required" type="text" placeholder="">
                            </div></div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="comment-name"><i class="glyphicon glyphicon"></i> <b>Middle Name:</b></label>
                                <input class="form-control" id="mname" name="mname" type="text" placeholder="">
                            </div></div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="comment-name"><i class="glyphicon glyphicon"></i> <b>Last Name: <span class="required">*</span></b></label>
                                <input class="form-control" id="lname" name="lname" required="required" type="text" placeholder="">
                            </div></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label for="comment-name"><i class="glyphicon glyphicon"></i> <b>Email Address:<span class="required">*</span></b></label>
                                <input name="email" type="email" class="form-control" required="required" placeholder="username@email.com">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label for="comment-name"><i class="glyphicon glyphicon"></i> <b>Mobile Number:<span class="required">*</span></b></label>
                                <input name="phone" type="text" class="form-control" required="required" placeholder="+countryCodePhoneNumber">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label for="photo"><i class="glyphicon glyphicon"></i> <b>Photo:<span class="required">*</span></b></label>
                                <input id="photo" name="photo" type="file" class="form-control" required="required" >
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label for="passport"><i class="glyphicon glyphicon"></i> <b>Role Id:<span class="required">*</span></b></label>
                                <select class="form-control" id="role_id" name="role_id" required="required">
                                    <option  selected ="selected"   value ="" >~~Select Group~~</option>
                                    <option  value ="1" >Admin </option>
                                    <option  value ="2" >User </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label for="passport"><i class="glyphicon glyphicon"></i> <b>Password:<span class="required">*</span></b></label>
                                <input  name="password" type="password" class="form-control" required="required" placeholder="password">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info" name="submit">Add</button>
                        <button type="reset" name="cancel" class="btn btn-warning">Cancel</button>
                    </div>

                </form>
            </div>
        </div>

        <div class="modal fade bs-example-modal-lg" id="getUserDetailsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title ">User Details</h4>
                    </div>
                    <div class="modal-body"><span id="getUserDetails"> </span>

                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!--END PAGE CONTENT -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require_once('include/footer.php');?>
