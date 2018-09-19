<?php require_once ('include/header.php'); ?>
<?php require_once('../dbconnect.php');
$x=@$_GET['id'];
$y=@$_GET['act'];

if (@$_GET['act']=="delete") {
    $sql = "DELETE from employer_feedback WHERE id='$x'";
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

        <div class="panel panel-primary">
            <div class="panel-heading">Employers' Feedback</div>
            <div class="panel-body">
                <?php
                $sql=$conn->query("SELECT * FROM employer_feedback");
                ?>
                <div class="table-responsive">
                    <table class="table table-striped table-condensed table-hover dataTables" id="dataTables-libraryList">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Full Name</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Status</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $count=1;
                        while($row=mysqli_fetch_assoc($sql)){
                        echo "<tr>";

                        ?>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                        <td><?php echo $row['mess_date']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td>
                            <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#test<?php echo $row['id']?>">Update</a>
                            <a class="btn btn-sm btn-danger" onclick="return confirm('Sure to delete? It will be deleted permanently!')" href="?action=transview&id=<?php echo $row['id'];?>&act=delete">Delete</a>
                        </td>
                        <div id="test<?php echo $row['id']?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                        <h4 class="modal-title">Employers' Feedback.</h4>
                                    </div>
                                    <form method="post" action="<?php //echo $row['patient_id']; ?>" enctype="multipart/form-data">
                                        <?php
                                        if(isset($_POST['update'])){
                                            $message=$_POST['message'];
                                            $status=$_POST['status'];

                                            $query=$conn->query("UPDATE employer_feedback SET message='$message', status='$status'");
                                            if($query){
                                                echo "<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button>Data successfully updated.</div>";
                                            }
                                            else{
                                                echo "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>Failed!!.</div>";
                                            }
                                        }
                                        ?>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <img src="../admin/image/profiles/<?php echo $row['photo']?>" class="img-circle" alt="Cinque Terre" width="130" height="120">
                                                    <p><?php echo $row['fname'];?> <?php echo $row['lname'];?></p>
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label"><strong></strong></label>
                                                        <textarea type="text" rows="7" name="message" class="form-control" id="field-1" ><?php echo $row['message']; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <select class="form-control" name="status">
                                                            <option value="<?php echo $row['status']?>"><?php echo $row['status']?></option>
                                                            <option value="">~~Select status~~</option>
                                                            <option value="Active">Active</option>
                                                            <option value="Inactive">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>
                                            <button type="submit" class="btn btn-primary" name="update"> Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

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
        <!--END PAGE CONTENT -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require_once('include/footer.php');  ?>

