<?php require_once('../dbconnect.php');
$x=@$_GET['id'];
$y=@$_GET['act'];
if (@$_GET['act']=="delete") {
    $sql=$conn->query("DELETE FROM contact WHERE id='$x'");
}
?>

<?php require_once ('include/header.php'); ?>
<?php require_once ('include/sidebar.php'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        View Comments
    </h1>
</section>

    <!-- Main content -->
    <section class="content">
        <span id="showingit"></span>

        <div class="row">
            <span id="news_scroller" style="visibility:hidden;">   </span>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">View Record List</div>
            <div class="panel-body">

                <?php
                $sql="SELECT * FROM contact";
                $event=mysqli_query($conn,$sql);
                ?>

                <div class="table-responsive">
                    <table class="table table-striped table-condensed table-hover dataTables" id="dataTables-libraryList">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th> Full Namet</th>
                            <th> Email</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th> Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($row=mysqli_fetch_assoc($event)){
                        echo "<tr>";

                        ?>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['fullname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td>
                            <a class="btn btn-sm btn-info" href="reply_comments?user_id=<?php echo $row['id'];  ?>">Reply</a>
                            <a class="btn btn-sm btn-danger" onclick="return confirm('Sure to delete? It will be deleted permanently!')" href="?action=transview&id=<?php echo $row['id'];?>&act=delete">Delete</a>
                        </td>
                        </tbody>
                        <?php
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

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!--END PAGE CONTENT -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require_once('include/footer.php');  ?>

