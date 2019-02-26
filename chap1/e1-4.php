<?php 

require "../vendor/autoload.php"; //include semua lib dari vendor

$client = new \GuzzleHttp\Client(); //name space

$response = $client->request('GET', 'localhost:8080/webservice/chap1/data3.php', 
[
    'query' => [
        'First Name' => 'Che Wahida',
        'Middle Name' => 'Binti',
        'Last Name' => 'Che Pauzur'
        ]
]);

echo $response->getBody();
echo '<hr>';

$response2 = $client->request('POST', 'localhost:8080/webservice/chap1/data2.php', 
[
    'form_params' => [
        'field_name' => 'abc',
        'other_field' => '123',
        'nested_field' => [
            'nested' => 'hello'
        ]
    ]
]);

echo $response2->getBody();



