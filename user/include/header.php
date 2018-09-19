<?php
session_start();
require_once('../dbconnect.php');
$role=  $_SESSION['role_session'];
if(!isset($_SESSION['user_session'])  && $role!=2)
{
        header("Location:../login.php");
}
else{
    $session_id= $_SESSION['user_session'];
    $query=$conn->query("SELECT * FROM accounts WHERE email='$session_id'");
    $row=$query->fetch_array();
    $count=$query->num_rows;
    $fname=$row['fname'];
    $lname=$row['lname'];
    $photo=$row['photo'];
    $email=$row['email'];
}
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>day2dayhomeexperts-Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="../assets/swal2/sweetalert2.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../assets/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../assets/css/skins/_all-skins.min.css">

    <link href="../assets/modal-effect/css/component.css" rel="stylesheet">

      <!-- Favicon  -->
      <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png">

    <!-- Date Picker -->
    <link rel="stylesheet" href="../assets/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker-bs3.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- GLOBAL STYLES -->


<link href="../assets/elibrary/datepicker/css/datepicker.css">

    <link href="../assets/elibrary/fileinput/css/fileinput.css " media="all" rel="stylesheet" type="text/css" />
    <link href="../assets/elibrary/modal/css/bootstrap-modal.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../assets/elibrary/css/li-scroller.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../assets/elibrary/plugins/dataTables/dataTables.bootstrap.css " media="all" rel="stylesheet" type="text/css" />

 <style>

  .required,.error{
    color: #CC0000;
  }
  </style>

   </head>

   <body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">Day To Day Home Experts</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">DAY 2 DAY</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!--#ff00ff-->
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
                             <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success"> 0</span>
                </a>
                <ul class="dropdown-menu">

                  <li class="header">You have 0 message(s)</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">

                    </ul>
                  </li>
                  <li class="footer"><a href="inquiries">See All Messages</a></li>
                </ul>
              </li>

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!--<img src="http://localhost/dash/uploads/users/passport.png" class="user-image" alt="User Image">-->
                  <img src="../uploads/<?php echo $photo?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $fname;   ?></span>
                  <span class="hidden-xs"><?php echo $lname;   ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <!--<img src="http://localhost/dash/uploads/users/passport.png" class="img-circle" alt="User Image">-->
                    <img src="../uploads/<?php echo $photo?>" class="img-circle" alt="User Image">
                    <p>
                        <span class="hidden-xs"><?php echo $fname;   ?></span>
                        <span class="hidden-xs"><?php echo $lname;   ?></span>
                    </p>
                  </li>
                  <!-- Menu Body -->

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="myprofile" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Logout</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>