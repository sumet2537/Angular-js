<?php
require_once str_replace('logout.php', '', __FILE__) . 'classes/security.php';

$sec = new Security();

$resp = $sec->logout();

echo json_encode($resp);