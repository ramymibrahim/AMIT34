<?php
include_once('helpers/config.php');
include_once(base_path.'/helpers/session.php');
if($user==null){
  header('Location:login.php');
  die();
}
include(base_path.'/layout/header.php');
include_once(base_path.'/logic/posts.php');
if(isset($_GET['id'])){
  $post = get_post($_GET['id']);
}
?>
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1><?php echo $post['title'];?></h1>            
            <span class="meta">Posted by
              <a href="#"><?php echo $post['name'];?></a>
              on <?php echo $post['publish_date'];?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <?php echo $post['content'];?>
        </div>
      </div>
    </div>
  </article>

  <hr>
  <?php

  include('layout/footer.php');
  ?>