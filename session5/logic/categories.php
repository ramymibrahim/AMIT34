<?php
include_once('dal/db.php');
function get_categories(){
    return get_results("select * from categories");
}
?>