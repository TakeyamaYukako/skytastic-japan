<?php
session_start();

include "../classes/course.php";
include "../classes/reservation.php";

$course = new Course;
$course_list = $course->getCourses();



$reservation = new Reservation;
$reservation_row = $reservation->getReservation($_GET['reservation_id']);
$reservation->skyDivingPay($reservation_row['course_name'],$reservation_row['number_of_people']);
$reservation->setAcc($reservation_row['acc_id']);
$reservation->totalPay();



$sdpay=$reservation->getSdpay();
$number_of_people=$reservation_row['number_of_people'];
$total_sdpay=$reservation->getTotalsdpay();
$accpay=$reservation->getAccpay();
$totalpay=$reservation->getTotalpay();
$acc_id=$reservation_row['acc_id'];
$reservation_id = $_GET['reservation_id'];

// echo $sdpay." ";
// echo $number_of_people." ";
// echo $total_sdpay." ";
// echo $accpay." ";
// echo $totalpay." ";
// echo $acc_id. " ";
// print_r($reservation_row);
// echo $_GET['reservation_id'];
echo $reservation_id;

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Payment Information</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  </head>
  <body>
      <div class="container mx-auto w-50 my-5">
          <h1 class="display-4 text-center mb-5">Payment Confirmation</h1>
          
        <div class="card w-70">
            <div class="row p-2">
                <p>Reservatio Date : <?=$reservation_row['date_reserved']?></p>
                <p>Course : <?=$reservation_row['course_name']?></p>
                <p>Number of people : <?=$reservation_row['number_of_people']?></p>
                <p>Reservatio Date : <?=$reservation_row['acc_use']?></p>

            </div>

           
        </div>

     
            <table class="table">
                <tbody>
                    <tr>
                    <td>Sky Diving(<?=$reservation_row['course_name']?>)</td>
                        <td>$<?=$sdpay?> × <?=$number_of_people?></td>
                        <td>$<?=$total_sdpay?></td>
                    </tr>
                    <tr>
                        <td>Accommodation</td>
                        <td></td>
                        <td>$<?=$accpay?></td>
                    </tr>
                    <tr>
                        <td>Totall Amount</td>
                        <td></td>
                        <td>$<?=$totalpay?></td>
                    </tr>
                </tbody>
                
            </table>
            <form action="../actions/payment.php" method="post">
                <input type="hidden" name="reservation_id" value="<?=$reservation_id?>">
                <input type="hidden" name="r_price" value="<?=$totalpay?>" >                
                <button type="submit" class="btn btn-primary  display-inline" >Reserve</button>
                <a href="edit.php?reservation_id=<?=$reservation_id?>" class="btn  btn-outline-secondary">Edit</a>

                
            </form>     
      

      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>