<?php
require_once str_replace('mybooking.php', '', __FILE__) . 'classes/booking.php';

$booking = new Booking();

echo json_encode($booking->myBooking(), JSON_NUMERIC_CHECK);