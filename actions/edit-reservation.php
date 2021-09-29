<?php
include "../classes/reservation.php";

$course_id = $_POST['course_id'];
$number_of_people = $_POST['number_of_people'];
$acc_id = $_POST['acc_id'];
$reservation_id =$_POST['reservation_id'];

$reservation = new Reservation;
$reservation->updateReservation($course_id,$number_of_people,$acc_id,$reservation_id);
?>