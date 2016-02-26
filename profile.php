<?php
require_once str_replace('profile.php', '', __FILE__) . 'classes/security.php';

$sec = new Security();

echo json_encode($sec->profile(), JSON_NUMERIC_CHECK);