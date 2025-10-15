<?php
include '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $specialization = $_POST['specialization'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO doctors (name, specialization, email, phone) 
            VALUES ('$name', '$specialization', '$email', '$phone')";
    if ($conn->query($sql)) {
        header("Location: list.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<h2>Add Doctor</h2>
<form method="POST">
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="text" name="specialization" placeholder="Specialization" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="phone" placeholder="Phone"><br>
    <button type="submit">Save</button>
</form>