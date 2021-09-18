<!doctype html>
<html lang="en">
  <head>
    <title>login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
  <div class="container my-5 mx-auto w-25">
        <h1 class="display-4 text-center">Login</h1>
          <form action="../actions/login.php" method="post">
             <input type="text" name="username" id="username" class="form-control rounded-0 border-0 border-bottom border-dark border-2" placeholder="USERNAME" required/>
              <input type="password" name="password" id="password" class="form-control mt-3 rounded-0 border-0 border-bottom border-dark border-2" placeholder="PASSWORD" required/>
              <button type="submit" class="btn btn-primary mt-4 w-100" name="btn_log_in">ENTER</button>
              <div class="row mt-3">
              <div class="col text-center ">
                <a href="register.php" class="text-decoration-none text-primary">Create an Acount</a>
              </div>
            </div>
          </form>
      </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>