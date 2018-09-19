<?php require_once('../dbconnect.php'); ?>

<?php require_once('include/header.php'); ?>

<!-- =============================================== --><!-- Left side column. contains the sidebar -->
<?php require_once('include/sidebar.php');  ?>
<style>
    .required,.error{
        color: red;
    }
</style>
<!-- =============================================== --><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Slider Update   <small></small>
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
            move_uploaded_file($_FILES['photo']['tmp_name'],"../images/sliders/".$_FILES['photo']['name']);
            $category=$_POST['category'];
            $photo=$_FILES['photo']['name'];
            $status=$_POST['status'];
            $description=$_POST['description'];

            $sql="INSERT INTO sliders(category,photo,status,description) VALUES('$category','$photo','$status','$description')";
            if(mysqli_query($conn, $sql)){
                echo"<div class='alert alert-success'>successfully added</div>";
            }
            else{
                echo"<div class='alert alert-warning'>error encountered</div>".mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        ?>

        <div class="panel panel-primary">
            <div class="panel-heading">Slider Updates</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-6">

                        <form method="post" id="register12" class="form-horizontal" role="form" enctype="multipart/form-data">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Price" class="control-label">Category: <span class="required">*</span></label>
                                    <select class="form-control" required="required" id="category" name="category">
                                        <option value="">~~Select Slider Category~~</option>
                                        <option value="Slider1">Slider1</option>
                                        <option value="Slider2">Slider2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Photo" class="control-label">Photo: <span class="required">*</span></label>
                                    <input type="file" name="photo" class="form-control" required="required" placeholder="Photo">
                                </div>

                                <div class="form-group">
                                    <label for="Price" class="control-label">Description: <span class="required">*</span></label>
                                    <textarea class="form-control" type="text" rows="4" name="description" required="required" placeholder="Slider Description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="status" class="control-label">Status:  <span class="required">*</span></label>
                                    <select class="form-control" required="required" id="status" name="status">
                                        <option value="">~~Select Status~~</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info" name="submit">Submit</button>
                                    <button type="reset" name="cancel" class="btn btn-warning">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>


    </section>
</div>
<?php require_once('include/footer.php'); ?>