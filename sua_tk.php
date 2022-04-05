<?php
session_start();
?>
<?php
$id = $_GET['id'];
include 'connection.php';
$sql_up = "SELECT * FROM userinfo Where id = '$id' ";
$query_up = mysqli_query($conn, $sql_up);
$row_up = mysqli_fetch_assoc($query_up);
if (isset($_POST['sbm'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5("$password");
    $sql = "UPDATE userinfo SET username = '$username', password = '$password' where id = '$id'";
    $query = mysqli_query($conn, $sql);
    header('location:list_tk.php');
}
?>
<div style=" background-color:wheat; width:500px; margin-left:450px; text-align:center;">
    <h3>Sữa tài khoản</h3>
    <form method="post">
        <table align='center'>
            <tr>
                <td>Tài Khoản:</td>
                <td><input type="text" name="username" placeholder="Tên tài khoản"></td>
            </tr>
            <tr>
                <td>Mật Khẩu:</td>
                <td><input name="password" placeholder="Mật khẩu" type="password"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="sbm">sua</button>
                </td>
            </tr>
        </table>
    </form>
</div>