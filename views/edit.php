<?php
session_start();

include "../classes/course.php";
include "../classes/acc.php";
include "../classes/reservation.php";

$reservation = new Reservation;
$reservation_row = $reservation->getReservation($_GET['reservation_id']);
$course = new Course;
$course_list = $course->getCourses();

$acc = new Acc;
$acc_list = $acc->getAcc();

$res_date=$reservation_row['date_reserved'];

echo $_GET['reservation_id'];
$reservation_id = $_GET['reservation_id'];
echo $reservation_id;
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Edit</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
  <div class="container mx-auto w-50 my-5">
          <h1 class="display-4 text-center mb-5">Edit Reservation</h1>
          <form action="../actions/edit-reservation.php" method="post">
            <label for="day">Reservation Date</label>
            <input type="date" name="date_reserved" id="day" class="form-control mb-3 "  value="<?=$res_date?>"readonly>
            <label for="course-selection">Course selection</label>
            <select name="course_id" id="course-selection" class=" mb-3 form-select"required>
                <option value="" hidden>Select Course</option>
                <?php
                while($course_row = $course_list->fetch_assoc()){
                    if($course_row['course_name']==$reservation_row['course_name']){
                ?>    
                 <option value="<?=$course_row['course_id']?>" selected><?=$course_row['course_name']?></option>
                 <?php
                    }else{
                 ?>
                <option value="<?=$course_row['course_id']?>"><?=$course_row['course_name']?></option>
                <?php
                    }
                }
                ?>
            </select>
            <label for="no_of_poeple">Number of people</label>
            <input type="number" name="number_of_people" id="no_of_poeple" class="form-control mb-3" max="4" value="<?=$reservation_row['number_of_people']?>">
            
            <label for="accommodation">Accommodation Option</label>
            <select name="acc_id" id="accommodation" class=" mb-3 form-select"required>
                <?php
                while($acc_row = $acc_list->fetch_assoc()){
                  if($acc_row['acc_use']==$reservation_row['acc_use']){
                ?>
                <option value="<?=$acc_row['acc_id']?>" selected><?=$acc_row['acc_use']?></option>
                <?php
                  }else{
                ?>  
                 <option value="<?=$acc_row['acc_id']?>"><?=$acc_row['acc_use']?></option>
                <?php
                  }
                }
                ?>
            </select>
            <input type="hidden" name="reservation_id" value="<?=$reservation_id?>">
           
            <button type="submit" class="btn btn-secondary mt-3 w-100">Edit</button>
         </form>
      </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>