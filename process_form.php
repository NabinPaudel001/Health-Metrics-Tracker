<?php
include 'connect.php';
// Ensure that form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $Cpassword = password_hash($_POST['Cpassword'], PASSWORD_DEFAULT); // Hash the confirm password



    // $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    // $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    // $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    // $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    // $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    // $address = mysqli_real_escape_string($conn, $_POST['address']);
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // $Cpassword = password_hash($_POST['Cpassword'], PASSWORD_DEFAULT);

    // Check Password
    if ($_POST['password'] == $_POST['Cpassword']) {
        // $stmt = $conn->prepare("INSERT INTO user (Name, Email, Phone, Gender, DateOfBirth, Address, Password) VALUES (?, ?, ?, ?, ?, ?, ?)");
        // $stmt->bind_param("sssssss", $fname, $email, $phone, $gender, $dob, $address, $password);
        $sql = "INSERT INTO user (Name, Email, Phone, Gender, DateOfBirth, Address, Password) VALUES ('$fname', '$email', '$phone', '$gender', '$dob', '$address', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
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
