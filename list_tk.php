<?php
session_start();
?>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
<?php
include 'connection.php';
$result = mysqli_query($conn, "SELECT * FROM userinfo");
?>
<div style="margin:0 auto; width:1000px;">

    <h1>Danh sách tài khoản</h1>
    <table border="1px;" style="text-align:center; margin-bottom:20px;">
        <tr>
            <td>Tài Khoản</td>
            <td>Mật Khẩu</td>
            <td>Email</td>
            <td>phone</td>
            <td>Gioitinh</td>
            <td>Vai trò</td>
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['password'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['phone'] ?></td>
                <td><?php echo $row['gioitinh'] ?></td>
                <td><?php echo $row['vaitro'] ?></td>
                <td><a href="sua_tk.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                <td>
                    <a onclick="alert('Bạn có chắc chắn muốn xóa tài khoản không ?')"
                       href="xoa_tk.php?id=<?php echo $row['id']; ?>">Delete
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <a href="them_tk.php">Thêm tài khoản mới</a><br>
    <a href="admin.html" style="width:60px; height:60px;">Quay lại</a>
</body>
</html>