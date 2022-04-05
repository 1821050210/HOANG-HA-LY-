<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./css/style.css">
    <script>
        $(document).ready(function () {
            $('#b').click(function () {
                location.href = "signin.php";
            });

        });
    </script>
</head>

<body>
<section class="full-box">
    <div class="box-user"
         style=" background-color:wheat; width:500px; height:300px;padding-top:100px; margin-left:450px; text-align:center;">
        <h1>Đăng nhập</h1>
        <form method="post">
            <table>
                <tr>
                    <td>Tài Khoản:</td>
                    <td><input name="username" placeholder="Tên tài khoản"></td>
                </tr>
                <tr>
                    <td>Mật Khẩu:</td>
                    <td><input name="password" placeholder="Mật khẩu" type="password"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center">
                        <input name="login-submit" value="Đăng Nhập" type="submit"/>
                    </td>
                </tr>
            </table>
        </form>
        <?php
        include 'connection.php';
        if (isset($_POST['login-submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username == "" || $password == "") {
                echo '<p style="text-align:center"> Hãy điền đủ thông tin của bạn !</p>';
            } else {
                $password = md5($password);
                $sql = "SELECT * FROM userinfo WHERE username ='$username' AND password = '$password'";
                $query = mysqli_query($conn, $sql);
                $num_rows = mysqli_num_rows($query);
                if ($num_rows != 0) {
                    $user = $query->fetch_assoc();
//                    echo "<pre>";
//                    var_dump($user);
                    $_SESSION["role"] = $user['vaitro'];
                    session_start();
                    echo '<p style="text-align:center"> bạn đã đăng nhập thành công !</p>';
                    header('location:' . ADMIN);
                } else {
                    echo '<p style="text-align:center"> Đăng nhập không thành công !</p>';
                }
            }
        }
        ?>
    </div>
</section>
</body>
</html>