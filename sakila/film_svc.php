<?php

// return senarai filem dikedai ini
 

// connect ke db
$server = 'localhost';
$user = 'root';
$pwd = '';
$db = 'sakila';
$port = '3307';
$con = mysqli_connect($server, $user, $pwd, $db, $port);

if(! $con){
    echo "Connection Problem!";
    exit;
}


// query data
$sql = "SELECT * FROM film LIMIT 0,20";
$rs = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($rs)){
    echo $row['title'].'<br>';
}


// query data


// print data sbg json

