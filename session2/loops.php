<?php
$i=11;
do{
    echo "Welcome $i<br />";    
    $i++;
}
while($i<10);

$i=0;
while($i<10){
    echo $i;
    $i++;
}

$i=0;
echo "<br />";
for($i=0;$i<10;$i++){
    echo $i;
}

echo "<br />";
for($i=9;$i>=0;$i--){
    echo $i;
}
echo "<br />";
$names=["Ahmed","Mohamed","Essam","Ibrahim"];
for($i=0;$i<count($names);$i++){
    
    $n=$names[$i];
    echo $n."<br />";
}
echo "<br />";

foreach($names as $n){
    echo $n."<br />";
}

$students = ["name"=>"Ashraf","age"=>21,"course"=>"PHP Course"];
foreach($students as $k=>$v){
    echo "$k = $v<br />";
}
?>