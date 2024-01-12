<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\SMTP;

include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $full_name = $_POST["fname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : null;
    $dob = $_POST["dob"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $confirm_password = $_POST["Cpassword"];

    // Check if passwords match
    if ($password !== $confirm_password) {
        // Passwords do not match, handle the error (you may redirect or display an error message)
        echo "Passwords do not match.";
        exit();
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Function to generate a random 6-digit code
    function generateVerificationCode()
    {
        return rand(100000, 999999);
    }

    // Function to send an email with the verification code
    function sendVerificationEmail($email, $code)
    {
        // require 'vendor/autoload.php';

        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/Exception.php';

        require 'PHPMailer/SMTP.php';

        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'outlook.office365.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'paudelnabin41@gmail.com'; // Your Gmail email address
            $mail->Password = 'Meuser23'; // Your Gmail password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 993;

            // Recipients
            $mail->setFrom('paudelnabin41@gmail.com', 'Sanjib Shah');
            $mail->addAddress($email);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Email Verification Code';
            $mail->Body = 'Your verification code is: ' . $code;

            $mail->send();
            echo "message sent";
            return true;
        } catch (Exception $e) {
            echo("Exception Mailer "+ $e);
            return false;
        }
    }

    // Generate a 6-digit verification code
    $verificationCode = generateVerificationCode();

    // Send the verification code via email
    if (sendVerificationEmail($email, $verificationCode)) {
        // Store the verification code and email in a database or session
        // For example, you can use a session to store the data temporarily
        session_start();
        $_SESSION["verification_code"] = $verificationCode;
        $_SESSION["email"] = $email;

        // Redirect to the verification page
        header("Location: verification.php");
        exit();
    } else {
        echo "Failed to send verification email.";
        exit(); // Add exit() to stop further execution if email sending fails
    }

    // Prepare and execute the SQL query to insert data into the table
    $stmt = $conn->prepare("INSERT INTO user_data (full_name, email, phone, gender, dob, address, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $full_name, $email, $phone, $gender, $dob, $address, $hashed_password);
    $stmt->execute();
    $stmt->close();

    $conn->close();

    // You can redirect the user to a thank-you page or do other processing here
    header("Location: index.html");
    exit();
}
?>
