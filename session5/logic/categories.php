<?php
include_once(base_path.'/dal/db.php');
function get_categories(){
    return get_results("select * from categories");
}

function add_category($name){
    $query="INSERT INTO categories(id,name) VALUES(null,'$name')";
    return execute($query);
}

function get_category($id){
    return get_result("SELECT * FROM categories WHERE id=$id");
}

function update_category($id,$name){
    $query="UPDATE categories SET name='$name' WHERE id=$id";
    return execute($query);
}

function delete_category($id){
    $query="DELETE FROM categories WHERE id=$id";
    return execute($query);
}
?>