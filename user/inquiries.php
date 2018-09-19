
<?php include_once("include/header.php");   ?>
<?php  require_once('include/sidebar.php'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><img src="../images/new1.png" alt=""/>
            DAY 2 DAY HOME EXPERTS
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">


        <span id="showingit"></span>

        <div class="row">
            <span id="news_scroller" style="visibility:hidden;">   </span>
        </div>
        <!--<div class="panel panel-info">
          <div class="panel-heading">Messaging tips</div>
          <div class="panel-body">
              <div class="alert alert-info"> </div>
          </div>
          </div>-->


        <div class="panel panel-purple">
            <div class="panel-heading">Our Chatting Platform</div>
            <div class="panel-body">
                <!-- Direct Chat -->
                <div class="row">


                    <div class="col-md-8">
                        <!-- DIRECT CHAT SUCCESS -->
                        <div class="box box-info direct-chat direct-chat-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Direct Chat</h3>
                                <div class="box-tools pull-right">

                                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <!-- Conversations are loaded here -->

                                <div class="direct-chat-messages">
                                    <!-- Message. Default to the left -->
                                    <?php
                                    $stmt=$conn->query("SELECT * FROM inquiries WHERE sender='$session_id'");
                                    while($replies=mysqli_fetch_assoc($stmt)){
                                        ?>
                                        <div class="direct-chat-msg">
                                            <div class="direct-chat-info clearfix">
                                                <span class="direct-chat-name pull-left"><?php echo $row['fname']." ".$row['lname']; ?></span>
                                                <span class="direct-chat-timestamp pull-right"> <?php echo $replies['sent_date']; ?>    </span>
                                            </div><!-- /.direct-chat-info -->
                                            <img class="direct-chat-img" src="../uploads/<?php echo $photo; ?>" alt="message user image"><!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                <?php echo $replies['message']; ?>
                                            </div><!-- /.direct-chat-text -->
                                        </div><!-- /.direct-chat-msg -->

                                              <!-- Message to the right -->
                                        <div class="direct-chat-msg right">
                                            <div class="direct-chat-info clearfix">
                                                <span class="direct-chat-name pull-right">ADMIN</span>
                                                <span class="direct-chat-timestamp pull-left"> <?php echo $replies['reply_date']; ?> </span>
                                            </div><!-- /.direct-chat-info -->
                                            <img class="direct-chat-img" src="../uploads/33.png" alt="message user image"><!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                <?php echo $replies['reply']; ?>
                                            </div><!-- /.direct-chat-text -->
                                        </div><!-- /.direct-chat-msg -->
                                        <?php
                                    }
                                    ?>
                                </div><!--/.direct-chat-messages-->

                                <!-- Contacts are loaded here -->

                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <?php
                                if(isset($_POST['send'])){
                                    //$sender =$row['email'];
                                    $message =$_POST['message'];
                                    $reported =date('Y-m-d H:m:s');
                                    $stmt =$conn->prepare("INSERT INTO inquiries (sender,message,sent_date) VALUES('$email','$message','$reported')");
                                    $stmt->execute();
                                    echo "<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button>Thanks for contacting us. We will get to you soonest possible</div>";
                                }
                                ?>
                                <form method="post" autocomplete="off">
                                    <div class="input-group">
                                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                        <button type="submit" name="send" class="btn btn-success btn-flat">Send</button>
                      </span>
                                    </div>
                                </form>
                            </div><!-- /.box-footer-->
                        </div><!--/.direct-chat -->
                    </div><!-- /.col -->
                    <div class="col-md-6">

                    </div>
                </div><!-- /.row -->

            </div>
        </div>

        <!--END PAGE CONTENT -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require_once('include/footer.php');  ?>

