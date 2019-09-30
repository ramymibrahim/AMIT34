<?php
//$_GET
//$_POST
//$_REQUEST
var_dump($_POST);
$color = $_REQUEST['color'];
$count = $_REQUEST['count'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .color-div {
            border: 1px solid black;
            background: <?php echo $color; ?>;
            width: 32%;
            float: left;
        }
    </style>
</head>

<body>
    <?php
    for ($i = 0; $i < $count; $i++) {
    ?>
        <div class="color-div">
            Welcome <?php echo $i?>
        </div>
    <?php
    }
    ?>
    <br />

    <?php
    for($i=0;$i<$count;$i++){
        echo '<div class="color-div">';
        echo "Welcome $i</div>";
    }
    ?>
    
</body>

</html>