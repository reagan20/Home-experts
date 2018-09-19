
<?php
$page_link = pathinfo(curPageURL(),PATHINFO_FILENAME);
function curPageURL() {
 $pageURL = 'http';
 if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>
<aside class="main-sidebar ">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <ul class="sidebar-menu" >
            <li class="header">MAIN MENU</li>
            <li class="<?php if($page_link != '' && $page_link == 'index'){echo 'active';}?>">
              <a href="index">
                <i class="fa fa-home"></i> <span>Dashboard</span>
              </a>
               </li>
              <li class="<?php if($page_link != '' && $page_link == 'myprofile'){echo 'active';}?>"><a href="myprofile"><i class="fa fa-user"></i> Personal Profile</a></li>
              <li class="<?php if($page_link != '' && $page_link == 'helperprofile'){echo 'active';}?>"><a href="helperprofile"><i class="fa fa-users"></i> View Helpers Profile</a></li>
              <li class="<?php if($page_link != '' && $page_link == 'employer_comment'){echo 'active';}?>"><a href="employer_comment"><i class="fa fa-envelope"></i> Employers' Feedback</a></li>
<!--      <li class="treeview --><?php //if($page_link != '' && $page_link == 'applicants_list' || $page_link == 'myprofile'){echo 'active';}?><!-- ">-->
<!--      <a href="#"> <i class="fa fa-desktop"></i> <span>Application Management </span><i class="fa fa-angle-left pull-right"></i>-->
<!--      </a>-->
<!--      <ul class="treeview-menu ">-->
<!--       <li class="--><?php //if($page_link != '' && $page_link == 'myprofile'){echo 'active';}?><!--"><a href="myprofile"><i class="fa fa-user"></i> Personal Profile</a></li>-->
<!--       <li class="--><?php //if($page_link != '' && $page_link == 'helperprofile'){echo 'active';}?><!--"><a href="helperprofile"><i class="fa fa-users"></i> View Helpers Profile</a></li>-->
<!--      </ul>-->
<!--       </li>-->

              <li class="treeview <?php if($page_link != '' && $page_link == 'inquiry'){echo 'active';}?> ">
                  <a href="#"> <i class="fa fa-envelope"></i> <span>Inquiries </span><i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu ">
                      <li class="<?php if($page_link != '' && $page_link == 'inquiries'){echo 'active';}?>"><a href="inquiries"><i class="fa fa-circle"></i> Compose</a></li>
                  </ul>
              </li>

            <!--<li class="treeview <?php if($page_link != '' && $page_link == 'adminacc'){echo 'active';}?> ">
              <a href="#">
                <i class="fa fa-comment"></i>
                <span> Announcements </span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu ">
              <li class="<?php if($page_link != '' && $page_link == 'helperprofile'){echo 'active';}?>"><a href="helperprofile"><i class="fa fa-circle-o"></i> View Helpers Profile</a></li>
                </ul>
            </li>-->

              <!--<li class="treeview  ">
                  <a href="#">
                      <i class="fa fa-list-ol"></i>
                      <span>Others </span>
                      <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                      <li class=""><a href=""><i class="fa fa-circle-o"></i>More go here</a></li>
                  </ul>
              </li>-->

            <!--<li class="treeview <?php //if($page_link != '' && $page_link == 'compose' || $page_link == 'inbox' || $page_link=='outbox'){echo 'active';}?>  ">
              <a href="#">
                <i class="fa fa-envelope"></i>
                <span> Mesages</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <li class="<?php //if($page_link != '' && $page_link == 'compose'){echo 'active';}?>"><a href="compose"><i class="fa fa-circle-o"></i> Compose</a></li>
              <li class="<?php//if($page_link != '' && $page_link == 'inbox'){echo 'active';}?>"><a href="inbox"><i class="fa fa-circle-o"></i> Inbox</a></li>
              <li class="<?php //if($page_link != '' && $page_link == 'outbox'){echo 'active';}?>"><a href="outbox"><i class="fa fa-circle-o"></i> Sent </a></li>
              </ul>
            </li>-->
        </section>
        <!-- /.sidebar -->
      </aside>