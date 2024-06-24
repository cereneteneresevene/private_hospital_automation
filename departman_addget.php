<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital";

$department_name = $_POST['department_name'];

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$sql = "INSERT INTO departments (department_name) VALUES ('$department_name')";
if ($conn->query($sql) === TRUE) {
    header("Location: departman_add.php?status=success");
} else {
    header("Location: departman_add.php?status=error&message=" . urlencode($conn->error));
}

$conn->close();
?>
