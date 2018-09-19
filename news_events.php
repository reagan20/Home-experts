<?php include_once("include/header.php")?>
  <!-- end header -->
  <!-- Main Container -->
  
  <section class="blog_post">
    <div class="container"> 
      
      <!-- row -->
      <div class="row"> 
        
        <!-- Center colunm-->
        <div class="col-xs-12 col-sm-9 col-sm-push-3" id="center_column">
          <div class="center_column">
            <div class="page-title">
              <h2>Latest News & Events</h2>
            </div>
            <ul class="blog-posts">
              <?php
              $query=$conn->query("SELECT * FROM events WHERE status='Active' LIMIT 3");
              while($row=mysqli_fetch_assoc($query)){
              ?>
              <li class="post-item">
                <article class="entry">
                  <div class="row">
                    <div class="col-sm-5">
                      <div class="entry-thumb"> <a href="single_post.html">
                        <figure><img src="images/blog-img1.jpg" alt="Blog"></figure>
                        </a> </div>
                    </div>
                    <div class="col-sm-7">
                      <h3 class="entry-title"><a><?php echo $row['title']?></a></h3>
                      <div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="cat"> <i class="fa fa-folder"></i>&nbsp; <a href="#">News, </a> <a href="#">Promotions</a> </span> </div>
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>&nbsp; <span>(5 votes)</span></div>
                      <div class="entry-excerpt"><p style="font-size: medium"><?php echo $row['message']; ?></p></div>
                      <a href="#" class="button read-more">Read more&nbsp; <i class="fa fa-angle-double-right"></i></a> </div>
                  </div>
                </article>
              </li>
              <?php
              }
              ?>

            </ul>
          </div>
        </div>
        <!-- ./ Center colunm --> 
        <!-- Left colunm -->
        <aside class="sidebar col-xs-12 col-sm-3 col-sm-pull-9"> 
          <!-- Blog category -->
          <!--<div class="block blog-module">
            <div class="sidebar-bar-title">
              <h3>Blog Categories</h3>
            </div>
            <div class="block_content">
              <div class="layered layered-category">
                <div class="layered-content">
                  <ul class="tree-menu">
                    <li><a href="#"><i class="fa fa-angle-right"></i>&nbsp; Images</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp; <a href="#">Audio</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp; <a href="#">Photos</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp; <a href="#">Diet &amp; Fitness</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp; <a href="#">Slider</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>-->
          <!-- ./blog category  -->
          
          <!-- Recent Comments -->
          <div class="block blog-module">
            <div class="sidebar-bar-title">
              <h3>Recent Employers Comments</h3>
            </div>
            <div class="block_content"> 
              <!-- layered -->
              <div class="layered">
                <div class="layered-content">
                  <ul class="recent-comment-list">
                    <?php
                    $stmt=$conn->query("SELECT * FROM employer_feedback WHERE status='Active' LIMIT 3");
                    while($row1=mysqli_fetch_assoc($stmt)){
                    ?>
                    <li>
                      <div class="post-thumb"> <a href="#"><img src="uploads/<?php echo $row1['photo'];?>" class="img-circle" height="100px;" width="100px;" alt="Blog"></a> </div>
                      <h5><a href="#"><?php echo $row1['fname'];?> <?php echo $row1['lname'];?></a></h5>
                      <div class="comment"><p style="font-size: medium"><?php echo $row1['message']?></p></div>
                      <div class="author">Posted by <a href="#">Admin</a></div>
                    </li>
                    <?php
                    }
                    ?>
                  </ul>
                </div>
              </div>
              <!-- ./layered --> 
            </div>
          </div>
          <!-- ./Recent Comments -->
        </aside>
        <!-- ./left colunm --> 
      </div>
      <!-- ./row--> 
    </div>
  </section>
  <!-- Main Container End --> 
   <!-- our clients Slider -->
  <?php include_once("include/footer.php")?>