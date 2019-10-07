<?php
function get_results($q){
    $result=[];
    $con = mysqli_connect('localhost', 'root', '', 'amit33');
    mysqli_set_charset($con, 'utf8');
    $query = mysqli_query($con, $q);
    while (($row = mysqli_fetch_assoc($query)) != null) {
        array_push($result,$row);
    }
    mysqli_close($con);
    return $result;
}
?>