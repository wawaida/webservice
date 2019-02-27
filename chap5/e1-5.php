<?php

/*
JSON notation
[] = array
{} = object
    "key":"val"
sample: ["nama":"azman"]
- mesti ", x boleh'
-number tak perlu "", i.e "umur":40
*/

// create obj tanpa custom class
$obj = new stdClass();
$obj->nama = 'azman';
$obj->alamat = 'Puchong';

// convert obj kpd string JSON
echo json_encode($obj);
echo "<hr>";

$arr = ['nama'=>'John Doe', 'umur'=>40];
$data = json_encode($arr);
echo $data;

// json_encode()
// - convert arr/obj dlm PHP kpd JSON string
// json_decode()
// - convert string json kpd array/obj dalam PHP
