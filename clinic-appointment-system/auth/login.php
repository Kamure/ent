<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Patient Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login_process.php" method="POST">
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>