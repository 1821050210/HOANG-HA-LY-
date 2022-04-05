<?php
include 'connection.php';
if (isset($_POST['sbm'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gioitinh = $_POST['gioitinh'];
    $vaitro = $_POST['vaitro'];
    $password = md5($password);
    $sql = "INSERT INTO userinfo (username, password ,email ,phone ,gioitinh,vaitro) 
        VALUES ('$username', '$password', '$email', '$phone', '$gioitinh','$vaitro')";
    $query = mysqli_query($conn, $sql);
    header('location:list_tk.php');
}
?>
<div class="box-user">
    <form method="post">
        <table>
            <tr>
                <td>Tài Khoản:</td>
                <td><input name="username" placeholder="Tên tài khoản" type="text" required></td>
            </tr>
            <tr>
                <td>Mật Khẩu:</td>
                <td><input name="password" placeholder="Mật khẩu" type="password" required></td>
            </tr>
            <tr>
                <td>Vai trò</td>
                <td><input type="radio" name="vaitro" value="admin" required>Quản trị viên
                    <input type="radio" name="vaitro" value="nkd" required>Người kiểm duyệt
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" placeholder="Email" required></td>
            </tr>

            <tr>
                <td>Phone:</td>
                <td><input type="text" name="phone" placeholder="Số điện thoại" required></td>
            </tr>
            <tr>
                <td>giới tính</td>
                <td>
                    <input name="gioitinh" value="Nam" type="radio" checked/>Nam
                    <input name="gioitinh" value="Nữ" type="radio" checked/> Nữ
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="sbm">Them</button>
                </td>
            </tr>
        </table>
    </form>
</div>