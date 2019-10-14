<?php
//Protect admin (admin is a user with type=1 )
include_once('../../helpers/config.php');
include_once(base_path . '/helpers/session.php');
include_once(base_path . '/logic/categories.php');
$error='';
if(isset($_POST['name']) && isset($_POST['id'])){
    $result = update_category($_POST['id'],$_POST['name']);
    if($result){
        header('Location:show.php');
    }
    else{
        $error="Error while updating";
    }
}
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id=$_GET['id'];
    $category = get_category($id);
    if($category==null){
        header('Location:show.php');
        die();
    }
}
else{
    header('Location:show.php');
    die();
}

include_once(base_path . '/layout/header.php');
?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php echo base_url . '/'; ?>img/home-bg.jpg')">
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
        <div class="col-lg-12 col-md-12 mx-auto">
            <form action="update.php?id=<?php echo $id;?>" method="POST">
                <input type="hidden" name="id" value="<?php echo $id?>" />
                <input placeholder="Category Name" name="name" class="form-control" value="<?php echo $category['name']?>"/>
                <button class="btn btn-success">Update</button>
            </form>
           <span class="text-danger"><?php echo $error;?></span>
        </div>
    </div>
</div>

<?php
include_once(base_path . '/layout/footer.php');
?>