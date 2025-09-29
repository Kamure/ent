<?php
session_start();
include '../db.php';

// Check if patient is logged in
if (!isset($_SESSION['patient_id'])) {
    header("Location: ../login.php");
    exit();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patient_id = $_SESSION['patient_id'];
    $doctor_id = $_POST['doctor_id'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sql = "INSERT INTO appointments (patient_id, doctor_id, date, time, status)
            VALUES ('$patient_id', '$doctor_id', '$date', '$time', 'Booked')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Appointment booked successfully!</p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Appointment</title>
</head>
<body>
    <h2>Book an Appointment</h2>
    <form method="POST" action="">
        <label for="doctor_id">Select Doctor:</label><br>
        <select name="doctor_id" required>
            <?php
            $result = $conn->query("SELECT id, name FROM doctors");
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['name']}</option>";
            }
            ?>
        </select><br><br>

        <label for="date">Date:</label><br>
        <input type="date" name="date" required><br><br>

        <label for="time">Time:</label><br>
        <input type="time" name="time" required><br><br>

        <input type="submit" value="Book Appointment">
    </form>
</body>
</html>