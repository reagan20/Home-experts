<?php include_once('../dbconnect.php') ?>
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
            Add News
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
            $message=$_POST['message'];
            $date=$_POST['date'];
            $status=$_POST['status'];

            $sql="INSERT INTO events(title,sub_message,message,date,status) VALUES ('$title','$sub_message','$message','$date','$status') ";
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
            <div class="panel-heading">Add New Events</div>
            <div class="panel-body">
                <form autocomplete="off" id="register12" action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="comment-name"><i class="glyphicon glyphicon"></i> <b>Title: <span class="required">*</span></b></label>
                                <input class="form-control" id="fname" name="title" required="required" type="text" placeholder="">
                            </div></div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="comment-name"><i class="glyphicon glyphicon"></i> <b>Sub_Message: <span class="required">*</span></b></label>
                                <textarea class="form-control" id="" name="sub_message"  rows="2" type="text" required="required" placeholder=""></textarea>
                            </div></div>


                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group has-feedback">
                                <label for="comment-name"><i class="glyphicon glyphicon"></i> <b>Message:<span class="required">*</span></b></label>
                                <textarea name="message" type="email" class="form-control" rows="5" required="required" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!--<div class="form-group has-feedback" class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-end-date="-7d">
                                <label for="calendar"><i class="glyphicon glyphicon"></i> <b>Date:<span class="required">*</span></b></label>
                                <input  name="date" type="date" class="form-control" readonly="readonly" required="required" placeholder="Enter Date">
                                <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                            </div>-->
                            <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-start-date="+d">
                                <label for="">Date:  <span class="required">*</span></label>
                                <input type="text" name="date" class="form-control" readonly="readonly" placeholder="yyyy-mm-dd"/>
                                <span class="input-group-btn">
                                <button class="btn default" type="button">
                                    <i class="fa fa-calendar"></i>
                                </button>
                                </span>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group has-feedback">
                                <label for="passport"><i class="glyphicon glyphicon"></i> <b>Status:<span class="required">*</span></b></label>
                                <select class="form-control" id="role_id" name="status" required="required">
                                    <option  selected ="selected"   value ="" >~~Select ~~</option>
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

                </form>
            </div>
        </div>

        <!--END PAGE CONTENT -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require_once('include/footer.php');?>
