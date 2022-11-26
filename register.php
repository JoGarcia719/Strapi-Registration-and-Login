<?php

include "vendor/autoload.php";

use App\AuthClient;

$client = new AuthClient();

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$result = $client->register($username, $email, $password);

//var_dump($result->getStatusCode());
//var_dump($result->getReasonPhrase());
//var_dump($result->getProtocolVersion());
//var_dump($result->getBody()->getContents());

header('Location: registration-success.php');