<?php

//$_GET
//$_POST
//$_REQUEST
// var_dump($_POST['name']);
// $age=55;
// $gender = "female";

// $result=$age>60;

/*
>
>=
<
<=
==
===
!=
!==
*/

/*
&&
||
*/
// if(($age>=60 && $gender=="male") || ($age>=55 && $gender=="female")){
//     echo "<h1>You can retire</h1>";
// }
// else{
//     echo "<h2>You should study or take PHP course</h2>";
// }

/////////////////////////
/*
Ahmed has password = 123
Islam has password = 1234
Sherif has password = 12345
*/

//var_dump($_FILES['photo']);
$name=$_REQUEST['name'];
$password=$_REQUEST['password'];
$users = ["Ahmed"=>"123","Islam"=>"1234","Sherif"=>"12345"];
if(isset($users[$name]) && $users[$name]==$password){
    echo "Welcome $name ";
}
else{
    echo "Go to hell";
}

?>