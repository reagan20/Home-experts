<?php require_once('dbconnect.php');
$x=@$_GET['id'];
$y=@$_GET['act'];

if (@$_GET['act']=="delete") {
    $sql = "DELETE from bookedrooms WHERE id='$x'";
    $results = mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html>

<?php require_once ('include/header.php'); ?>
<!-- =============================================== --><!-- Left side column. contains the sidebar -->
<?php require_once ('include/sidebar.php'); ?>

<!-- =============================================== --><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            View Transactions            <small></small>
        </h1>
        <!--  <ol class="breadcrumb">
           <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           <li><a href="#">Examples</a></li>
           <li class="active">Blank page</li>
         </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">


        <span id="showingit"></span>

        <div class="row">
            <span id="news_scroller" style="visibility:hidden;">   </span>
        </div>


        <div class="modal fade" id="deleteNewsModal" tabindex="-1" role="dialog" aria-labelledby="deleteNewsModalLabel" aria-hidden="true">
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


        <div class="panel panel-primary">
            <div class="panel-heading">View Record List</div>
            <div class="panel-body">

                <?php
                $sql="SELECT * FROM bookedrooms WHERE Room_Id LIKE 's%'";
                $event=mysqli_query($conn,$sql);

                ?>


                <div class="table-responsive">
                    <table class="table table-striped table-condensed table-hover dataTables" id="dataTables-libraryList">
                        <thead>
                        <tr>
                            <th>Room Id</th>
                            <th> First Name</th>
                            <th>Last Name</th>
                            <th>Phone</th>
                            <th>CheckIn</th>
                            <th>CheckOut</th>
                            <th>Room Id</th>
                            <th> Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($row=mysqli_fetch_assoc($event)){
                        echo "<tr>";

                        ?>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['First_Name']; ?></td>
                        <td><?php echo $row['Last_Name']; ?></td>
                        <td><?php echo $row['Phone']; ?></td>
                        <td><?php echo $row['CheckIn']; ?></td>
                        <td><?php echo $row['CheckOut']; ?></td>
                        <td><?php echo $row['Room_Id']; ?></td>
                        <td><a class="btn btn-sm btn-danger" onclick="return confirm('do you want to delete??')" href="?action=transview&id=<?php echo $row['id'];?>&act=delete">Delete</a> </td>
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

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require_once('include/footer.php');  ?>
</html>
