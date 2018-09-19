<?php  require_once('include/header.php');  ?>

      <!-- =============================================== --><!-- Left side column. contains the sidebar -->
   <?php include_once('include/sidebar.php');  ?> 
      <!-- =============================================== --><!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Messages
          </h1>
        </section>
        <section class="content">
  <div class="row">
    <span id="news_scroller" style="visibility:hidden;">   </span>
    </div>
<div class="panel panel-primary">
  <div class="panel-heading">Compose message</div>
  <div class="panel-body">
          <?php
          if(isset($_POST['saveEmails'])){
          move_uploaded_file($_FILES['fileupload']['tmp_name'],"attachments/".$_FILES['fileupload']['name']);
          $receiver = $_POST['receiver'];
          $subject  = $_POST['subject'];
          $body     = $_POST['body'];
          $file     = $_FILES['fileupload']['name'];
          $sent     = date('Y-m-d H:i:s');
          $statusY = "Y";
	      $statusN = "N";
          $stmt = $conn->prepare("INSERT INTO email_messages (msg_receiver,msg_subject,msg_body,file,sent_date) VALUES('$receiver','$subject','$body','$file','$sent')");
          $stmt->execute();

          require 'PHPMailer/PHPMailerAutoload.php';
          $mail = new PHPMailer;
          $mail->Mailer = "smtp";
          $mail->Host = 'smtp.gmail.com';
          $mail->SMTPSecure = 'ssl';
          $mail->SMTPAuth = true;
          $mail->Username = 'day2dayhomeexperts@gmail.com';
          $mail->Password = 'day2day1234';
          $mail->SMTPSecure = 'tls';
          $mail->Port = 587;
          $mail->setFrom('day2dayhomeexperts@gmail.com', 'DAY2DAY SYSTEM');
          $mail->addAddress($receiver);
          //$mail->addCC('');
          $mail->addAttachment(getcwd().'/attachments/'.$file);
          //$mail ->addAttachment('');
          $mail->isHTML(true);
          $mail->Subject = $subject;
          $mail->Body = $body;
          //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
          if (!$mail->send()) {
           echo "<div class='alert alert-danger'>
            <button class='close' data-dismiss='alert'>&times;</button>Message could not be sent. Error in sending email&nbsp;&nbsp;. Check internet connectivity.</div>";
           //$stmt=$conn->prepare("UPDATE email_messages SET status='$statusN' WHERE msg_receiver='$email'");
           //$stmt->execute();
             }
          else {
            echo "<div class='alert alert-success'>
            <button class='close' data-dismiss='alert'>&times;</button>Email successfuly sent to:&nbsp;".$receiver." </div>";
            //$stmt=$conn->prepare("UPDATE email_messages SET status='$statusY' WHERE msg_receiver='$email'");
            //h$stmt->execute();
                }
           }
          ?>
     <form role="form" method="post" name="saveComposedMail" enctype="multipart/form-data">
      <div class="form-group">
        <label for="msg_reciever">Email Address: &nbsp;&nbsp;<span class="required">*</span></label>
        <input required value="" name="receiver" type="email" class="form-control" placeholder="Enter Email Address">
      </div>
      <div class="form-group">
        <label for="msg_subject">Subject: &nbsp;&nbsp;<span class="required">*</span></label>
        <input required name="subject"  type="text" class="form-control"  placeholder="Enter subject">
      </div>
      <div class="form-group">
        <label for="msg_body">Body:&nbsp;&nbsp;<span class="required">*</span></label>
        <textarea rows = "7" id="elibrary_editor" required class="form-control elibrary_editor" name="body" placeholder="Body"> </textarea>
      </div>
      <div class="form-group">
        <label for="attach">Attachment:</label>
        <input name ="fileupload" type="file" id="attach" accept="document/*">
      </div>

      <button name="saveEmails" type="submit" class="btn btn-info"> Message</button>
       <button name="cancel" type="reset" class="btn btn-danger">Cancel</button>
    </form>

  </div>
</div>
        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php require_once('include/footer.php'); ?>