<?php
include 'db.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$otp = rand(100000, 999999);
$sql = "INSERT INTO patients (name, email, password, otp, verified) VALUES ('$name', '$email', '$password', '$otp', 0)";
$conn->query($sql);

header("Location: verify.php?email=$email");
?> 
