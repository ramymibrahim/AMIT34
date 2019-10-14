<?php
//Protect admin (admin is a user with type=1 )
include_once('../../helpers/config.php');
include_once(base_path . '/helpers/session.php');
include_once(base_path . '/logic/posts.php');
if (isset($_GET['id']) && !empty($_GET['id'])) {
    delete_post($_GET['id']);
 }
header('Location:show.php');
die();
