<?php
include 'connect.php';
session_start();

// Ensure that the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve height and weight values from the POST data
    $userID = $_SESSION['user_id'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $systolic = $_SESSION['systolic'];
    $diastolic = $_SESSION['diastolic'];
    // $Bmi=$_POST['bmi'];
    // Insert the data into the healthrecord table
    $sql = "INSERT INTO healthrecord (UserID, Height, Weight, SystolicPressure, DiastolicPressure, DateCreated) VALUES ('$userID','$height', '$weight','$systolic','$diastolic',NOW())";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Data Stored Successfully.";
        header("location:index.php");
    } else {
        $_SESSION['error'] = "Error while inserting.";
        header("location:BMI.php");
    }

    // Close the database connection
    $conn->close();
}
