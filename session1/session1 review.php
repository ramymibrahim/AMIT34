<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>!
    
</body>
</html>
<?php

$name="Ahmed";

echo '<h1>Welcome '.$name.'</h1>';
echo "<h1>$name</h1>";

$names=["Ahmed","Mohamed","Ibrahim"];
$student=["Ahmed","PHP Course",19];
$student=["name"=>"Ahmed",'course'=>'PHP Course','age'=>19];
var_dump($student);
//print_r($names);
echo "<br />";
echo "Student Name:".$student["name"]." <br />Course: ".$student['course'];


?>