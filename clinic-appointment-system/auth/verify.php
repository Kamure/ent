<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>OTP Verification</title>
</head>
<body>
    <h2>Verify Your Account</h2>
    <form action="verify_process.php" method="POST">
        <label for="email">Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label for="otp">Enter OTP:</label><br>
        <input type="text" name="otp" maxlength="6" required><br><br>

        <input type="submit" value="Verify">
    </form>
</body>
</html>
