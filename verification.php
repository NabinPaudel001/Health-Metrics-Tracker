<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userCode = $_POST["code"];
    
    // Check if the entered code matches the stored code
    if ($userCode == $_SESSION["verification_code"]) {
        // Code is correct, perform further actions (e.g., register the user)
        echo "Verification successful!";
        
        // Clear session variables
        unset($_SESSION["verification_code"]);
        unset($_SESSION["email"]);
    } else {
        echo "Verification failed. Please enter the correct code.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>
<body>
    <h2>Enter the 6-digit verification code sent to your email</h2>
    <form method="post" action="">
        <input type="text" name="code" maxlength="6" required>
        <button type="submit">Verify</button>
    </form>
</body>
</html>
