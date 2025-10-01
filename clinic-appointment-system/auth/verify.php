<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
$user_id = $_GET['user_id']; // Get user_id from URL
?>

<!DOCTYPE html>
<html>
<head>
    <title>OTP Verification</title>
</head>
<body>
    <h2>Verify Your Account</h2>
    <form action="verify_process.php" method="POST">
        <label for="otp">Enter OTP:</label><br>
        <input type="text" name="otp" maxlength="6" required><br><br>

        <!-- ✅ Hidden input to pass user_id -->
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

        <input type="submit" value="Verify">
    </form>
</body>
</html>