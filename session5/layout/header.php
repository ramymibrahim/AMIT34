<?php
include_once(base_path.'/helpers/session.php');
include_once(base_path.'/logic/categories.php');
$categories = get_categories();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Clean Blog - Start Bootstrap Theme</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url.'/';?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url.'/';?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url.'/';?>css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url.'/';?>index.php">Start Bootstrap</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url.'/';?>index.php">Home</a>
                    </li>
                    <?php
                    foreach ($categories as $_category) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url.'/';?><?php echo 'index.php?cat_id=' . $_category['id']; ?>"><?php echo $_category['name']; ?></a>
                        </li>
                    <?php
                    }
                    ?>

                    <?php
                    if (isset($_SESSION['user'])) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url.'/';?>logout.php">Logout</a>
                        </li>
                    <?php
                    } else {
                        ?>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url.'/';?>login.php">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url.'/';?>register.php">Register</a>
                        </li>
                    <?php
                    }
                    ?>


                </ul>
            </div>
        </div>
    </nav>