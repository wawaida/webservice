<?php

// return senarai filem dikedai ini
include 'db.php';
 
// query data
$sql = "SELECT * FROM film LIMIT 0,20";
$rs = mysqli_query($con, $sql);
$arr = [];
while($row = mysqli_fetch_array($rs)){
    //echo $row['title'].'<br>';
    $obj = new stdClass();
    $obj->title = $row['title'];
    $obj->desc = $row['description'];
    $arr[] = $obj;
}


// print data sbg json
// {}/[] - json_encode() vs json_decode()
$json = json_encode($arr);
header('Content-type:application/json');
echo $json;

