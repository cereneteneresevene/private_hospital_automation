<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$sql = "SELECT * FROM randevular";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>";
        echo "Adı: " . $row["name"] . "<br>";
        echo "E-posta: " . $row["email"] . "<br>";
        echo "Telefon: " . $row["phone"] . "<br>";
        echo "Randevu Tarihi: " . $row["date"] . "<br>";
        echo "Bölüm: " . $row["department"] . "<br>";
        echo "Doktor: " . $row["doctor"] . "<br>";
        echo "Mesaj: " . $row["message"] . "<br>";
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "Kayıt bulunamadı";
}

$conn->close();
?>
