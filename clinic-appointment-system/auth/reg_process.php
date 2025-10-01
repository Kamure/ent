<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../db.php';
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    


$check = $conn->prepare("SELECT user_id FROM users WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo "❌ This email is already registered. Please use a different one or log in.";
    exit;
}

$stmt = $conn->prepare("INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $password);
$stmt->execute();
$user_id = $stmt->insert_id;


$otp = rand(100000, 999999);
$expires = date("Y-m-d H:i:s", strtotime("+10 minutes"));

$stmt = $conn->prepare("INSERT INTO email_verification (user_id, otp_code, expires_at) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $user_id, $otp, $expires);
$stmt->execute();


$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;
    $mail->Username = 'kamurebeyonce@gmail.com';
    $mail->Password = 'masc xeub pudt cuhc';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('kamurebeyonce@gmail.com', 'Clinic System');
    $mail->addAddress($email);
    $mail->Subject = 'Your OTP Code';
    $mail->Body = "Dear $username,\n\nYour OTP code is: $otp\n\nIt expires in 10 minutes.";

    $mail->send();
    header("Location: verify.php?user_id=$user_id");
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>