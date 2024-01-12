<?php
include 'connect.php';
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
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
    <link rel="stylesheet" href="BMR_style.css">
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
                                            <p data-animation="fadeInUp" data-delay=".6s">Almost before we knew it, we<br> had left the ground</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form id="bmrForm">
                            <div class="form-group">
                                <label for="weight" class="input-label">Weight (kg):</label>
                                <input type="number" style="height: 35px;" class="form-control" id="weight" placeholder="Enter weight">
                            </div>
                            <div class="form-group">
                                <label for="height" class="input-label">Height (cm):</label>
                                <input type="number" style="height: 35px;" class="form-control" id="height" placeholder="Enter height">
                            </div>
                            <div class="form-group">
                                <label for="age" class="input-label">Age (years):</label>
                                <input type="number" style="height: 35px;" class="form-control" id="age" placeholder="Enter age">
                            </div>
                            <div class="form-group">
                                <label class="input-label">Gender:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                            <button type="button" class="btn-outline-success py-3 btn-block" onclick="calculateBMR()">Calculate</button>
                        </form>

                        <div id="result" class="fade"></div>

                    </div>
                </div>
            </div>

            <!-- Bootstrap JS and Popper.js -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <script>
                function calculateBMR() {
                    var weight = document.getElementById('weight').value;
                    var height = document.getElementById('height').value;
                    var age = document.getElementById('age').value;
                    var gender = document.querySelector('input[name="gender"]:checked');

                    if (weight && height && age && gender) {
                        var bmr;

                        if (gender.value === 'Male') {
                            bmr = 66 + (13.7 * weight) + (5 * height) - (6.8 * age);
                        } else {
                            bmr = 655 + (9.6 * weight) + (1.8 * height) - (4.7 * age);
                        }

                        var resultDiv = document.getElementById('result');
                        resultDiv.innerHTML = "<h3 class='text-center' style='font-size:15px'>Your BMR: <span class='font-weight-bold'>" + bmr.toFixed(2) + "</span>" + ' calories/day</h3>';
                        resultDiv.classList.add('show');
                        // Change background color based on BMR value
                        if (bmr < 1500) {
                            resultDiv.innerHTML += '<p class="text-danger text-center">Under</p>';
                            resultDiv.style.backgroundColor = '#fff3cd'; // Red background for low BMR
                        } else if (bmr >= 1500 && bmr < 2000) {
                            resultDiv.innerHTML += '<p class="text-success text-center">Normal</p>';
                            resultDiv.style.backgroundColor = '#d4edda'; // Green background for moderate BMR
                        } else {
                            resultDiv.innerHTML += '<p class="text-warning text-center">Over</p>';
                            resultDiv.style.backgroundColor = '#f8d7da'; //  background for high BMR
                        }
                    } else {
                        alert('Please enter all the required information.');
                    }
                }
            </script>
            <footer>
                <div class="footer-wrappr section-bg3" data-background="assets/img/gallery/footer-bg.png">
                    <div class="footer-area footer-padding ">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                                    <div class="single-footer-caption mb-50">
                                        <!-- logo -->
                                        <div class="footer-logo mb-25">
                                            <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                        </div>
                                        <d iv class="header-area">
                                            <div class="main-header main-header2">
                                                <div class="menu-main d-flex align-items-center justify-content-start">
                                                    <!-- Main-menu -->
                                                    <div class="main-menu main-menu2">
                                                        <nav>
                                                            <ul>
                                                                <li><a href="index.html">Home</a></li>
                                                                <li><a href="about.html">About</a></li>
                                                                <li><a href="services.html">Services</a></li>
                                                                <li><a href="blog.html">Blog</a></li>
                                                                <li><a href="contact.html">Contact</a></li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </d>
                                        <!-- social -->
                                        <div class="footer-social mt-50">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                    <div class="single-footer-caption">
                                        <div class="footer-tittle mb-50">
                                            <h4>Subscribe newsletter</h4>
                                        </div>
                                        <!-- Form -->
                                        <div class="footer-form">
                                            <div id="mc_embed_signup">
                                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                                    <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'">
                                                    <div class="form-icon">
                                                        <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                            Subscribe
                                                        </button>
                                                    </div>
                                                    <div class="mt-10 info"></div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="footer-tittle">
                                            <div class="footer-pera">
                                                <p>Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium misem ut ipsum.</p>
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
                                    <div class="col-xl-10 ">
                                        <div class="footer-copy-right">
                                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                                Copyright &copy;<script>
                                                    document.write(new Date().getFullYear());
                                                </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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