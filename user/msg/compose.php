
<!DOCTYPE html>
<html>
                                 <?php require_once('include/header.php'); ?>

      <!-- =============================================== --><!-- Left side column. contains the sidebar -->
                                 <?php require_once('include/sidebar.php');  ?>

      <!-- =============================================== --><!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Messages            <small>  Compose new message </small>
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




<!--<div class="panel panel-info">
  <div class="panel-heading">Messaging tips</div>
  <div class="panel-body">
      <div class="alert alert-info"> </div>
  </div>
  </div>-->


<div class="panel panel-primary">
  <div class="panel-heading">Compose message</div>
  <div class="panel-body">
  <span id="msg_ajax_response"> </span>


     <form role="form" method="post" target="" name="saveComposedMail">
      <div class="form-group">
        <label for="msg_recievers">Reciever: </label>
        <input required value="" id="msg_recievers" name="msg_recievers" type="text" class="form-control"   placeholder="Enter ID">
      </div>
      <div class="form-group">
        <label for="msg_subject">Subject:</label>
        <input required value="" id="msg_subject" name="msg_subject"  type="text" class="form-control"  placeholder="Enter subject">
      </div>
      <div class="form-group">
        <label for="msg_body">Body:</label>
        <textarea rows = "7" id="elibrary_editor" required class="form-control elibrary_editor" name="msg_body" id = "msg_body" placeholder="Body" > </textarea>
      </div>
     <div class="form-group">
        <label for="attach">Attachement</label>
        <input   name = "attach[]" multiple type="file" id="attach">
        <p class="help-block">You can upload multitple files by clicking on each + your keyboard / keypad control key.</p>
      </div>
      <button name="saveCOmposedEmails" type="submit" class="btn btn-info">Send Message</button>
    </form>

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
                                  <?php require_once('include/footer.php'); ?>