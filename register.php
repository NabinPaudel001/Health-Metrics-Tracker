<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Health | Template</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="manifest" href="site.webmanifest" />
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- CSS here -->
  <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/css/slicknav.css" />
  <link rel="stylesheet" href="assets/css/flaticon.css" />
  <link rel="stylesheet" href="assets/css/gijgo.css" />
  <link rel="stylesheet" href="assets/css/animate.min.css" />
  <link rel="stylesheet" href="assets/css/animated-headline.css" />
  <link rel="stylesheet" href="assets/css/magnific-popup.css" />
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
  <link rel="stylesheet" href="assets/css/themify-icons.css" />
  <link rel="stylesheet" href="assets/css/slick.css" />
  <link rel="stylesheet" href="assets/css/nice-select.css" />
  <link rel="stylesheet" href="assets/css/style.css" /> -->
  <link rel="stylesheet" href="styles\register_style.css">
  <!-- FontAwsome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
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
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <form method="post" action="process_form.php">
              <div class="row">
                <div class="col-md-20 mt-1">
                  <div class="form-group">
                    <input type="text" name="fname" required id="form3Example1" class="form-control w-100"
                      placeholder=" " />
                    <label class="form-label" for="form3Example1">Full name</label>
                  </div>
                </div>
                <div class="col-md-20 mt-1">
                  <div class="form-group">
                    <input type="email" name="email" required id="form3Example1" class="form-control w-100"
                      placeholder=" " />
                    <label class="form-label" for="form3Example1">Email</label>
                  </div>
                </div>
              </div>

              <!-- Email input -->
            <div class="row">
              <div class="col-md-5 mt-1 mr-5">
                <div class="form-group">
                  <input type="number" name="number" required id="form3Example1" class="form-control w-100"
                    placeholder=" " />
                  <label class="form-label" for="form3Example1">Phone</label>
                </div>
          </div>
              <div class="col-md-5 mt-2">
                <div class="form-group">
                  <label class="mx-3" >Gender</label>
                  <input type="radio" value="male" name="gender" /> Male    
                  <input type="radio" value="female" name="gender" /> Female 
                </div>
              </div>
            </div>

              <!-- Password input -->
              <div class="row">
              <div class="col-md-5 mt-1 mr-5">
                <div class="form-group mr-3">
                  <label class="">D.O.B</label>
                  <input type="date" name="dob" required class=" w-60"/>
                </div>
             </div>
          <div class="col-md-5 mt-1">
                <div class="form-group">
                  <input type="text" name="address" required id="form3Example1" class="form-control w-100"
                    placeholder=" " />
                  <label class="form-label" for="form3Example1">Address</label>
                </div>
          </div>
          <div class="col-md-20 mt-1">
                  <div class="form-group">
                    <input type="password" name="pw" required id="form3Example1" class="form-control w-100"
                      placeholder=" " />
                    <label class="form-label" for="form3Example1">Paasword</label>
                  </div>
                </div>
                <div class="col-md-20 mt-1">
                  <div class="form-group">
                    <input type="password" name="cpw" required id="form3Example1" class="form-control w-100"
                      placeholder=" " />
                    <label class="form-label" for="form3Example1">Confirm Password</label>
                  </div>
                </div>
            </div>
<!-- Checkbox -->
             

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

</html>
