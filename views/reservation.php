<?php
session_start();

include "../classes/course.php";
include "../classes/acc.php";


$course = new Course;
$course_list = $course->getCourses();

$acc = new Acc;
$acc_list = $acc->getAcc();

$res_date = $_GET['res_date'];
$id=$_SESSION['id'];

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Reservation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  </head>
  <body>
      <div class="container mx-auto w-50 my-5">
          <h1 class="display-4 text-center mb-5">Reservation</h1>
          <form action="../actions/reservation.php" method="post">
            <label for="day">Reservation Date</label>
            <input type="date" name="date_reserved" id="day" class="form-control mb-3 "  value="<?=$res_date?>"readonly>
            <label for="course-selection">Course selection</label>
            <select name="course_id" id="course-selection" class=" mb-3 form-select"required>
                <option value="" hidden>Select Course</option>
                <?php
                while($course_row = $course_list->fetch_assoc()){
                ?>  
                <option value="<?=$course_row['course_id']?>"><?=$course_row['course_name']?></option>
                <?php
                }
                ?>
            </select>
            <label for="no_of_poeple">Number of people</label>
            <input type="number" name="number_of_people" id="no_of_poeple" class="form-control mb-3" max="4">
            
            <label for="accommodation">Accommodation Option</label>
            <select name="acc_id" id="accommodation" class=" mb-3 form-select"required>
                <option value="" hidden>Do you use accommodation?</option>
                <?php
                while($acc_row = $acc_list->fetch_assoc()){
                ?>  
                <option value="<?=$acc_row['acc_id']?>"><?=$acc_row['acc_use']?></option>
                <?php
                }
                ?>
            </select>
            <a href="accommodation.php?res_date=<?=$res_date?>"><i class="fas fa-chevron-right"></i>See more</a>
            <input type="hidden" name="id" value="<?=$id?>">
            <button type="submit" class="btn btn-secondary mt-3 w-100">Next</button>
         </form>
      </div>

      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>