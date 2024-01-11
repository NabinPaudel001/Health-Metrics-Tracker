<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $full_name = $_POST["fname"];
    $email = $_POST["email"];
    $phone = $_POST["number"];
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : null;
    $dob = $_POST["dob"];
    $address = $_POST["address"];
    $password = password_hash($_POST["pw"], PASSWORD_DEFAULT); // Hash the password for security
    


    // Prepare and execute the SQL query to insert data into the table
    $stmt = $conn->prepare("INSERT INTO user_data (full_name, email, phone, gender, dob, address, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $full_name, $email, $phone, $gender, $dob, $address, $password);
    $stmt->execute();
    $stmt->close();

    $conn->close();

    // You can redirect the user to a thank-you page or do other processing here
    header("Location: index.php");
    exit();
}
?>
