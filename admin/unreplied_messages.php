<?php require_once('include/header.php')?>
<?php require_once('include/sidebar.php')?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            DAY 2 DAY HOME EXPERTS <small>  Dashboard </small>
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <span id="showingit"></span>

        <div class="row">
            <!--<span id="news_scroller" style="visibility: visible;"><marquee>NEWS WILL BE APPREARING HERE </marquee> </span>-->
        </div>


        <div class="panel panel-primary">
            <div class="panel-heading">UNREPLIED MESSAGES </div>
            <div class="panel-body">


                <div class="table-responsive">
                    <table class="table table-striped table-condensed  table-hover" id="example2">
                        <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>Sender </th>
                            <th>Message</th>
                            <th>Sent Date</th>
                            <th style="width: 150px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $stmt=$conn->query("SELECT * FROM inquiries WHERE Reply IS NULL");
                        $i=1;
                        while($meso=mysqli_fetch_assoc($stmt))
                        {
                            $senderid=$meso['id'];
                            ?>
                            <tr>
                                <td><?php echo $i;  ?></td>
                                <td><?php echo $meso['sender']; ?></td>
                                <td><?php echo $meso['message']; ?></td>
                                <td><?php echo $meso['sent_date']; ?></td>
                                <td><a href="message_replies?chat_id=<?php echo $senderid ; ?>" class="btn btn-info">Repond</a>
                                    <a class="btn btn-warning" id="ignore" data-id="<?php echo $senderid; ?>" href="javascript:void(0)">Ignore</a>
                                </td>
                            </tr>
                            <?php
                            $i++;     }

                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
<?php require_once('include/footer.php')?>

