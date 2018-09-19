<?php include_once("include/header.php");
include_once("dbconnect.php");
?>
    <!-- end header -->

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>
                        <li><strong>New Helper</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Main Container -->
    <section class="main-container col1-layout">
        <p style="text-align: center; font-size: medium;">Feel free to fill the form below with your correct personal details if in need of a job as a house helper.</br>
            <strong>NOTE:</strong> Ensure you fill all the fields marked <b><span style="color: red">*</span></b></p>
        <div class="main container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="col-main">
                        <div class="panel panel-info">
                            <div class="panel-heading" style="text-align: center; color: black;">HELPER REGISTRATION FORM</div>
                            <div class="panel-body">
                                <?php
                                if(isset($_POST['submit'])){
                                    $fname=$_POST['fname'];
                                    $mname=$_POST['mname'];
                                    $lname=$_POST['lname'];
                                    $id_number=$_POST['id_number'];
                                    $email=$_POST['email'];
                                    $phone=$_POST['phone'];
                                    $town=$_POST['town'];
                                    $gender=$_POST['gender'];
                                    $religion=$_POST['religion'];
                                    $edu_level=$_POST['edu_level'];
                                    $skills=$_POST['skills'];

                                    $sql="INSERT INTO helpers_registration_details(fname,mname,lname,id_number,email,phone,town,gender,religion,edu_level,skills) VALUES('$fname','$mname','$lname','$id_number','$email','$phone','$town','$gender','$religion','$edu_level','$skills')";
                                    $query=mysqli_query($conn,$sql);
                                    if($query){
                                        echo"<div class='alert alert-success'>
                            <button class='close' data-dismiss='alert'>&times;</button><strong>Hi <b>$fname</b> your application is successfully submitted. We'll get in touch. </strong>
                        </div>";
                                    }
                                    else{
                                        echo"Failed Please try again later".mysqli_error($conn);
                                    }
                                    mysqli_close($conn);
                                }
                                ?>

                                <form  id="register" method="post" action="">
                                        <!--<div class="col-xs-12">
                                            <div class="check-title">
                                                <h4 style="text-align: center;">Helper Registration Form</h4>
                                            </div>
                                        </div>-->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>First Name:<span class="required">*</span></label>
                                                <div class="input-text">
                                                    <input style="border-radius: 3px;" type="text" name="fname"  required="required" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Middle Name:</label>
                                                <div class="input-text">
                                                    <input style="border-radius: 3px;" type="text" name="mname" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Last Name:<span class="required">*</span></label>
                                                <div class="input-text">
                                                    <input style="border-radius: 3px;" type="text" name="lname" required="required" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Id Number:<span class="required">*</span></label>
                                                <div class="input-text">
                                                    <input style="border-radius: 3px;" type="text" name="id_number" required="required" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Email:<span class="required">*</span></label>
                                                <div class="input-text">
                                                    <input style="border-radius: 3px;" type="text" name="email" required="required" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Phone:<span class="required">*</span></label>
                                                <div class="input-text">
                                                    <input style="border-radius: 3px;" type="text" name="phone" required="required" placeholder="+countrycodePhone Number" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>City/Town:<span class="required">*</span></label>
                                                <div class="input-text">
                                                    <input style="border-radius: 3px;" type="text" name="town" required="required" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Gender: <span class="required">*</span></label>
                                                <div class="input-text">
                                                    <select name="gender" required="required" class="form-control" style="border-radius: 3px;">
                                                        <option>~~Select Gender~~</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="others">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Religion: <span class="required">*</span></label>
                                            <div class="input-text">
                                                <select name="religion" required="required" class="form-control" style="border-radius: 3px;">
                                                    <option>~~Select Religion~~ </option>
                                                    <option value="christian">Christian</option>
                                                    <option value="muslim">Muslim</option>
                                                    <option value="hindu">Hindu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Education Level: <span class="required">*</span></label>
                                            <div class="input-text">
                                                <select name="edu_level" required="required" class="form-control" style="border-radius: 3px;">
                                                    <option>~~Select Level~~</option>
                                                    <option value="primary">Primary</option>
                                                    <option value="secondary">Secondary</option>
                                                    <option value="university">University</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>Have you taken any training before? (Briefly Describe): <span class="required">*</span></label>
                                                <textarea name="skills" class="form-control" rows="4" required="required" style="border-radius: 3px;"></textarea>
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="submit-text">
                                                <button style="border-radius: 3px;" type="submit" name="submit" class="btn btn-primary"><i class="fa fa-send"></i>&nbsp; <span>Register</span></button>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="submit-text">
                                                <button style="border-radius: 3px;" type="reset" name="reset" class="btn btn-warning"><i class="fa fa-remove"></i>&nbsp; <span>Reset</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-2"></div>
            </div>




        </div>
    </section>

<?php include_once("include/footer.php")?>