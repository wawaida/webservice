<?php

require "../vendor/autoload.php"; //include semua lib dari vendor

$url = "http://localhost:8080/webservice/chap1/data2.php";
$data = ["name" => "Lorna", "email" => "lorna@example.com"];

$client = new \GuzzleHttp\Client(); //name space

$result = $client->post($url, ["json" => $data]);
echo $result->getBody();