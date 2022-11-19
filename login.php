<?php

include "vendor/autoload.php";

use App\AuthClient;

function loginUser(){
    $token = '54dcb5637ad84de604350cfd36662df8b44628f9bce0134cd3d910aa7030aca272472f1e70627a304076da460746a61c32500e0fc64ecf1e8c935772efcc0d25a4cc7b50e95b7755e0b18fbbcaee15a5be78eeb37baa8cb2d308df66d052fd5b96d6a8e0f8feb2d8cd812ef936e64f07b16a1c63b05ca0380d8e983220c9c594';

$client = new AuthClient([
    'base_uri' => 'http://localhost:1337/api/'
]);

$identifier = $_POST['username'];
$password = $_POST['password'];

$result = $client->login();

var_dump($result->getStatusCode(__________________________));
var_dump($result->getReasonPhrase());
var_dump($result->getProtocolVersion());
var_dump($result->getBody()->getContents());
}