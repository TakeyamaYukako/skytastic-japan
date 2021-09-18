<!doctype html>
<html lang="en">
  <head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    span {
        color: red;
      }
</style>

  </head>
  <body>
  <div class="container mx-auto w-50 my-5">
      <h1 class="display-4 text-center mb-5">Regisration</h1>
        <form action="../actions/register.php" method="post">
          <div class="row">
            <div class="col">
                <label for="first-name" >First Name <span>*</span></label>
            </div>
            <div class="col">
                <label for="last-name">Last Name <span>*</span></label>
            </div>
          </div>
            <div class="row">
              <div class="col">
                  <input
                  type="text"
                  name="first_name"
                  id="first-name"
                  class="form-control rounded-0 border-0 border-bottom"
                  required
                />
              </div>
                  <div class="col">
                      <input
                      type="text"
                      name="last_name"
                      id="last-name"
                      class="form-control rounded-0 border-0 border-bottom"
                      required
                    />
                  </div>
              </div>
              <div class="row">
                  <div class="col">
                        <label for="address">Address</label>
                    <input
                      type="text"
                      name="address"
                      id="address"
                      class="form-control rounded-0 border-0 border-bottom"
                    />
                  </div>
              </div>
              <div class="row">
                <div class="col">
                    <label for="contact-number" class="mt-3">Contact Number<span>*</span></label>
                    <input
                    type="text"
                    name="contact_number"
                    id="contact-number"
                    class="form-control rounded-0 border-0 border-bottom"
                    required
                  />
                  <div class="row">
                      <div class="col">
                          <label for="username" class="mt-3">Username <span>*</span></label>
                          <input
                          type="text"
                          name="username"
                          id="username"
                          class="form-control rounded-0 border-0 border-bottom"
                          maxlength="15"
                          required
                        />
                  <div class="row">
                      <div class="col">
                              <label for="password" class="mt-3">Password <span>*</span></label>
                              <input
                              type="password"
                              name="password"
                              id="password"
                              class="form-control rounded-0 border-0 border-bottom"
                              minlength="8"
                              required
                            />
                  <div class="row">
                    <div class="col">
                      <button
                      type="submit"
                      class="btn btn-secondary mt-3 w-100" name="btn_register">
                      Register
                      </button>
                    </div>
        </form>
                        <div class="col">
                            <p class="text-end mt-4 fs-6">Have an account? 
                                 <a href="login.php" target="#" class="text-decoration-none">Sign in</a>
                            </p>
                        </div>
                      </div>
                      </div>
                  </div>
                </div>
            </div>
            </div>
        </div>
    </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>