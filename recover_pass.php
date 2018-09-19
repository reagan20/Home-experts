
<?php
//session_start();
include_once("dbconnect.php");

?>
<?php include_once("include/header.php")?>
<!-- end header -->

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul>
                    <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>
                    <li><strong>My Account</strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Main Container -->
<section class="main-container col1-layout" >
    <div class="main container">
        <div class="page-content">
            <div class="account-login">
                <div class="box-authentication" style="border-radius: 6px;">
                    <?php
                    function randomPassword(){
                        $alphabet="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                        $pass=array();
                        $alphaLength=strlen($alphabet)-1;
                        for($i=0; $i<8; $i++){
                            $n=rand(0,$alphaLength);
                            $pass[]=$alphabet[$n];
                        }
                        return implode($pass);
                    }
                    $newpassword=randomPassword();
                    $check=MD5($newpassword);

                    if(isset($_POST['submit'])){
                        $email=$_POST['email'];

                        $query=$conn->query("SELECT * FROM customers WHERE email='$email'");
                        $row=$query->fetch_array();
                        $fullname=$row['fname'].' '.$row['lname'];
                        //$password=$row['password'];
                        $count=$query->num_rows;

                        if($count==1){
                            //sending email
                            require 'PHPMailer/PHPMailerAutoload.php';
                            $mail = new PHPMailer;
                            $message='Hi, <b>'.$fullname.'</b>,<br/>Thanks for staying with us. <br/><br/>
                                  Your Requested Password is:<b> '.$newpassword.'</b><br/>
                                  <br/>
                                  ';
                            $mail->Mailer = "smtp";
                            $mail->Host = 'smtp.gmail.com';
                            $mail->SMTPSecure = 'ssl';
                            $mail->SMTPAuth = true;
                            $mail->Username = 'journalreagan@gmail.com';
                            $mail->Password = 'Jevanjee40';
                            $mail->SMTPSecure = 'tls';
                            $mail->Port = 587;
                            $mail->setFrom('journalreagan@gmail.com', 'LEGACYFURS');
                            $mail->addAddress($email);
                            $mail->isHTML(true);
                            $mail->Subject = 'Forgotten Password';
                            $mail->Body = $message;
                            //end of smtp
                            if ($mail->send()) {
                                echo "<div class='alert alert-success'>
                                <button class='close' data-dismiss='alert'>&times;</button>
                                </strong>Success!</strong>  Your Password has been sent to $email.
                                  </div>";
                            }
                            else{
                                echo "<div class='alert alert-danger'>
                            <button class='close' data-dismiss='alert'>&times;</button><strong>Sorry !</strong> Please check your internet connection.
                    </div>";
                            }

                        }
                        else{
                            echo "<div class='alert alert-danger'>
                            <button class='close' data-dismiss='alert'>&times;</button>
                            User does not exist</div>";
                        }
                    }
                    ?>
                    <form id="register" method="post">
                        <h4>Recover Password</h4>
                        <p class="before-login-text">Enter your email address and your password will be reset and emailed to you.</p>
                        <label for="emmail_login"> Confirm your email address <span class="required">*</span></label>
                        <input style="border-radius: 8px;" name="email" id="emmail_login" type="text" class="form-control"><br>

                        <button style="border-radius: 3px;" class="btn btn-success" type="submit" name="submit"><i class="fa fa-send-o"></i>&nbsp; <span>Confirm</span></button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once("include/footer.php") ?>