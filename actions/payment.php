<?php
include "../classes/reservation.php";

$r_price = $_POST['r_price'];
$reservation_id = $_POST['reservation_id'];

$reservation= new Reservation;
$reservation->price($r_price,$reservation_id);
?>