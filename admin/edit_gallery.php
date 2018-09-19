<?php require_once('/../dbconnect.php');
$id = $_GET['user_id'];
if($id !=""){
   $pic_edit=mysqli_query($conn,"SELECT * FROM gallery WHERE id='$id' LIMIT 1");
    $row_edit=mysqli_fetch_assoc($pic_edit);
}
else{
    header('Location: gallery.php');
}
?>

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
            Gallery Update   <small></small>
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
            move_uploaded_file($_FILES['photo']['tmp_name'],"../uploads/".$_FILES['photo']['name']);
            $category=$_POST['category'];
            $photo=$_FILES['photo']['name'];
            $description=$_POST['description'];
            $status=$_POST['status'];


            $sql="UPDATE gallery SET category='$category',photo='$photo',description='$description',status='$status' WHERE id='$id'";
            if(mysqli_query($conn, $sql)){
                echo"<div class='alert alert-success'>successfully Updated</div>";
            }
            else{
                echo"<div class='alert alert-warning'>error encountered</div>".mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        ?>
        <div class="panel panel-primary">
            <div class="panel-heading">Gallery</div>
            <div class="panel-body">

                <form class="form-vertical" id="register12" method="post" enctype="multipart/form-data">
                    <div class="col-md-4 col-lg-6">
                        <div class="form-group">
                            <label for="category">Category: &nbsp;<span class="required">*</span></label>
                            <select class="form-control" required="required" id="category" name="category">
                                <option value ="<?php echo $row_edit['category']?>"><?php echo $row_edit['category']?></option>
                                <option value ="small">small</option>
                                <option value ="medium">medium</option>
                                <option value ="large">large</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Photo" class="control-label">Photo: <span class="required">*</span></label>
                            <input type="file" name="photo" class="form-control" value="<?php echo $row_edit['photo'];?>"  placeholder="Photo">
                        </div>
                        <div class="form-group">
                            <label for="Price" class="control-label">Description: <span class="required">*</span></label>
                            <textarea class="form-control" type="text" name="description" rows="5" required="required" placeholder="Description"><?php echo $row_edit['description']; ?></textarea>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="course Level">Status: &nbsp;<span class="required">*</span></label>
                            <select id="status" class="form-control" required="required"  name="status">
                                <option value ="<?php echo $row_edit['status']?>"><?php echo $row_edit['status'];?></option>
                                <option value ="Active">Active</option>
                                <option value ="Inactive">Inactive</option>

                            </select>
                        </div>
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" name="submit" id="submit" class="btn btn-info">Update</button>
                            <!--<button type="reset" class="btn btn-warning">Cancel</button>-->
                        </div>
                    </div>

                </form>

            </div>
        </div>

    </section>
</div>
<?php require_once('include/footer.php'); ?>

