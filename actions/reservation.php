<?php
include "../classes/reservation.php";

$id=$_POST['id'];
$date_reserved = $_POST['date_reserved'];
$course_id = $_POST['course_id'];
$number_of_people = $_POST['number_of_people'];
$acc_id = $_POST['acc_id'];

$reservation = new Reservation;

$reservation->makeReservation($id,$date_reserved, $course_id, $number_of_people, $acc_id);
