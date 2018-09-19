<?php
require_once('/../dbconnect.php');
$id = $_GET['user_id'];
if($id !=""){
 $user_edit=mysqli_query($conn,"SELECT * FROM helpers_updated_profiles WHERE id='$id' LIMIT 1 ");
    $row_edit=mysqli_fetch_assoc($user_edit);

}
else{
    header('Location: helper_profiles.php');
}

?>
<?php require_once('include/header.php'); ?>

<!-- =============================================== --><!-- Left side column. contains the sidebar -->

<?php require_once('include/sidebar.php'); ?>
<!-- =============================================== --><!-- Content Wrapper. Contains page content -->
<style>
    .required,.error{
        color: red;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Profile
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">


        <span id="showingit"></span>

        <div class="row">
            <span id="news_scroller" style="visibility:hidden;">   </span>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">View Profile List</div>
            <div class="panel-body">
                <?php
                if(isset($_POST['submit'])){
                    move_uploaded_file($_FILES['photo']['tmp_name'], "image/profiles/".$_FILES['photo']['name']);
                    $category=$_POST['category'];
                    $fname=$_POST['fname'];
                    $mname=$_POST['mname'];
                    $lname=$_POST['lname'];
                    $age=$_POST['age'];
                    $period=$_POST['period'];
                    $religion=$_POST['religion'];
                    $gender=$_POST['gender'];
                    $testimonials=$_POST['testimonials'];
                    $photo=$_FILES['photo']['name'];
                    $status=$_POST['status'];

                    $sql="UPDATE helpers_updated_profiles SET fname='$fname',mname='$mname',lname='$lname',category='$category',age='$age',period='$period',religion='$religion',gender='$gender',testimonials='$testimonials',photo='$photo',status='$status' WHERE id='$id' ";
                    $query=mysqli_query($conn,$sql);
                    if($query){
                        echo "<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button>Profile Successfully Updated.</div>";
                    }
                    else{
                        echo "<div class='alert alert-danger'>Not saved</div>";
                    }
                    mysqli_close($conn);

                }
                ?>
                <form class="form-vertical" id="register12" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="fname">Surname: <span class="required">*</span></label>
                                <input class="form-control" type="text" id="fname" name="fname" value="<?php echo $row_edit['fname'];  ?>" required="required" placeholder="Enter first name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="RoomId">Middle Name:</label>
                                <input class="form-control" type="text" id="mname" name="mname" value="<?php echo $row_edit['mname'];  ?>" placeholder="Enter middle name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="RoomId">Last Name: <span class="required">*</span></label>
                                <input class="form-control" type="text" id="lname" name="lname" value="<?php echo $row_edit['lname'];  ?>" required="required" placeholder="Enter last name">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="category">Category: &nbsp;<span class="required">*</span></label>
                                <select class="form-control" required="required" id="category" name="category">
                                    <option value ="<?php echo $row_edit['category']; ?>"><?php echo $row_edit['category']; ?></option>
                                    <option value ="Primary">Primary</option>
                                    <option value ="Secondary">Secondary</option>
                                    <option value ="University">University</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="RoomId">Age: <span class="required">*</span></label>
                                <input class="form-control" type="text" id="age" name="age" value="<?php echo $row_edit['age'];  ?>" required="required" placeholder="Enter age">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="RoomId">Months/Years of experience: <span class="required">*</span></label>
                                <input class="form-control" type="text" id="period" name="period" value="<?php echo $row_edit['period'];  ?>" required="required" placeholder="Enter months/years of experience">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Testimonials: <span class="required">*</span> </label>
                                <textarea class="form-control"  type="text" name="testimonials" id="testimonials" rows="5" required="required" placeholder="Describe Testimonials"><?php echo $row_edit['testimonials'];  ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="course Level">Religion: &nbsp;<span class="required">*</span></label>
                                <select id="religion" class="form-control" required="required"  name="religion">
                                    <option value ="<?php echo $row_edit['religion'];  ?>"><?php echo $row_edit['religion'];  ?></option>
                                    <option value ="Christian">Christian</option>
                                    <option value ="Muslim">Muslim</option>
                                    <option value ="Hindu">Hindu</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="course Level">Gender: &nbsp;<span class="required">*</span></label>
                                <select id="gender" class="form-control" required="required"  name="gender">
                                    <option value ="<?php echo $row_edit['gender'];  ?>"><?php echo $row_edit['gender'];  ?></option>
                                    <option value ="Male">Male</option>
                                    <option value ="Female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label for="photo"><i class="glyphicon glyphicon"></i> <b>Photo:<span class="required">*</span></b></label>
                                <input id="photo" name="photo" type="file" class="form-control" value="<?php echo $row_edit['photo'];  ?>" required="required" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="course Level">Status: &nbsp;<span class="required">*</span></label>
                                <select id="status" class="form-control" required="required"  name="status">
                                    <option value ="<?php echo $row_edit['status'];  ?>"><?php echo $row_edit['status'];  ?></option>
                                    <option value ="Active">Active</option>
                                    <option value ="Inactive">Inactive</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" name="submit" id="submit" class="btn btn-info">Update</button>
                        <!--<button type="reset" class="btn btn-warning">Cancel</button>-->
                    </div>

                </form>

            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require_once('include/footer.php'); ?>

