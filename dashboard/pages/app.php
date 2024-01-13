<?php
include '../../connect.php';
include 'page-auth.php';    
$userID = $_SESSION['user_id'];
$sql = "SELECT * FROM healthrecord WHERE UserID = $userID";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>Health Metrics Dashboard</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-200">
    <?php
    include 'sidenav.php';
    ?>

    <?php
    // Check for the 'page' query parameter
    $page = isset($_GET['page']) ? $_GET['page'] : '';

    // Include the corresponding content based on the 'page' parameter
    switch ($page) {
        case 'notifications':
            include 'notifications.php';
            break;
        case 'profile':
            include 'profile.php';
            break;
        case 'tables':
            include 'tables.php';
            break;
        case 'sign-up':
            include 'sign-up.php';
            break;
        case 'sign-in':
            include 'sign-in.php';
            break;
        default:
            include 'dashboard.php';
            break;
    }
    ?>
</body>

</html>