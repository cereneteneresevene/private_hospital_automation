<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

if (isset($_POST['department_id'])) {
    $department_id = $_POST['department_id'];

    $sql_doctors = "SELECT id, CONCAT(name, ' ', surname) AS full_name FROM doctors WHERE department_id = ?";
    $stmt = $conn->prepare($sql_doctors);
    $stmt->bind_param("i", $department_id);
    $stmt->execute();
    $result_doctors = $stmt->get_result();

    if ($result_doctors->num_rows > 0) {
        while($row_doctor = $result_doctors->fetch_assoc()) {
            echo '<option value="' . $row_doctor["id"] . '">' . $row_doctor["full_name"] . '</option>';
        }
    } else {
        echo '<option value="">Doktor bulunamadı</option>';
    }
}

$conn->close();
?>
