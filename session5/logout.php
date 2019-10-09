<?php
include('helpers/session.php');
unset($_SESSION['user']);
header('Location:index.php');
die();