<?php
include_once('dal/db.php');
function get_posts($cat_id = null)
{
    $query = "SELECT posts.*,users.name from posts INNER JOIN users 
    on users.id=posts.user_id";
    if ($cat_id != null) {
        $query = $query . " Where category_id=$cat_id";
    }
    return get_results($query);
}

function get_post($id)
{
    $query = "SELECT posts.*,users.name from posts INNER JOIN users 
    on users.id=posts.user_id where posts.id=$id";
    $posts = get_results($query);
    if (count($posts) > 0) {
        return $posts[0];
    }
    return null;
}
