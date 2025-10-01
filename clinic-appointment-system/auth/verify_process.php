<?php
echo "Received user_id: " . htmlspecialchars($_POST['user_id']) . "<br>";
echo "Received OTP: " . htmlspecialchars($_POST['otp']) . "<br>";
require __DIR__ . '/../db.php';

if (!isset($_POST['user_id'], $_POST['otp'])) {
    echo "Missing verification data.";
    exit;
}

$user_id = $_POST['user_id'];
$otp = $_POST['otp'];

// Get latest OTP for this user
$stmt = $conn->prepare("SELECT otp_code, expires_at, is_used FROM email_verification WHERE user_id = ? ORDER BY created_at DESC LIMIT 1");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result()->fetch_assoc();

if ($result && !$result['is_used'] && $result['otp_code'] === $otp && strtotime($result['expires_at']) > time()) {
    // Mark user as verified
    $updateUser = $conn->prepare("UPDATE users SET is_verified = TRUE WHERE user_id = ?");
    $updateUser->bind_param("i", $user_id);
    $updateUser->execute();

    // Mark OTP as used
    $updateOTP = $conn->prepare("UPDATE email_verification SET is_used = TRUE WHERE user_id = ?");
    $updateOTP->bind_param("i", $user_id);
    $updateOTP->execute();

    echo "✅ Email verified successfully!";
    // Optional: redirect to dashboard or login
    // header("Location: login.php");
    // exit;
} else {
    echo "❌ Invalid or expired OTP.";
}
?>