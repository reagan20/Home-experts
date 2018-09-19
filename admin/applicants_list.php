<?php require_once('include/header.php');   ?>

<?php require_once ('include/sidebar.php'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <!--News &amp; Events-->
            Applicants List
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">


        <span id="showingit"></span>

        <div class="row">

            <span id="news_scroller" style="visibility:hidden;">   </span>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">View Applicant List</div>

            <div id="load-applicant">

            </div>
        </div>
        <!--END PAGE CONTENT -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require_once('include/footer.php');  ?>
