<?php
include 'connect.php'; // Include your database connection file

// Ensure that the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve height and weight values from the POST data
    $Systolic = $_POST['systolic'];
    $Diastolic = $_POST['diastolic'];
    // $Mbp=$_POST['mbp'];
    // Insert the data into the healthrecord table
    $sql = "INSERT INTO healthrecord (SystolicPressure, DiastolicPressure) VALUES ('$Systolic', '$Diastolic')";

    if ($conn->query($sql) === TRUE) {
        // echo "Data stored successfully!";
    } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>