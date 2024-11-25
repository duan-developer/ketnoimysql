<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("DELETE FROM user WHERE id=?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Người dùng đã được xóa!";
    } else {
        echo "Lỗi khi xóa: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    header("Location: form2.php");
    exit();
}
?>
