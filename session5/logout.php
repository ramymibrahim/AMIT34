<?php
include_once('helpers/config.php');
include(base_path.'/helpers/session.php');
unset($_SESSION['user']);
header('Location:index.php');
die();