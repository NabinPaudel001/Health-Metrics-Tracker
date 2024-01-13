<?php
include 'connect.php';
session_start();

// Ensure that the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // POST Stuff
    $Height = $_POST['height'];
    $Weight = $_POST['weight'];
    $Systolic = $_POST['systolic'];
    $Diastolic = $_POST['diastolic'];

    //Coming from Session Stuff
    $userID = $_SESSION['user_id'];
    $age = $_SESSION['age'];


    //Going to Session Stuff

    // if ($Height === '') {
    // } else {
    //     $_SESSION['height'] = $Height;
    // }

    // if ($Weight === '') {
    // } else {
    //     $_SESSION['weight'] = $Weight;
    // }

    // if ($Systolic === '') {
    // } else {
    //     $_SESSION['systolic'] = $Systolic;
    // }

    // if ($Diastolic === '') {
    // } else {
    //     $_SESSION['diastolic'] = $Diastolic;
    // }
    $_SESSION['height'] = ($Height === '') ? null : $Height;
    $_SESSION['weight'] = ($Weight === '') ? null : $Weight;
    $_SESSION['systolic'] = ($Systolic === '') ? null : $Systolic;
    $_SESSION['diastolic'] = ($Diastolic === '') ? null : $Diastolic;

    // $Bmi=$_POST['bmi'];
    // Insert the data into the healthrecord table
    $sql = "INSERT INTO healthrecord (UserID, Height, Weight, Age, SystolicPressure, DiastolicPressure, DateCreated) VALUES ('$userID','$Height', '$Weight', '$age', '$Systolic','$Diastolic',NOW())";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Data Stored Successfully.";
        header("location:dashboard\pages\app.php");
    } else {
        $_SESSION['error'] = "Error while inserting.";
        header("location:index.php");
    }

    // Close the database connection
    $conn->close();
}
