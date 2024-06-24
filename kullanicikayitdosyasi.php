<?php
session_start();
require_once 'config.php';

$dsn = 'mysql:host=localhost;dbname=hospital;charset=utf8mb4';
$username = 'root';
$db_password = '';

try {
    $pdo = new PDO($dsn, $username, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($action == "signin") {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && $password === $user['password']) {
            $_SESSION['status'] = 'success';
            $_SESSION['message'] = 'Giriş başarılı.';
            header('Location: index.php');
            exit();
        } else {
            $_SESSION['status'] = 'error';
            $_SESSION['message'] = 'Geçersiz email veya şifre.';
            header('Location: randevu_giris.php');
            exit();
        }
    } elseif ($action == "signup") {
        $name = $_POST['name'];

        $password = $_POST['password'];

        $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        if ($stmt->execute([$name, $email, $password])) {
            $_SESSION['status'] = 'success';
            $_SESSION['message'] = 'Kayıt başarılı.';
            header('Location: randevu_giris.php');
            exit();
        } else {
            $_SESSION['status'] = 'error';
            $_SESSION['message'] = 'Kayıt sırasında bir hata oluştu.';
            header('Location: randevu_giris.php');
            exit();
        }
    }
}

?>
