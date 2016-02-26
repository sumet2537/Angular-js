<?php
require_once str_replace('booking.php', '', __FILE__) . 'classes/booking.php';
require_once str_replace('booking.php', '', __FILE__) . 'classes/security.php';

$request = json_decode(file_get_contents('php://input'));

$booking = new Booking();
$sec = new Security();

echo json_encode($booking->bookingRoom([
    'uid' => $sec->getUserId(),
    'room_id' => $request->room,
    'days' => $request->days,
    'check_in_datetime' => date('Y-m-d', strtotime($request->check_in_date)),
    'check_out_datetime' => date('Y-m-d', strtotime($request->check_out_date))
]), JSON_NUMERIC_CHECK);