<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}


$name = $_POST['name'];
$surname = $_POST['surname'];
$image = $_FILES['image']['name'];
$department_id = isset($_POST['department_id']) ? $_POST['department_id'] : '';

$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
$target_dir = "assets/img/doctors/";
$target_file = $target_dir . basename($image);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    $message = "Sadece JPG, JPEG, PNG & GIF dosya türleri yükleyebilirsiniz.";
    header("Location: doctor_add.php?status=error&message=" . urlencode($message));
    exit();
}

if (!move_uploaded_file($image_tmp, $target_file)) {
    $message = "Dosya yüklenirken bir hata oluştu.";
    header("Location: doctor_add.php?status=error&message=" . urlencode($message));
    exit();
}

$sql = "INSERT INTO doctors (name, surname, department_id, image) VALUES ('$name', '$surname', '$department_id', '$image')";
if ($conn->query($sql) === TRUE) {
    header("Location: doctor_add.php?status=success");
} else {
    $message = "Hata: " . $conn->error;
    header("Location: doctor_add.php?status=error&message=" . urlencode($message));
}

$conn->close();
?>
