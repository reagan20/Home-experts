<div class="panel-body">

    <div class="table-responsive">
        <table class="table table-striped table-condensed table-hover dataTables" id="dataTables-libraryList">
            <thead>
            <tr>
                <th>S/N</th>
                <th>Id</th>
                <th>Surname</th>
                <th>First Name</th>
                <th>ID Number</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Gender</th>

                <th>View More</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            require_once('../dbconnect.php');
            $sql="SELECT * FROM helpers_registration_details";
            $applicant=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($applicant);
            if($count>0){
            $cnt=1;
            while($row=mysqli_fetch_assoc($applicant)){
            $id= $row['id'];
            ?>
            <tr>
                <td><?php echo $cnt; ?></td>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['lname']; ?></td>
                <td><?php echo $row['id_number']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['gender']; ?></td>

                <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['id']; ?>">View More</button></td>
                <!-- Modal -->
                <div class="modal fade" id="myModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">x</button>
                                <h4 class="modal-title"><?php echo $row['fname']. ' '.$row['lname']; ?></h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="item form-group">
                                            <label class="control-label">Gender:</label>
                                            <input type="text" class="form-control" value="<?php echo $row['gender']; ?>" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="item form-group">
                                            <label class="control-label">Religion:</label>
                                            <input type="text" class="form-control" value="<?php echo $row['religion']; ?>" readonly="readonly">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="item form-group">
                                            <label class="control-label">Education Level:</label>
                                            <input type="text" class="form-control" value="<?php echo $row['edu_level']; ?>" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="item form-group">
                                            <label class="control-label">Skils:</label>
                                            <textarea class="form-control" cols="4" rows="5"><?php echo $row['skills']; ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="item form-group">
                                            <label class="control-label">Date:</label>
                                            <input type="text" class="form-control" value="<?php echo $row['reg_date']; ?>" readonly="readonly">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
                <td style="width: 150px;"> <div class="btn-group">
                        <a class="btn btn-sm btn-info" href="reply_applicants.php?user_id=<?php echo $row['id']?>">Reply</a>
                        <a class="btn btn-sm btn-danger" id="delete_applicant" data-id="<?php echo $id; ?>" href="javascript:void(0)"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;Delete</a>
                    </div></td>
            </tr>
            </tbody>
            <?php
            $cnt++;
            }

            }
            else {
                ?>
                <tr>
                    <td colspan="11">No Applicants received so far.</td>
                </tr>
                <?php

            }
            ?>

        </table>
    </div>
</div>