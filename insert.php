<?php 
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $address = htmlspecialchars($_POST['address']);
    $stmt = $conn->prepare("INSERT INTO user (name, email, password, address) VALUES (?, ?, ?, ?)");
    if (!$stmt) {
        die("Lỗi chuẩn bị câu lệnh: " . $conn->error);
    }
    $stmt->bind_param("ssss", $name, $email, $password, $address);

    if ($stmt->execute()) {
        echo "Dữ liệu đã lưu thành công!";
    } else {
        echo "Đã xảy ra lỗi: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>
