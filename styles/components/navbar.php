<?php
if (isset($_SESSION['Name'])) {
    $name = $_SESSION['Name'];
}
?>
<header>
    <!--? Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">

                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="../index.php"><img src="assets/img/logo/logo.png" style="height:50px" alt="" /></a>
                        </div>
                    </div>
                    <!-- End Logo -->

                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="../index.php">Home</a></li>
                                        <li><a href="index.php?page=about">About</a></li>
                                        <!-- <li><a href="services.html">Services</a></li> -->
                                        <li>
                                            <a href="index.php?page=services">Service</a>
                                            <ul class="submenu">
                                                <li><a href="BMI.php">BMI Calculator</a></li>
                                                <li>
                                                    <a href="BMR.php">BMR Calculator</a>
                                                </li>
                                                <!-- <li>
                                                    <a href="elements.html">Pregnancy Tracker</a>
                                                </li> -->
                                                <li>
                                                    <a href="pressure.php">Mean BP Calculator</a>
                                                </li>
                                                <!-- <li>
                                                    <a href="elements.html">Calories Recommender</a>
                                                </li> -->
                                            </ul>
                                        </li>
                                        <li><a href="index.php?page=contact">Contact</a></li>

                                        <!-- Added login and signup buttons in the navigation bar -->
                                        <?php
                                        if (isset($_SESSION['Name'])) {
                                            echo
                                            '<li><a href="dashboard\pages\app.php" class="d-block d-md-none">Dashboard</a></li>
                                            <li><a href="logout.php" class="d-block d-md-none">Logout</a></li>';
                                        } else {
                                            echo
                                            '<li><a href="../login.php" class="d-block d-md-none">Login</a></li>
                                            <li><a href="../register.php" class="d-block d-md-none">Sign Up</a></li>';
                                        }
                                        ?>
                                        <!-- <li><a href="../login.php" class="d-block d-md-none">Login</a></li>
                                        <li>
                                            <a href="../register.php" class="d-block d-md-none">Sign Up</a>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right-btn f-right d-none d-lg-block ml-15">
                                <!-- <button type="button" style="font-size: 90;" class="btn-outline-success">Success</button> -->
                                <?php
                                if (isset($_SESSION['Name'])) {
                                    echo
                                    '<a href="dashboard\pages\app.php" class="btn header-btn">Dashboard</a>
                                    <a href="logout.php" class="btn header-btn">Logout</a>';
                                } else {
                                    echo
                                    '<a href="../login.php" class="btn header-btn">Login</a>
                                    <a href="../register.php" class="btn header-btn">Sign Up</a>';
                                }
                                ?>


                                <!-- <a href="../login.php" class="btn header-btn">Login</a>
                                <a href="../register.php" class="btn header-btn">Sign Up</a> -->
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>