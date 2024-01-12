<?php
// Connect to your MySQL database
include '../../connect.php';

// Fetch data from the "metrics" table
$query = "SELECT m_id, height, age FROM metrics";
$result = mysqli_query($conn, $query);

// Process data and calculate BMI and BMR for each user
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $m_id = $row['m_id'];
    $height = $row['height'];
    $age = $row['age'];

    // Fetching data from the "tracks" table based on m_id
    $tracks_query = "SELECT week1, week2, week3, week4, week5 FROM weight_tracks WHERE m_id = $m_id";
    $tracks_result = mysqli_query($conn, $tracks_query);
    $tracks_row = mysqli_fetch_assoc($tracks_result);

    // Fetching data from the "systolic_tracks" table based on m_id
    $systolic_query = "SELECT day1, day2, day3, day4, day5, day6, day7 FROM systolic_tracks WHERE m_id = $m_id";
    $systolic_result = mysqli_query($conn, $systolic_query);
    $systolic_row = mysqli_fetch_assoc($systolic_result);

    // Fetching data from the "diastolic_tracks" table based on m_id
    $diastolic_query = "SELECT day1, day2, day3, day4, day5, day6, day7 FROM diastolic_tracks WHERE m_id = $m_id";
    $diastolic_result = mysqli_query($conn, $diastolic_query);
    $diastolic_row = mysqli_fetch_assoc($diastolic_result);

    // Calculating BMI for each week's weight
    $bmi_values = array();
    $bmr_values = array();
    foreach ($tracks_row as $week => $week_weight) {
        if ($week_weight !== null) {
            $bmi = $week_weight / (pow(($height / 100), 2));
            $bmi_values[$week] = $bmi;
            $bmr = 66 + (13.7 * $week_weight) + (5 * $height) - (6.8 * $age);
            $bmr_values[$week] = $bmr;
        } else {
            $bmi_values[$week] = 0;
            $bmr_values[$week] = 0;
        }
    }

    // Calculate Mean Blood Pressure for each day
    $mbp_values = array();
    foreach ($systolic_row as $day => $systolic) {
        if ($systolic !== null && $diastolic_row[$day] !== null) {
            $mbp = ($systolic + (2 * $diastolic_row[$day])) / 3;
            $mbp_values[$day] = $mbp;
        }
    }

    // Combining metrics, BMI, and BMR data
    $combined_data = array(
        'm_id' => $m_id,
        'bmr_values' => $bmr_values,
        'bmi_values' => $bmi_values,
        'mbp_values' => $mbp_values
    );
    $data[] = $combined_data;
}

// Convert data to JSON
$json_data = json_encode($data);

// Return the JSON data
echo $json_data;
