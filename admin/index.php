<?php include_once("include/header.php");   ?>
  <?php  require_once('include/sidebar.php'); ?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <!--Mount View Resort Hotel           <small>  Dashboard</small>-->
              <a href="index.php"><i class="fa fa-home"></i> <span>Home</span></a>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
  <span id="showingit"></span>

  <div class="row">
    <span id="news_scroller" style="visibility:hidden;">   </span>
    </div>

<div class="row">
 <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Transactions</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div style="display:" class="box-body">

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <?php
                            $sql="SELECT * FROM subscribers ";
                            $room=mysqli_query($conn,$sql);
                            $num_rows=mysqli_num_rows($room);
                            ?>
                          <div class="inner">
                            <h3><?php echo"$num_rows"; ?></h3>
                            <p>Subscriptions</p>
                          </div>
                            <div class="icon">
                            <i class="fa fa-envelope"></i>
                          </div>
                          <a href="viewsubscription" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                    </div><!-- ./col -->

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-teal">
                            <?php
                            $sql="SELECT * FROM contact";
                            $room=mysqli_query($conn,$sql);
                            $num_rows=mysqli_num_rows($room);
                            ?>
                          <div class="inner">
                            <h3><?php echo"$num_rows"; ?></h3>
                            <p>Users Questions/Comments</p>
                          </div>
                            <div class="icon">
                                <i class="fa fa-comment"></i>
                            </div>
                          <a href="viewcomments" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                    </div><!-- ./col -->


                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-purple">
                            <?php
                            $sql="SELECT * FROM helpers_registration_details ";
                            $room=mysqli_query($conn,$sql);
                            $num_rows=mysqli_num_rows($room);
                            ?>
                          <div class="inner">
                            <h3><?php echo"$num_rows";?></h3>
                            <p>Helpers Applicants</p>
                          </div>
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                          <a href="applicants_list" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                    </div><!-- ./col -->


                    <div class="col-lg-3 col-xs-6">
                        
                        <div class="small-box bg-lime">
                            <?php
                           $sql=$conn->query("SELECT * FROM employer_feedback ");
                            $num_rows=mysqli_num_rows($sql);
                            ?>
                          <div class="inner">
                            <h3> <?php echo"$num_rows";?></h3>
                            <p>Employees' Feedback.</p>
                          </div>
                            <div class="icon">
                                <i class="fa fa-comment"></i>
                            </div>
                          <a href="employer_feedback" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                    </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

</div>
<div class="row">

 <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">All  transactions</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <!--<div style="display: block;" class="box-body">
                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-orange">
                          <div class="inner">
                            <h3></h3>
                            <p>Bookerd_Events</p>
                          </div>
                            <div class="icon">
                                <i class="fa fa-home"></i>
                            </div>
                          <a href="transview.php" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                    </div>
              </div>-->
            </div><!-- /.col -->

</div>

        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

  <?php require_once('include/footer.php');  ?>
