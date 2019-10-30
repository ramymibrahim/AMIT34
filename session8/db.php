<?php
function get_results($q){
    $results=[];
    $con = mysqli_connect('localhost','root','','classified');
    $query = mysqli_query($con,$q);
    while(($row = mysqli_fetch_assoc($query))!=null){
        array_push($results,$row);
    }
    mysqli_close($con);
    return $results;
}
?>