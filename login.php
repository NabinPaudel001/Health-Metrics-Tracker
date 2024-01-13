<?php
session_start();
include 'connect.php';
if (isset($_SESSION['Name'])) {
  header("Location: index.php");
}

// Ensure that form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Retrieve hashed password from the database based on the provided email
  $stmt = $conn->prepare("SELECT UserID, Name, Password FROM user WHERE Email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt->bind_result($userID, $name, $hashed_password);
  $stmt->fetch();
  $stmt->close();

  // Verify the entered password with the hashed password from the database
  if (password_verify($password, $hashed_password)) {
    $_SESSION['UserID'] = $userId;
    $_SESSION['Name'] = $name;
    $_SESSION['Email'] = $email;
    // Additional actions after successful login can be added here
    header("Location: dashboard\pages\app.php");
    exit();
  } else {
    echo "Invalid email or password.";
  }

  // Close the database connection
  $conn->close();
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <link rel="stylesheet" href="css\style.css">
  <!-- alrtify  -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Font Awesome CSS for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- Add your custom stylesheets here if needed -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Allura&family=Josefin+Sans&family=Lato:ital,wght@1,300&family=Roboto+Serif:opsz@8..144&family=Ysabeau+SC&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style_login.css">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
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
  <link rel="stylesheet" href="assets/css/nice-select.css" /> -->
  <link rel="stylesheet" href="style_login.css" />
</head>

<body>
  <section class="h-100 gradient-form " style="background-color: #eee;">
    <div class="container py-5 h-100 ">
      <div class="row d-flex justify-content-center align-items-center h-100 ">
        <div class="col-xl-10 ">
          <div class="card rounded-3 text-black shadow">
            <div class="row g-0 ">
              <div class="col-lg-6  ">
                <div class="card-body p-md-5 ">

                  <div class="text-center ">
                    <img src="logo.png" style="width: 200px;" alt="logo">

                  </div>
                  <h2 class="mt-4 mb-4 pb-1 text-center fw-bold">Login</h2>

                  <form method="post">
                    <p>Please login to your account</p>

                    <div class="col-md-20  mt-5">
                      <div class="form-group">
                        <input type="email" name="email" required id="form3Example1" class="form-control w-100" placeholder=" " />
                        <label class="form-label" for="form3Example1">Email</label>
                      </div>
                    </div>

                    <div class="col-md-20 mb-4 mt-4">
                      <div class="form-group">
                        <input type="password" name="password" required id="form3Example1" class="form-control w-100" placeholder=" " />
                        <label class="form-label" for="form3Example1">Password</label>
                      </div>
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1 ml-5">
                      <input name="login" value="Login" type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 mr-5 ml-5 pt-3 pb-3" style="width: 150px; height: 50px;" type="button">

                      <a class="text-muted mr-5" href="#!">Forgot password?</a>
                    </div>

                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2 text-nowrap">Don't have an account?</p>
                      <a href="register.php"><button type="button" class="btn btn-outline-danger mx-2">Create new</button></a>
                    </div>

                  </form>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 ">
                  <h4 class="mb-4">We are more than just a company</h4>
                  <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap JS, Popper.js, and jQuery (required for Bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
      <script>
        <?php if (isset($_SESSION['message_add'])){ ?>
          alertify.set('notifier','delay', 2);
        alertify.set('notifier','position', 'top-right');
        alertify.success('<?php echo $_SESSION['message_add'] ?>');
        <?php 
        unset($_SESSION['message_add']);
        } 
        ?>
        
      </script>
  <!-- Add your custom scripts here if needed -->

</body>

</html>