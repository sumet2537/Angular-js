<?php
require_once str_replace('login.php', '', __FILE__) . 'classes/security.php';

$request = json_decode(file_get_contents('php://input'));

$sec = new Security();

$row = $sec->login($request->username, $request->password);

echo json_encode($row);