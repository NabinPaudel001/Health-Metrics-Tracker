<?php
include 'connect.php'; // Include your database connection file
session_start();
if (!isset($_SESSION["Name"])) {
    header("Location: ../../login.php");
    exit();
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

<h>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Health | Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <link rel="stylesheet" href="BMI.css">
    <link rel="stylesheet" href="pressure.css">
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <?php
        include 'styles\components\navbar.php';
        ?>

        <main>
            <!--? Slider Area Start-->
            <div class="slider-area slider-area2">
                <div class="slider-active dot-style">
                    <!-- Slider Single -->
                    <div class="single-slider  d-flex align-items-center slider-height2">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-7 col-lg-8 col-md-10 ">
                                    <div class="hero-wrapper">
                                        <div class="hero__caption">
                                            <h1 data-animation="fadeInUp" data-delay=".3s">Services</h1>
                                            <p data-animation="fadeInUp" data-delay=".6s">Health Metrics Calculator</p>

                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mb-50">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                    <h1 class="pb-5" data-animation="fadeInUp" data-delay=".6s">Enter the details :</h1>

                        <form id="bmiForm" method="POST" action="store_health.php">
                            <div class="form-group">
                                <label for="height" class="weight_height">Height (cm):</label>
                                <input type="number" name="height" class="form-control" style="height: 35px;" id="height" placeholder="Enter height">
                            </div>
                            <div class="form-group">
                                <label for="weight" class="weight_height">Weight (kg):</label>
                                <input type="number" name="weight" class="form-control" style="height: 35px;" id="weight" placeholder="Enter weight">
                            </div>
                            <div class="form-group">
                                <label for="systolic" class="input-label">Systolic Pressure:</label>
                                <input type="number" name="systolic" class="form-control" style="height: 35px;" id="systolic" placeholder="Enter systolic pressure">
                            </div>
                            <div class="form-group pb-5 ">
                                <label for="diastolic" class="input-label">Diastolic Pressure:</label>
                                <input type="number" name="diastolic" class="form-control" style="height: 35px;" id="diastolic" placeholder="Enter diastolic pressure">
                            </div>
                            <button type="submit" class=" btn-outline-success py-2 btn-block">Calculate</button>
                            <!-- <input type="text" id="bmi" name="bmi" hidden  > -->
                        </form>

                        <div id="result"></div>

                    </div>
                </div>
            </div>
            <!-- <script> -->



            <!-- Bootstrap JS and Popper.js -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <script>
                // function submitForm() {
                //     var height = document.getElementById('height').value;
                //     var weight = document.getElementById('weight').value;

                //     // Check if height and weight are provided
                //     var bmi = (weight / ((height / 100) * (height / 100))).toFixed(2);
                //     // document.getElementById('bmi').value=bmi;
                //     if (height && weight) {
                //         var resultDiv = document.getElementById('result');
                //         resultDiv.innerHTML = '<h5>Your BMI: ' + bmi + '</h5>';

                //         // Add additional styling based on BMI category
                //         if (bmi < 18.5) {
                //             resultDiv.innerHTML += '<p class="text-danger">Underweight</p>';
                //             resultDiv.style.backgroundColor = '#f8d7da';
                //         } else if (bmi >= 18.5 && bmi < 24.9) {
                //             resultDiv.innerHTML += '<p class="text-success">Normal weight</p>';
                //             resultDiv.style.backgroundColor = '#d4edda';
                //         } else if (bmi >= 25 && bmi < 29.9) {
                //             resultDiv.innerHTML += '<p class="text-warning">Pre-obese</p>';
                //             resultDiv.style.backgroundColor = '#FFC0CB';
                //         } else if (bmi >= 30 && bmi < 34.9) {
                //             resultDiv.innerHTML += '<p class="text-warning">Obese-Class I</p>';
                //             resultDiv.style.backgroundColor = '#FF6961';
                //         } else if (bmi >= 35 && bmi < 39.9) {
                //             resultDiv.innerHTML += '<p class="text-warning">Obese-Class II</p>';
                //             resultDiv.style.backgroundColor = '#DC143C';
                //         } else if (bmi >= 40) {
                //             resultDiv.innerHTML += '<p class="text-warning">Obese-Class III</p>';
                //             resultDiv.style.backgroundColor = '#eb3345';
                //         }

                //         // Display the result
                //         resultDiv.style.display = 'block';
                //     } else {
                //         alert('Please enter both height and weight');
                //     }
                //     var height = document.getElementById('height').value;
                //     var weight = document.getElementById('weight').value;
                //     // var bmi=document.getElementById('bmi').value;

                //     var xhr = new XMLHttpRequest();

                //     // Specify the type of request, the URL, and whether the request should be asynchronous
                //     xhr.open('POST', 'store_BMI.php', true);

                //     // Set the request header
                //     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                //     // Define the data to be sent to the server
                //     var data = 'height=' + height + '&weight=' + weight;

                //     // Set the callback function to handle the response from the server
                //     xhr.onreadystatechange = function() {
                //         if (xhr.readyState == 4 && xhr.status == 200) {
                //             // Display the server response
                //             // document.getElementById('result').innerHTML = xhr.responseText;
                //         }
                //     };

                //     // Send the data to the server
                //     xhr.send(data);
                //     // Get values from input fields
                // }
            </script>
           <footer>
    <div class="footer-wrapper section-bg3 " style="background-image:url(&quot;assets/img/gallery/footer-bg.png&quot;);transform: translateY(-20px);height:400px">
        <div class="footer-area footer-padding" >
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                        <div class="single-footer-caption mb-5">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="../index.php"><img src="assets/img/logo/logo2_footer.png" style="height: 70px;" alt="" /></a>
                            </div>
                            <div class="header-area">
                                <div class="main-header main-header2">
                                    <div class="menu-main d-flex align-items-center justify-content-start">
                                        <!-- Main-menu -->
                                        <div class="main-menu main-menu2">
                                            <nav>
                                                <ul>
                                                    <li><a href="../index.php">Home</a></li>
                                                    <li><a href="index.php?page=about">About</a></li>
                                                    <li><a href="index.php?page=services">Services</a></li>
                                                    <li><a href="blog.php">Blog</a></li>
                                                    <li><a href="index.php?page=contact">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social ">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="footer-tittle ">
                                <h4>Subscribe newsletter</h4>
                            </div>
                            <!-- Form -->
                            <div class="footer-form">
                                <div id="mc_embed_signup">
                                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                        <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'" />
                                        <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                Subscribe
                                            </button>
                                        </div>
                                        <div class=" info"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>
                                        Never miss new exciting and updates from us !!! Subscribe to our newsletter.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="footer-copy-right">
                                <p>
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    All rights reserved |
                                    <i class="fa-solid fa-hat-wizard"></i><a href="#" target="_blank">
                                        HackWizards</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
            <!-- Scroll Up -->
            <div id="back-top">
                <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
            </div>

            <!-- JS here -->

            <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
            <!-- Jquery, Popper, Bootstrap -->
            <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
            <script src="./assets/js/popper.min.js"></script>
            <script src="./assets/js/bootstrap.min.js"></script>
            <!-- Jquery Mobile Menu -->
            <script src="./assets/js/jquery.slicknav.min.js"></script>

            <!-- Jquery Slick , Owl-Carousel Plugins -->
            <script src="./assets/js/owl.carousel.min.js"></script>
            <script src="./assets/js/slick.min.js"></script>
            <!-- One Page, Animated-HeadLin -->
            <script src="./assets/js/wow.min.js"></script>
            <script src="./assets/js/animated.headline.js"></script>
            <script src="./assets/js/jquery.magnific-popup.js"></script>

            <!-- Date Picker -->
            <script src="./assets/js/gijgo.min.js"></script>
            <!-- Nice-select, sticky -->
            <script src="./assets/js/jquery.nice-select.min.js"></script>
            <script src="./assets/js/jquery.sticky.js"></script>

            <!-- counter , waypoint,Hover Direction -->
            <script src="./assets/js/jquery.counterup.min.js"></script>
            <script src="./assets/js/waypoints.min.js"></script>
            <script src="./assets/js/jquery.countdown.min.js"></script>
            <script src="./assets/js/hover-direction-snake.min.js"></script>

            <!-- contact js -->
            <script src="./assets/js/contact.js"></script>
            <script src="./assets/js/jquery.form.js"></script>
            <script src="./assets/js/jquery.validate.min.js"></script>
            <script src="./assets/js/mail-script.js"></script>
            <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

            <!-- Jquery Plugins, main Jquery -->
            <script src="./assets/js/plugins.js"></script>
            <script src="./assets/js/main.js"></script>

</body>

</html>