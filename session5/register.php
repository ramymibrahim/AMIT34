<?php
include('layout/header.php');
include('logic/posts.php');
if(isset($_GET['cat_id'])){
  $posts = get_posts($_GET['cat_id']);
}
else{
  $posts = get_posts();
}
?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Clean Blog</h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      <?php    
    foreach($posts as $post) {
    ?>
        <div class="post-preview">
          <a href="post.php?id=<?php echo $post['id'];?>">
            <h2 class="post-title">
              <?php echo $post['title'];?>
            </h2>            
          </a>
          <p class="post-meta">Posted by
            <a href="#"><?php echo $post['name'];?></a>
            on <?php echo $post['publish_date'];?></p>
        </div>
        <hr>
    <?php
    }
    ?>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>
  <?php
include('layout/footer.php');
  ?>