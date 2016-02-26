<?php
require_once str_replace('register.php', '', __FILE__) . 'classes/security.php';

$request = json_decode(file_get_contents('php://input'));

$sec = new Security();

$row = $sec->register([
    'username' => $request->username,
    'password' => $request->password,
    'email' => $request->email,
    'firstname' => $request->firstname,
    'lastname' => $request->lastname
]);

echo json_encode($row, JSON_NUMERIC_CHECK);