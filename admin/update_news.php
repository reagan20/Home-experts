<?php include_once('../dbconnect.php');
$id=$_GET['user_id'];
if($id!=""){
    $news_edit=mysqli_query($conn,"SELECT * FROM events WHERE id='$id' LIMIT 1");
    $row_edit=mysqli_fetch_assoc($news_edit);
}
else{
    header('Location: news_events.php');
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
            News & Events
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
            $title=$_POST['title'];
            $sub_message=$_POST['sub_message'];
            $date=$_POST['date'];
            $message=$_POST['message'];
            $status=$_POST['status'];

            $sql="UPDATE events SET  title='$title',sub_message='$sub_message',message='$message',date='$date', status='$status' WHERE id='$id' ";
            if(mysqli_query($conn,$sql)){
                echo"<div class='alert alert-success'>data successfully updated</div>";
            }
            else{
                echo"<div class='alert alert-danger'>error encountered please try again</div>".mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        ?>

        <div class="panel panel-primary">
            <div class="panel-heading">News Updates</div>
            <div class="panel-body">
                <form autocomplete="off" id="register12" action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="comment-name"><i class="glyphicon glyphicon"></i> <b>Title: <span class="required">*</span></b></label>
                                <input class="form-control" id="title" name="title" value="<?php echo $row_edit['title']?>" required="required" type="text" placeholder="">
                            </div></div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="comment-name"><i class="glyphicon glyphicon"></i> <b>Sub_Message: <span class="required">*</span></b></label>
                                <textarea class="form-control" id="" name="sub_message"  rows="2" type="text" required="required" placeholder=""><?php echo $row_edit['sub_message']?></textarea>
                            </div></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label for="comment-name"><i class="glyphicon glyphicon"></i> <b>Message:<span class="required">*</span></b></label>
                                <textarea name="message" type="email" class="form-control" rows="5" required="required" placeholder=""><?php echo $row_edit['message'];?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label for="calendar"><i class="glyphicon glyphicon"></i> <b>Date:<span class="required">*</span></b></label>
                                <input  name="date" type="date" class="form-control" value="<?php echo $row_edit['date']?>" required="required" placeholder="Date for the Event">
                                <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group has-feedback">
                                <label for="passport"><i class="glyphicon glyphicon"></i> <b>Status:<span class="required">*</span></b></label>
                                <select class="form-control" name="status" required="required">
                                    <option  selected ="selected"   value ="<?php echo $row_edit['status']?>" ><?php echo $row_edit['status']?></option>
                                    <option  value ="Active" >Active </option>
                                    <option  value ="Inactive" >Inactive </option>
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

