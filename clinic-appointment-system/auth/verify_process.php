<?php
include 'db.php';
$email = $_POST['email'];
$otp = $_POST['otp'];
$sql = "SELECT otp FROM patients WHERE email='$email'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($row['otp'] == $otp) {
    $conn->query("UPDATE patients SET verified=1 WHERE email='$email'");
    echo "Verification successful!";
} else {
    echo "Invalid OTP.";
}
?>
