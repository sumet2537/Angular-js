<?php
require_once str_replace('cancelbooking.php', '', __FILE__) . 'classes/booking.php';

$request = json_decode(file_get_contents('php://input'));

$booking = new Booking();

echo json_encode($booking->cancelBooking($request->booking_id), JSON_NUMERIC_CHECK);