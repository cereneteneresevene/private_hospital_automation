<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "hospital";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Bağlantı hatası: " . $conn->connect_error);
    }

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    $department = isset($_POST['department']) ? $_POST['department'] : '';
    $doctor = isset($_POST['doctor']) ? $_POST['doctor'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    $check_sql = "SELECT * FROM randevular WHERE date = '$date' AND doctor = '$doctor'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        $_SESSION['notification'] = "Seçtiğiniz tarihte ve saatte bu doktordan başka bir randevu bulunmaktadır. Lütfen başka bir saat veya doktor seçiniz.";
        $_SESSION['notification_type'] = "danger";
    } else {
        $sql = "INSERT INTO randevular (name, email, phone, date, department, doctor, message)
                VALUES ('$name', '$email', '$phone', '$date', '$department', '$doctor', '$message')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['notification'] = "Randevunuz başarıyla oluşturuldu. Teşekkür ederiz!";
            $_SESSION['notification_type'] = "success";
        } else {
            $_SESSION['notification'] = "Hata: " . $conn->error;
            $_SESSION['notification_type'] = "danger";
        }
    }

    $conn->close();
}

header("Location: index.php");
exit();
?>
