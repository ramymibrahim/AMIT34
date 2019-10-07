<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,
        tr,
        td,
        th {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    // Connect to Database
    $con = mysqli_connect('localhost', 'root', '', 'amit33');
    mysqli_set_charset($con, 'utf8');
    $query = mysqli_query($con, "select * from posts");
    ?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>title</th>
                <th>content</th>
                <th>image</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while (($row = mysqli_fetch_assoc($query)) != null) {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['content']; ?></td>
                    <td><?php echo $row['image']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <?php
    mysqli_close($con);
    ?>

</body>

</html>