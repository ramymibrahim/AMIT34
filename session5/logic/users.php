<?php
include('dal/db.php');
function get_user($username,$password){
    $query = "SELECT id,name,email,username,type FROM users where username='$username' and password='$password'";
    return get_result($query);
}
?>