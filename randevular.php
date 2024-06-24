<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $doctor_id = $_POST['doctor'];
    $appointment_date = $_POST['date'];
    $patient_name = $_POST['name'];
    $patient_email = $_POST['email'];
    $patient_phone = $_POST['phone'];
    $message = $_POST['message'];
    $department_id = $_POST['department'];

    $sql_check = "SELECT COUNT(*) as count FROM randevular WHERE doctor = ? AND date = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("is", $doctor_id, $appointment_date);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();
    $row_check = $result_check->fetch_assoc();

    if ($row_check['count'] > 0) {
        echo "Bu tarih ve saatte zaten bir randevu mevcut. Lütfen başka bir tarih ve saat seçin.";
    } else {
        $sql_insert = "INSERT INTO randevular (name, email, phone, date, department, doctor, message, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("sssisis", $patient_name, $patient_email, $patient_phone, $appointment_date, $department_id, $doctor_id, $message);

        if ($stmt_insert->execute()) {
            echo "Randevu başarıyla alındı.";
        } else {
            echo "Randevu alma sırasında bir hata oluştu: " . $stmt_insert->error;
        }
    }

    $stmt_check->close();
    $stmt_insert->close();
}

$conn->close();
?>
