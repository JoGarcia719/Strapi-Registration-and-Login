<?php

include "vendor/autoload.php";

use App\AuthClient;

function registerUser(){
    $token = '8b5bcf450e791c8f738eee4aac4e5533adb1579157715b20f9d5f43c0e809a8453863ab9b849a6ef75a65fc07a841c2d5a9f1ea55d81150bc2481e719d89b15439906a4e80bfc886019584be3c6aa0c70fbd01a3be3f3f3e5235a8fa809f9eab7203fddf3fb239a663180f3d7ed0ecd2f8ae8ff3ebb0453436319bd4beb05cce';

$client = new AuthClient([
    'base_uri' => 'http://localhost:1337/api/'
]);

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$result = $client->register(__________________________);
}
var_dump($result->getStatusCode());
var_dump($result->getReasonPhrase());
var_dump($result->getProtocolVersion());
var_dump($result->getBody()->getContents());
