<?php
session_start();
include "../classes/user.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="calendar.css" type="text/css">
  </head>
  <style>
  .banner{
  height: 600px;
  background-image: url(../image/splash.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  position: relative;
  
  }
  .banner-text h1{
    font-size: 70px;
    color:white;
    padding-left:10px
  }
  </style>
 
  <body>
    <?php
    include 'calendar.php';
    include 'booking.php';
    include 'bookingcell.php';

    $booking = new Booking(
      'tutorial',
      'localhost',
      'root',
      ''
    );
    
    $bookableCell = new BookableCell($booking);
    $clendar = new Calendar();
    $calendar->attachObserver('showCell', $bookingCell);
    $bookableCell->routeActions();
    echo $calendar->show();
    ?>
  <!-- banner area -->
  <div class="banner">
    <div class="banner-text">     
      <h1>Skytastic Japan</h1>
    </div>          
  </div>

  <nav class="navbar navbar-expand">
    <div class="container">
            <div class="ms-auto">
                <ul class="navbar-nav">        
                        <li class="nav-item">
                            <a href="#" class="nav-link">Hello <?=$_SESSION['username']?></a>
                        </li>
                        <li class="nav-item">
                            <a href="../actions/logout.php" class="nav-link">Log out</a>
                        </li>
                    </ul>
            </div>
    </div>       
</nav>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>