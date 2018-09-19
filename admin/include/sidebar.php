
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

              <li class="treeview <?php if($page_link != '' && $page_link == 'admin_accounts' || $page_link == 'management' ||$page_link == 'helper_profiles' ||$page_link == 'gallery' || $page_link == 'sliders'){echo 'active';}?> ">
              <a href="#">
                <i class="fa fa-cog"></i>
                <span> System Management </span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu ">
                          <li class="<?php if($page_link != '' && $page_link == 'admin_accounts'){echo 'active';}?>"><a href="admin_accounts"><i class="fa fa-circle-o"></i> Administrators</a></li>
                        <!--<li class="<?php if($page_link != '' && $page_link == 'management'){echo 'active';}?>"><a href="management"><i class="fa fa-circle-o"></i> Management Profiles</a></li>-->
                         <li class="<?php if($page_link != '' && $page_link == 'helper_profiles'){echo 'active';}?>"><a href="helper_profiles"><i class="fa fa-users"></i> Helper Profiles</a></li>
                         <li class="<?php if($page_link != '' && $page_link == 'gallery'){echo 'active';}?>"><a href="gallery"><i class="fa fa-circle-o"></i>Gallery Updates</a></li>
                        <li class="<?php if($page_link != '' && $page_link == 'sliders'){echo 'active';}?>"><a href="sliders"><i class="fa fa-circle-o"></i>Sliders</a></li>
                </ul>
               </li>

            <li class="treeview <?php if($page_link != '' && $page_link == 'news_events' || $page_link == 'news_events'){echo 'active';}?> ">
              <a href="#">
                <i class="fa fa-globe"></i>
                <span> Announcements </span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu ">
                          <li class="<?php if($page_link != '' && $page_link == 'news_events'){echo 'active';}?>"><a href="news_events"><i class="fa fa-circle-o"></i> Site News</a></li>

                </ul>
                       </li>

            <!--<li class="  "><a href="update.php"><i class="fa fa-calendar"></i> <span>Updates </span>
              </a>
            </li>-->

              <!--<li class="treeview  ">
                  <a href="#">
                      <i class="fa fa-list-ol"></i>
                      <span> Forms </span>
                      <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                      <li class=""><a href="RoomAddition.php"><i class="fa fa-circle-o"></i> Room Addition </a></li>
                  </ul>
              </li>-->

            <li class="treeview <?php if($page_link != '' && $page_link == 'compose' || $page_link == 'myprofile'){echo 'active';}?>  ">
              <a href="#">
                <i class="fa fa-envelope"></i>
                <span> Send Email</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                        <li class="<?php if($page_link != '' && $page_link == 'compose'){echo 'active';}?>"><a href="compose"><i class="fa fa-circle-o"></i> Compose</a></li>
                        <!--<li class=""><a href="inbox.php"><i class="fa fa-circle-o"></i> Inbox</a></li>
                        <li class=""><a href="outbox.php"><i class="fa fa-circle-o"></i> Sent </a></li>-->
              </ul>
            </li>
        </section>
        <!-- /.sidebar -->
      </aside>