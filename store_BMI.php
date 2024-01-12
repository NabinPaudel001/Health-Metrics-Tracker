<?php
include 'connect.php'; // Include your database connection file

// Ensure that the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve height and weight values from the POST data
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    // $Bmi=$_POST['bmi'];
    // Insert the data into the healthrecord table
    $sql = "INSERT INTO healthrecord (height, weight) VALUES ('$height', '$weight')";

    if ($conn->query($sql) === TRUE) {
        // echo "Data stored successfully!";
        header("location:BMI.php");
    } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
