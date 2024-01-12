<?php
// Connect to your MySQL database
include '../../connect.php';

// Replace $userID with the actual UserID of the user you want to retrieve records for
$userID = 1; // replace with the actual UserID

// Query to retrieve health records for a specific user
$sql = "SELECT * FROM HealthRecord WHERE UserID = $userID ORDER BY RecordID DESC";

$result = $conn->query($sql);

$bmiData = array();
$bmrData = array();
$mbpData = array();

if ($result->num_rows > 0) {
    $count = 0;
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        // Calculate BMI, BMR, and mean blood pressure
        $bmi = $row["Weight"] / (pow(($row["Height"] / 100), 2));

        $bmr = 66 + (13.7 * $row["Weight"]) + (5 * $row["Height"]) - (6.8 * $row["Age"]);

        $mbp = ($row["SystolicPressure"] + (2 * $row["DiastolicPressure"])) / 3;

        // Update the health record with calculated values
        $updateQuery = "UPDATE HealthRecord SET BMI = $bmi, BMR = $bmr, MeanBloodPressure = $mbp WHERE RecordID = " . $row["RecordID"];
        $conn->query($updateQuery);

        // Store the data for the chart
        $data[] = array(
            'RecordID' => $row["RecordID"],
            'BMI' => $bmi,
            'BMR' => $bmr,
            'MeanBloodPressure' => $mbp,
            // Add other fields as needed
        );

        // You can also perform any other processing or display logic here

        // Limit to the last 7 records
        if (++$count == 7) {
            break;
        }
    }
} else {
    echo "No health records found for the user.";
}

$conn->close();
// Convert data to JSON
$json_data = json_encode($data);

// Return the JSON data
echo $json_data;
