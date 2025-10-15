
<?php
include '../db.php';

$id = $_GET['id'];
$sql = "DELETE FROM doctors WHERE id=$id";

if ($conn->query($sql)) {
    header("Location: list.php");
    exit;
} else {
    echo "Error: " . $conn->error;
}
?>