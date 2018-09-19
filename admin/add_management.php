<?php include_once('dbconnect.php') ?>
<!DOCTYPE html>
<html>
<?php  require_once('include/header.php');  ?>

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
            Management Profiles
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
            move_uploaded_file($_FILES['passport']['tmp_name'], "image/".$_FILES['passport']['name']);
            $firstname=$_POST['fname'];
            $middlename=$_POST['mname'];
            $lastname=$_POST['lname'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $passport=$_FILES['passport']['name'];
            $description=$_POST['description'];
            $title=$_POST['title'];
            $status=$_POST['status'];


                        $sql="INSERT INTO management(fname,mname,lname,email,phone,photo,description,title,status)VALUES ('$firstname','$middlename','$lastname','$email','$phone','$passport','$description','$title','$status') ";
                        if(mysqli_query($conn,$sql)){
                            echo"<div class='alert alert-success'>data successfully inserted</div>";
                        }
                        else{
                            echo"<div class='alert alert-danger'>error encountered please try again</div>";
                        }
                        mysqli_close($conn);
                    }
        ?>


        <div class="row">

        </div>
        <div class="panel panel-primary">
            <div class="panel-heading" style="background-color: #ff00ff">Management</div>
            <div class="panel-body">
                <form action="" id="register12" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="fname"><i class="glyphicon glyphicon"></i> <b>Surname: <span class="required">*</span></b></label>
                                <input class="form-control" id="fname" name="fname" required="required" type="text" placeholder="">
                            </div></div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="mname"><i class="glyphicon glyphicon"></i> <b>Middle Name:</b></label>
                                <input class="form-control" id="mname" name="mname" type="text" placeholder="">
                            </div></div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="lname"><i class="glyphicon glyphicon"></i> <b>Last Name: <span class="required">*</span></b></label>
                                <input class="form-control" id="lname" name="lname" required="required" type="text" placeholder="">
                            </div></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label for="email"><i class="glyphicon glyphicon"></i> <b>Email Address:<span class="required">*</span></b></label>
                                <input name="email" type="email" class="form-control" required="required" placeholder="username@email.com">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label for="comment-name"><i class="glyphicon glyphicon"></i> <b>Mobile Number:<span class="required">*</span></b></label>
                                <input name="phone" type="text" class="form-control" required="required" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label for="passport"><i class="glyphicon glyphicon"></i> <b>Passport:<span class="required">*</span></b></label>
                                <input  name="passport" type="file" class="form-control" required="required">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Price" class="control-label">Description: <span class="required">*</span></label>
                                <textarea class="form-control" type="text" name="description" rows="5" required="required" placeholder=""></textarea>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label for="title" class="control-label">Title: <span class="required">*</span></label>

                                <select class="form-control" name="title" required="required">
                                    <option  selected ="selected"   value ="" >~~Select Title~~</option>
                                    <option  value ="Manager" >Manager </option>
                                    <option  value ="Director">Director </option>
                                </select>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label for="status" class="control-label">Status: <span class="required">*</span></label>

                                <select required="required" class="form-control" name="status">
                                    <option  selected ="selected"   value ="" >~~Select Status~~</option>
                                    <option  value ="Active" >Active </option>
                                    <option  value ="Inactive" >Inactive </option>
                                </select>
                            </div>

                        </div>

                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-info" name="submit">Add</button>
                        <button type="reset" name="cancel" class="btn btn-warning">Cancel</button>
                    </div>

                </form></div>
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
</html>
