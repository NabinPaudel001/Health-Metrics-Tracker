<?php
include 'connect.php'; // Include your database connection file
session_start();

// Ensure that the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve height and weight values from the POST data
    $Systolic = $_POST['systolic'];
    $Diastolic = $_POST['diastolic'];
    // $userID = $_SESSION['user_id'];
    $_SESSION['systolic'] = $Systolic;
    $_SESSION['diastolic'] = $Diastolic;
    // $Mbp=$_POST['mbp'];
    // Insert the data into the healthrecord table
    // $sql = "INSERT INTO healthrecord (UserID, SystolicPressure, DiastolicPressure) VALUES ('$userID', '$Systolic', '$Diastolic')";

    // if ($conn->query($sql) === TRUE) {
    //     $_SESSION['success'] = "Data Stored Successfully.";
    // } else {
    //     // echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    // Close the database connection
    $conn->close();
}
