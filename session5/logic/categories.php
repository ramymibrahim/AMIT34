<?php
include_once(base_path.'/dal/db.php');
function get_categories(){
    return get_results("select * from categories");
}

function add_category($name){
    $query="INSERT INTO categories(id,name) VALUES(null,'$name')";
    return execute($query);
}
?>