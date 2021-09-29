<html>
<head>
    <link href="calendar.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<?php
include '../classes/calendar.php';
include '../classes/booking.php';
include '../classes/bookableCell.php';
 
 
$booking = new Booking(
    'skytastic-japan',
    'localhost',
    'root',
    ''
);
 
$bookableCell = new BookableCell($booking);
 
$calendar = new Calendar();
 
$calendar->attachObserver('showCell', $bookableCell);
 
$bookableCell->routeActions();
 
echo $calendar->show();
?>
</body>
</html>