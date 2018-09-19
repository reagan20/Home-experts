
<?php require_once ('include/header.php'); ?>
<?php require_once('../dbconnect.php');
$x=@$_GET['id'];
$y=@$_GET['act'];

if (@$_GET['act']=="delete") {
    $sql = "DELETE from profiles WHERE id='$x'";
    $results = mysqli_query($conn, $sql);
}
?>
<!-- =============================================== --><!-- Left side column. contains the sidebar -->
<?php require_once ('include/sidebar.php'); ?>

<!-- =============================================== --><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <!--News &amp; Events-->
            Helper Profiles
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">


        <span id="showingit"></span>

        <div class="row">
            <span id="news_scroller" style="visibility:hidden;">   </span>
        </div>

        <!-- Modal -->
        <div class="modal fade bs-example-modal-lg" id="profile_modal" tabindex="-1" role="dialog" aria-labelledby="news_events_modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">New Profiles Form</h4>
                    </div>

                    <div class="modal-body">
                        <?php
                        if(isset($_POST['submit'])){
                            $category=$_POST['category'];
                            $training=$_POST['training'];
                            $status=$_POST['status'];

                            $sql="INSERT INTO profiles(category,training,status) VALUES ('$category','$training','$status')";
                            $query=mysqli_query($conn,$sql);
                            if($query){
                                echo "<div class='alert alert-success'>Successfully saved</div>";
                            }
                            else{
                                echo "<div class='alert alert-danger'>Not saved</div>";
                            }
                            mysqli_close($conn);

                        }
                        ?>
                        <form role="form" id="news_event_form" class="form-horizontals" method="post" name="news_event_form">
            <span id="news_event_ajax_reciever">
              <div class="form-group">
                  <label for="inputSubjectTitle">Category</label>
                  <select class="form-control" name="category" id="category" required="required" id="news_status" name="news_status">
                      <option selected ="selected" value ="">~~Select Category~~</option>
                      <option>Primary Level </option>
                      <option>Secondary Level </option>
                      <option>University Level </option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="inputContent">Qualifications</label>
                  <textarea required name ="training" id="training" class="form-control elibrary_editors" rows="4" placeholder="Content of the news/ Event"></textarea>
              </div>

              <div class="form-group">
                  <label for="inputContent">Status</label>
                  <select class="form-control" name="status" id="status" required="required" id="news_status" name="news_status">
                      <option selected ="selected" value ="" >~~Select Status~~</option>
                      <option value ="0" >Not Showing </option>
                      <option value ="1" >Showing </option>
                  </select>
              </div>

              <input type = "hidden" name="hidden_news_key" id="hidden_news_key" value="hidden_news_key" />
              <button type="submit" name="submit" id="submit" class="btn btn-primary">Save Record</button>  <span class="pull-right" id="hidden_news_key_ajax_res"> </span>
            </span>
                        </form>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

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
                <a href="addhelper_profiles.php" type="button" class="btn btn-success">Create New +</a>
            </div> </div><br/>

        <div class="panel panel-primary">
            <div class="panel-heading">View Profile List</div>
            <div class="panel-body">
                <?php
                $sql="SELECT * FROM helpers_updated_profiles ORDER BY id ASC";
                $event=mysqli_query($conn,$sql);

                ?>
                <div class="table-responsive">
                    <table class="table table-striped table-condensed table-hover dataTables" id="dataTables-libraryList">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Category</th>
                            <th>Age</th>
                            <th>Period</th>
                            <th>Religion</th>
                            <th>Gender</th>
                            <th>Testimonials</th>
                            <th>Photo</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($row=mysqli_fetch_assoc($event)){
                        echo "<tr>";
                        ?>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['mname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['category']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['period']; ?></td>
                        <td><?php echo $row['religion']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['testimonials']; ?></td>
                        <td><?php echo $row['photo']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td style="width: 150px;">
                            <a class="btn btn-sm btn-info" href="edit_helper_profile?user_id=<?php echo $row['id'];  ?>">Update</a>
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

