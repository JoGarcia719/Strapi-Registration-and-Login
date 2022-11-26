<?php

include "vendor/autoload.php";

use App\AuthClient;

$client = new AuthClient();

$identifier = $_POST['identifier'];
$password = $_POST['password'];

$result = $client->login($identifier, $password);

$body = $result->getBody()->getContents();
$info = json_decode($body);
$details = $info->user;

$username = $details->username;
$email = $details->email;

//var_dump($result->getStatusCode());
//var_dump($result->getReasonPhrase());
//var_dump($result->getProtocolVersion());
//var_dump($result->getBody()->getContents());

header('Location: login-success.php?username=' . $username . '&email=' . $email);