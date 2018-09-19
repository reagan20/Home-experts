<?php include_once("include/header.php");   ?>
<?php  require_once('include/sidebar.php'); ?>
<div class="content-wrapper" >
    <!--style="background-color: #FFE4E1;"-->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <a href="index.php"><i class="fa fa-home"></i> <span>Home</span></a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <span id="news_scroller" style="visibility:hidden;">   </span>
        </div>
        <div class="row">

                <div class="col-md-6">
                    <div class="panel-group" id="accordion1">
                        <div class="panel panel-info">
                            <div class="panel-heading" >
                                <h3 class="panel-title">
                                    Welcome: <a data-toggle="collapse" data-parent="#accordion1" href=""><?php echo $row['fname'];?> <?php echo $row['lname'];?></a>
                                </h3>
                            </div>
                            <div class="panel-body">
                            <p>Kindly provide your feedback on the quality of services our house helpers provides.
                            Your feedback will be used to improve on the trainings we provide to our helpers to ensure that your needs are all met.
                            </p>
                                <?php
                                if(isset($_POST['send'])){
                                $message=$_POST['message'];
                                $status="Inactive";
                                $query=$conn->query("INSERT INTO employer_feedback(fname,lname,photo,message,status) VALUES ('$fname','$lname','$photo','$message','$status')");
                                    if($query){
                                        echo"<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button>Feedback successfully sent. Thanks.</div>";
                                    }
                                    else{
                                        echo"<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>Feedback not sent.</div>";
                                    }
                                }
                                ?>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea name="message" class="form-control" rows="10" name="feedback"></textarea>
                                        </div>
                                    </div></br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-primary" name="send">Send Feedback</button>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-warning"> Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

</div><!-- /.content-wrapper -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php require_once('include/footer.php');  ?>
</html>
