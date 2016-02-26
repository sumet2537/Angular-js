<?php
require_once str_replace('checkroom.php', '', __FILE__) . 'classes/booking.php';

$request = json_decode(file_get_contents('php://input'));

$booking = new Booking();

$roomId = $request->room_id;
$startDate = date('Y-m-d', strtotime($request->check_in_date));
$endDate = date('Y-m-d', strtotime($request->check_out_date));
$rents = $booking->checkRoom($roomId, $startDate, $endDate);

echo json_encode($rents, JSON_NUMERIC_CHECK);