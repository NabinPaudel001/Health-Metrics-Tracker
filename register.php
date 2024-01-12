<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Your Bootstrap Page</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <!-- Font Awesome CSS for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <!-- Add your custom stylesheets here if needed -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Allura&family=Josefin+Sans&family=Lato:ital,wght@1,300&family=Roboto+Serif:opsz@8..144&family=Ysabeau+SC&display=swap"
    rel="stylesheet" />
  <link href="register_style.css" rel="stylesheet" />
</head>

<body>
  <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
  
                  <form class="mx-1 mx-md-4" method="POST" action="process_form.php">
  
                    <div class="d-flex flex-row col-md-20  mt-3">
                      <i class="fas fa-user  fa-lg me-2 fa-fw" style="transform: translateY(12px);"></i>
                      <div class="form-group">
                        <input type="text" name="fname" required id="form3Example1" class="form-control w-100" placeholder=" " />
                        <label class="form-label" for="form3Example1">Full Name</label>
                      </div>
                    </div>
  
                    <div class="d-flex flex-row col-md-20  mt-1">
                      <i class="fas fa-envelope fa-lg me-2 fa-fw" style="transform: translateY(12px);"></i>
                      <div class="form-group">
                        <input type="email" name="email" required id="form3Example1" class="form-control w-100" placeholder=" " />
                        <label class="form-label" for="form3Example1">Email</label>
                      </div>
                    </div>
  
                    <div class="d-flex flex-row col-md-20  mt-1">
                      <i class="fa-solid fa-phone fa-lg me-2 fa-fw" style="transform: translateY(12px);"></i>
                      <div class="form-group">
                        <input type="text" name="phone" required id="form3Example1" class="form-control w-100" placeholder=" " />
                        <label class="form-label" for="form3Example1">Phone</label>
                      </div>
                    </div>
  
                    <div class="d-flex flex-row col-md-20 mt-2  " style="transform: translateX(-8px);">
                      <i class="fa-solid fa-children fa-lg me-2 mx-2 fa-fw" style="transform: translateY(6px);"></i>
                      <div class="form-group">
                        <label class="mx-3 " >Gender</label>
                        <input type="radio" value="male" name="gender" /> Male    
                        <input type="radio" value="female" name="gender" /> Female 
                      </div>
                    </div>
  
                    <div class=" d-flex flex-row col-md-20 mt-2" style="transform: translateX(-5px);">
                      <i class="fa-regular fa-calendar-days fa-lg me-2 mx-2 fa-fw" style="transform: translateY(6px);"></i>
                      <div class="form-group">
                        <label class="mx-3" >DOB:</label>
                      
                          <input type="date" name="dob" required  />
                      
                      </div>
                    </div>
                  
                    <div class="d-flex flex-row col-md-20  mt-1">
                      <i class="fa-solid fa-location-dot  fa-lg me-2 fa-fw" style="transform: translateY(12px);"></i>
                      <div class="form-group">
                        <input type="text" name="address" required id="form3Example1" class="form-control w-100" placeholder=" " />
                        <label class="form-label" for="form3Example1">Location</label>
                      </div>
                    </div>
                    
                    <div class="d-flex flex-row col-md-20  mt-1">
                      <i class="fas fa-lock  fa-lg me-2 fa-fw" style="transform: translateY(12px);"></i>
                      <div class="form-group">
                        <input type="password" name="password" required id="form3Example1" class="form-control w-100" placeholder=" " />
                        <label class="form-label" for="form3Example1">Password</label>
                      </div>
                    </div>
                    
                    <div class="d-flex flex-row col-md-20  mt-1">
                      <i class="fa-solid fa-check-double  fa-lg me-2 fa-fw" style="transform: translateY(12px);"></i>
                      <div class="form-group">
                        <input type="password" name="Cpassword" required id="form3Example1" class="form-control w-100" placeholder=" " />
                        <label class="form-label" for="form3Example1">Confirm Password</label>
                      </div>
                    </div>
  
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-primary btn-lg">Signup</button>
                    </div>
  
                  </form>
  
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
  
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                    class="img-fluid" alt="Sample image">
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
<!-- Bootstrap JS, Popper.js, and jQuery (required for Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Add your custom scripts here if needed -->

</html>