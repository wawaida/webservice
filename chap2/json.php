<?php
// read data melalui RESTful webservice di jsonplaceholder

require "../vendor/autoload.php"; //include semua lib dari vendor

$client = new \GuzzleHttp\Client(['defaults' => [
    'verify' => 'false'
]]); //name space


$response = $client->request('GET', 'http://jsonplaceholder.typicode.com/posts/20');
$str = $response->getBody()->getContents();
$data = json_decode($str); // convert data json ke array/object dlm PHP

echo $data->title;
echo '<hr>';

$response = $client->request('GET', 'http://jsonplaceholder.typicode.com/posts');
$str = $response->getBody()->getContents();
$arr = json_decode($str); // convert data json ke array/object dlm PHP

//var_dump($arr);
foreach($arr as $data){
    echo 'user id: '.$data->userId.'<br>';
    echo 'id: '.$data->id.'<br>';
    echo 'title: '.$data->title.'<br>';
    echo 'body: '.$data->body.'<br><br>';
}