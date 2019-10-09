<?php
//Protect admin (admin is a user with type=1 )
include_once('../../helpers/config.php');
include_once(base_path . '/helpers/session.php');
include_once(base_path . '/layout/header.php');
include_once(base_path . '/logic/categories.php');
$categories = get_categories();
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
            <a href="create.php" class="btn btn-success">Create</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th width="350px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($categories as $category) {
                        ?>
                        <tr>
                            <td><?php echo $category['id'];?></td>
                            <td><?php echo $category['name'];?></td>
                            <td>
                                <a href="update.php?id=<?php echo $category['id'];?>" class="btn btn-primary">update</a>
                                <a href="delete.php?id=<?php echo $category['id'];?>" class="btn btn-danger">delete</a>
                            </td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?php
include_once(base_path . '/layout/footer.php');
?>