<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$id = $_POST['id'];
$table = $_POST['table'];

$sql = "DELETE FROM $table WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Veri başarıyla silindi.";
} else {
    echo "Silme hatası: " . $conn->error;
}

$conn->close();
?>
