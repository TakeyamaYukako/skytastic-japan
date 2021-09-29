<?php
$res_date = $_GET['res_date'];
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Accommodation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  </head>
  <body>

  
 
    <div class="container-fluid">
    <div class=" w-50 mt-5 mx-auto ">
      <a href="reservation.php?res_date=<?=$res_date?>"><i class="fas fa-chevron-left"></i></a>
    </div>
      <div class="card w-50 mt-5 mx-auto" style="background-color: #770000;">
 
         <img src="../image/hotel.jpg" alt="" class="card-img-top">
         <div class="card-body text-white">
            <h3 class="card-title">Accommodation details</h3>
            <h4 class="card-subtitle mb-2">Room highloghts</h4> 
            <p class="mb-1">・Sleeps 2</p>
            <p class="mb-1">・Cuisinart coffeemaker</p>
            <p class="mb-1">・LCD TV</p>
            <p class="mb-1">・Bathroom amenities</p>
            <p class="mb-1">・Air conditioning</p>
            <p class="mb-1">・Air conditioning</p>
            <p class="mb-1">・Hairdryer</p>
            <p class="mb-1">・Radio alarm clock</p>
            <p class="mb-1 lead">＊Please note that Breakfast and dinner is not included</p>
            <h4 class="card-subtitle mb-2 mt-2">Accommodation Amenities</h4> 
            <p class="mb-1">・On-site restaurant</p>
            <p class="mb-1">・Fitness center</p>
            <p class="mb-1">・Non-smoking rooms</p>



         </div>
      </div>
   </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>