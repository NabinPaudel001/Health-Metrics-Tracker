<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Register</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <!-- Font Awesome CSS for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <!-- Add your custom stylesheets here if needed -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Allura&family=Josefin+Sans&family=Lato:ital,wght@1,300&family=Roboto+Serif:opsz@8..144&family=Ysabeau+SC&display=swap" rel="stylesheet" />
  <link href="register_style.css" rel="stylesheet" />
</head>

<body>
  <!-- Section: Design Block -->
  <section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image" style="
          background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
          height: 200px;
        "></div>
    <!-- Background image -->

    <div class="card mx-4 mx-md-5 shadow-5-strong mx-auto" style="
          margin-top: -100px;
          background: hsla(0, 0%, 100%, 0.8);
          backdrop-filter: blur(30px);
        ">
      <div class="card-body">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-5">
            <h2 class="fw-bold mb-5 text-3xl sm:text-5xl lg:text-8xl font-black">
              Register
            </h2>
            <form>
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-20 mt-1">
                  <div class="form-group">
                    <input type="email" name="email" required id="form3Example1" class="form-control w-100" placeholder=" " />
                    <label class="form-label" for="form3Example1">Full name</label>
                  </div>
                </div>
                <div class="col-md-20 mt-1">
                  <div class="form-group">
                    <input type="email" name="email" required id="form3Example1" class="form-control w-100" placeholder=" " />
                    <label class="form-label" for="form3Example1">Email</label>
                  </div>
                </div>
              </div>

              <!-- Email input -->
              <div class="column">
                <div class="col-md-10 mt-1">
                  <div class="form-group">
                    <input type="email" name="email" required id="form3Example1" class="form-control w-100" placeholder=" " />
                    <label class="form-label" for="form3Example1">Phone</label>
                  </div>
                </div>
                <div class="col-md-10 mt-1">
                  <div class="form-group">
                    <input type="email" name="email" required id="form3Example1" class="form-control w-100" placeholder=" " />
                    <label class="form-label" for="form3Example1">Phone</label>
                  </div>
                </div>
              </div>

              <!-- Password input -->
              <div class="col-md-20 mt-1">
                <div class="form-group">
                  <input type="email" name="email" required id="form3Example1" class="form-control w-100" placeholder=" " />
                  <label class="form-label" for="form3Example1">Gender</label>
                </div>
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">
                  Subscribe to our newsletter
                </label>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Sign up
              </button>

              <!-- Register buttons -->
              <div class="text-center">
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</body>
<!-- Bootstrap JS, Popper.js, and jQuery (required for Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Add your custom scripts here if needed -->

</html>