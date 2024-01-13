<?php
include 'connect.php';
session_start();
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


    // Convert the DOB string to a DateTime object
    $birthDate = new DateTime($dob);

    // Get the current date as a DateTime object
    $today = new DateTime();

    // Calculate the difference between the current date and the DOB
    $age = $today->diff($birthDate)->y;

    // Age and Gender goes as Session Variable
    $_SESSION['age'] = $age;
    $_SESSION['gender'] = $gender;

    // Check Password
    if ($_POST['password'] == $_POST['Cpassword']) {

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
