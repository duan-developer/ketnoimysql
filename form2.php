<?php include 'db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Danh sách người dùng </h2>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Họ Tên</th>
            <th>Email</th>
            <th>Mật khẩu</th>
            <th>Địa chỉ</th>
            <th>Tùy Chọn</th>
        </tr>
        <?php 
        $result = $conn->query("select * from user");
        while($row = $result->fetch_assoc()){
            echo "<tr>
              <td>{$row['id']}</td>
              <td>{$row['name']}</td>
              <td>{$row['email']}</td>
              <td>{$row['password']}</td>
              <td>{$row['address']}</td>
               <td>
               <a href='edit.php?id={$row['id']}'>Sửa</a>
               <a href='delete.php?id={$row['id']}' onclick='return confirm(\"Bạn có chắc muốn xóa không ?\")'>Xóa</a>
               </td>


            </tr>";
        }
        
        
        ?>
    </table>
    <a href="form1.php">Thêm người dùng</a>
</body>
</html>