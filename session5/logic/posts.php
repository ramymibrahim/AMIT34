<?php
include_once(base_path . '/dal/db.php');
function get_posts($cat_id = null)
{
    $query = "SELECT 
    posts.*,users.name,categories.name as category_name 
    from posts 
    INNER JOIN users on users.id=posts.user_id
    left join categories on categories.id = posts.category_id";
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

function delete_post($id)
{
    $query = "DELETE FROM posts WHERE id=$id";
    return execute($query);
}

function validatePost($values, $files, $update = false)
{
    $error = '';
    if (!isset($values['title']) || empty($values['title'])) {
        $error .= 'Title is required<br />';
    }

    if (!isset($values['category_id']) || empty($values['category_id'])) {
        $error .= 'Category is required<br />';
    }

    if (!$update) {
        if (empty($files) || !isset($files['image'])) {
            $error .= 'Image is required<br />';
        } else {
            if (
                $files['image']['type'] !== 'image/jpeg' &&
                $files['image']['type'] !== 'image/png' &&
                $files['image']['type'] !== 'image/jpg'
            ) {
                $error .= 'Invalid image type<br />';
            }
            if ($files['image']['size'] > 2 * 1024 * 1024) {
                $error .= 'Invalid image size<br />';
            }
        }
    }

    return $error;
}

function add_post($values, $files)
{
    $image =  microtime(false) . $files['image']['name'];
    move_uploaded_file($files['image']['tmp_name'], base_path . '/img/' . $image);
    $user = $_SESSION['user'];
    $title = $values['title'];
    $category_id = $values['category_id'];
    $user_id = $user['id'];
    $content = $values['content'];
    $query = "INSERT INTO posts(id,title,image,category_id,user_id,
    content) VALUES(null,'$title','$image',$category_id,$user_id,
    '$content')";
    return execute($query);
}

function update_post($id, $values, $files)
{    
    $title = $values['title'];
    $category_id = $values['category_id'];
    $content = $values['content'];
    if (isset($files['image']) && !empty($files['image']) && isset($_FILES['image']['name'])) {
        $image =  microtime(false) . $files['image']['name'];
        move_uploaded_file($files['image']['tmp_name'], base_path . '/img/' . $image);
        $query = "UPDATE posts set title='$title',category_id=$category_id        
        ,content='$content',image='$image' WHERE id=$id";
    } else {
        $query = "UPDATE posts set title='$title',category_id=$category_id        
        ,content='$content' WHERE id=$id";
    }

    return execute($query);
}
