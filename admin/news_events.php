
<?php require_once ('include/header.php'); ?>
<?php require_once('../dbconnect.php');
$x=@$_GET['id'];
$y=@$_GET['act'];

if (@$_GET['act']=="delete") {
    $sql = "DELETE from events WHERE id='$x'";
    $results = mysqli_query($conn, $sql);
}
?>
<?php require_once ('include/sidebar.php'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <!--News &amp; Events-->
            Admin Profiles
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <span id="showingit"></span>

        <div class="row">
            <span id="news_scroller" style="visibility:hidden;">   </span>
        </div>

        <div class="modal fade" id="deleteprof" tabindex="-1" role="dialog" aria-labelledby="deleteNewsModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content " >

                    <form id="deleteNewsModalFormID" target=" " method="post" name="deleteNewsModalFormID"  >
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Delete Record</h4>
                        </div>
                        <div class="modal-body" id="needed"><span id="deleteResponse">
                   <div class="alert alert-info"> Are you sure you want to delete this record? </div> </span>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">No, Not now </button>
                            <input type= "hidden" name="newsDeleteHiddenID" value="0" id="newsDeleteHiddenID" />
                            <input id="deleteNewsModalIDSubmit" type="submit" class="btn btn-danger" value="Yes, proceed."  name= "deleteNewsModalIDSubmit"/>

                        </div>
                        <div class="modal-footer">
                        </div>
                    </form>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="row">
            <div class="col-lg-4">
                <a href="add_news" type="button" class="btn btn-success">Create New +</a>
            </div> </div><br/>

        <div class="panel panel-primary">
            <div class="panel-heading">News & Events</div>
            <div class="panel-body">
                <?php
                $sql="SELECT * FROM events";
                $event=mysqli_query($conn,$sql);

                ?>
                <div class="table-responsive">
                    <table class="table table-striped table-condensed table-hover dataTables" id="dataTables-libraryList">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Title</th>
                            <th>Sub_Message</th>
                            <th>Message_body</th>
                            <th>Date</th>
                            <th>Status</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $count=1;
                        while($row=mysqli_fetch_assoc($event)){
                        echo "<tr>";

                        ?>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['sub_message']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td>
                            <a class="btn btn-sm btn-info" href="update_news.php?user_id=<?php echo $row['id'];?>">Update</a>
                            <a class="btn btn-sm btn-danger" onclick="return confirm('Sure to delete? It will be deleted permanently!')" href="?action=transview&id=<?php echo $row['id'];?>&act=delete">Delete</a>
                        </td>

                        </tbody>
                        <?php
                        $count++;
                        echo "</tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>

        <div class="modal fade bs-example-modal-lg" id="getUserDetailsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title ">User Details</h4>
                    </div>
                    <div class="modal-body"><span id="getUserDetails"> </span>
                    </div>
                </div>
            </div>
        </div>

        <!--END PAGE CONTENT -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require_once('include/footer.php');  ?>

