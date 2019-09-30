<?php
function calc_tax($salary){
    if($salary<1000){
        return 0;
    }
    else if($salary>1000 && $salary<2000){
        return $salary*0.1;
    }
    else if($salary>2000 && $salary<3000){
        return $salary*0.15;
    }
    else{
        return $salary*0.2;
    }    
}

function print_salary($salary,$tax){
    $net = $salary-$tax;
    echo "Gross Salary :$salary<br />";
    echo "Tax :$tax<br />";
    echo "Net Salary: $net<br />";
}


$salaries=[1000,2000,3000,4000,5000];
foreach($salaries as $salary){
    print_salary($salary,calc_tax($salary));
}





//var_dump($x);


die();
$age = $_REQUEST['age'];
if($age>=60){
    echo "You have to retire";
}
elseif($age>=24){
    echo "You have to Work";
}
else if($age>0){
    $diff = 24-$age;
    for($i=0;$i<$diff;$i++){
        echo "You should work $diff years <br />";
    }
}

/*

echo "";
print_r($x);
var_dump($x);
isset($x);
count($y);
die();
sprintf();
phpinfo();


*/
