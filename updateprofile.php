<?php
require_once str_replace('updateprofile.php', '', __FILE__) . 'classes/security.php';

$request = json_decode(file_get_contents('php://input'));

$sec = new Security();

echo json_encode($sec->updateProfile([
    'uid' => $request->uid,
    'email' => $request->email,
    'firstname' => $request->firstname,
    'lastname' => $request->lastname,
    'age' => $request->age,
    'birthday' => $request->birthday,
    'address' => $request->address
]), JSON_NUMERIC_CHECK);