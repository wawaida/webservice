<?php

// include connection
include 'db.php';
 
// query data
// check jika client tidak hantar id, default '0'
$id = isset($_GET['id']) ? $_GET['id']:0;
$sql = "SELECT * FROM film WHERE film_id = $id";
$rs = mysqli_query($con, $sql);

if($rs){    
    // ada data
    $rows = mysqli_fetch_array($rs);
    if(!$rows){
        // id tak wujud
        $data = new stdClass();
        $data->err = 'No Data';
    } else {
        // berjaya patuh syarat
        $data = $rows;
    }
    
} else {
    // input bukan id
    $data = new stdClass();
    $data->err = 'No Data';
}

// print data sbg json
// {}/[] - json_encode() vs json_decode()
header('Content-type:application/json');
echo $json = json_encode($data);

