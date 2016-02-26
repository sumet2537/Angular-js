<?php
require_once str_replace('checkauth.php', '', __FILE__) . 'classes/security.php';
$sec = new Security();
echo json_encode($sec->checkAuth());

