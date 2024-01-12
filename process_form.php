<?php
// Ensure that form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "connect.php";

    // Create a database connection
    $conn = new mysqli('localhost', 'root', '', 'health_metric');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $Cpassword = password_hash($_POST['Cpassword'], PASSWORD_DEFAULT);

    // Check Password
    if ($_POST['password'] == $_POST['Cpassword']) {
        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO users_data (fname, email, phone, gender, dob, address, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $fname, $email, $phone, $gender, $dob, $address, $password);
    } else {
        die();
    }
    header("location:index.php");

    // if ($conn->query($sql) === TRUE) {
    //     echo "Registration successful!";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    // Close the database connection
    $conn->close();
}
