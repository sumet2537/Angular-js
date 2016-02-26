<?php
require_once str_replace('rooms.php', '', __FILE__) . 'classes/booking.php';

$booking = new Booking();

echo json_encode($booking->rooms(), JSON_NUMERIC_CHECK);