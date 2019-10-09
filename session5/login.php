<?php
include_once('helpers/config.php');
include_once('helpers/session.php');
if ($user!=null) {
  header('Location:index.php');
  die();
}

include(base_path.'/logic/users.php');
$error = '';
if (isset($_POST['username']) && isset($_POST['password'])) {
  $user = get_user($_POST['username'], $_POST['password']);
  if ($user == null) {
    $error = "Invalid username or password";
  } else {
    $_SESSION['user'] = $user;
    header('Location:index.php');
    die();
  }
}
include('layout/header.php');
include('logic/posts.php');
if (isset($_GET['cat_id'])) {
  $posts = get_posts($_GET['cat_id']);
} else {
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


      <form action="login.php" method="POST">
        <input type="text" placeholder="username" name="username" class="form-control" />
        <input type="password" placeholder="password" name="password" class="form-control" />
        <button class="btn btn-primary">Login</button>
      </form>
      <span class="text-danger"><?php echo $error; ?></span>
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