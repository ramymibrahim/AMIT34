<?php

function get_connection(){
    $con = mysqli_connect('localhost', 'root', '', 'amit33');
    mysqli_set_charset($con, 'utf8');
    return $con;
}
function get_results($q){
    $result=[];
    $con = get_connection();
    $query = mysqli_query($con, $q);
    while (($row = mysqli_fetch_assoc($query)) != null) {
        array_push($result,$row);
    }
    mysqli_close($con);
    return $result;
}


function get_result($q){    
    $con = get_connection();
    $query = mysqli_query($con, $q);
    $row = mysqli_fetch_assoc($query);
    mysqli_close($con);
    return $row;
}

function execute($q){
    $con = get_connection();
    $query = mysqli_query($con, $q);    
    mysqli_close($con);
    return $query;    
}
?>