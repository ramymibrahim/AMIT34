<?php
$name=["Ramy","Mohamed","Ahmed"];//Zero indexed array
$student=["name"=>"Ramy","age"=>32,"course"=>'PHP'];
$age = 30;
echo $student['name'];

echo "My Name is ".$name[0]." and I'm $age years old <br />";
echo 'My Name is ' . $name[1] . ' and I\'m ' . $age . ' years old <br />';

/*
+
-
/
*
%

*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table style="border:1px solid black">
        <tr>
            <td>
                <h1><?php echo $name1 . " " . $age; ?></h1>
                <h2><?php echo 'Ramy'; ?></h2>
            </td>
        </tr>
    </table>
</body>

</html>
<?php
/*

echo "<h1>Welome to session 1</h1>";

$names=["Ramy","Ahmed","Ibrahim"];

$name="Ramy";
$age=19;

echo "My Name is  ".$name.", I'm ".$age.' years old';

//indexed Arrays - 0 indexed array
//Assocciative Arrays
echo "<br />";
$student = ["Ramy",19,"PHP Course"];
echo "Student name:".$student[0]." age:".$student[1].", course:".$student[2];
echo "<br />";


$student = ["name"=>"Ramy","age"=>19,"course"=>"PHP Course",12];
echo "Student name:".$student["name"]." age:".$student["age"].", course:".$student["course"];
echo "<br />";
/*

$price=15;
$quantity = 20;
$total = $price * $quantity;
$total = 1/2;
$total = 5%2;

*/

//echo $total;

// ==
// !=
// >
// <
// >=
// <=
// ===
/*
$age=109;

if($age<20){
    echo "You should complete your study";
    echo "<br />";
}
else if($age>=20 && $age<60){
    echo "You should Work";
    echo "<br />";
}
else{
    echo "You should retire";
    echo "<br />";
}
*/
?>