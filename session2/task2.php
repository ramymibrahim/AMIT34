<?php
$students = [
    ["name" => "Ahmed", "age" => 21],
    ["name" => "Ibrahim", "age" => 20],
    ["name" => "Sherif", "age" => 30],
    ["name" => "Youssef", "age" => 25],
    ["name" => "Ahmed", "age" => 21],
    ["name" => "Ibrahim", "age" => 20],
    ["name" => "Sherif", "age" => 30],
    ["name" => "Youssef", "age" => 25]
];
?>
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
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table style="">
        <?php
        $i = 0;
        for ($i = 0; $i < count($students) && false; $i++) {
            $s = $students[$i];
            echo "
            <tr>
                <td>" . $s["name"] . "</td>
                <td>" . $s[$i]['age'] . "</td>
            </tr>
        ";
        }

        foreach ($students as $s) {
            echo "<tr>";
            foreach ($s as $k => $v) {
                echo "<td>$k: $v</td>";
            }
            echo "</tr>";
        }
        $result=false;
        if($result){

        }
        else{

        }
        ?>
    </table>
</body>

</html>