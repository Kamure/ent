
<?php
include '../db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM doctors WHERE id=$id");
$doctor = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $specialization = $_POST['specialization'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE doctors 
            SET name='$name', specialization='$specialization', email='$email', phone='$phone' 
            WHERE id=$id";
    if ($conn->query($sql)) {
        header("Location: list.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<h2>Edit Doctor</h2>
<form method="POST">
    <input type="text" name="name" value="<?= $doctor['name'] ?>" required><br>
    <input type="text" name="specialization" value="<?= $doctor['specialization'] ?>" required><br>
    <input type="email" name="email" value="<?= $doctor['email'] ?>" required><br>
    <input type="text" name="phone" value="<?= $doctor['phone'] ?>"><br>
    <button type="submit">Update</button>
</form>