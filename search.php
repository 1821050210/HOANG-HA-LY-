<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <label for="search">Tìm kiếm:</label>
        <input type="text" name="search" id="search">
        <input type="submit" name="send" value="Tìm">

        <?php
        $con = new mysqli("localhost", "root", "", "blog");
        if (isset($_GET['search'])) {
            $cont = $_GET['search'];

            $sql = "SELECT * FROM news WHERE tieude LIKE '%$cont%'";
            $re = $con->query($sql);
            if (!$con->query($sql)) {
                echo "Lỗi " . $con->error;
            } else {
                if ($re->num_rows > 0) {
                    while ($row = $re->fetch_assoc()) {
                        echo "<br>Tên tiêu đề: " . $row['tieude'] . "<br>Nội dung: " . $row['noidung'];
                    }
                } else {
                    echo "<br>Không tìm thấy kết quả nào";
                }
            }
        }
        ?>
    </form>
<!--<body>-->
<!--<form action="" method="get">-->
<!--    <label for="search">Tìm kiếm:</label>-->
<!--    <input type="text" name="search" id="search">-->
<!--    <input type="submit" name="send" value="Tìm">-->
<!---->
<!--    --><?php
//    include 'connection.php';
//    if (isset($_GET['search'])) {
//        $cont = $_GET['search'];
//
//        $sql = "SELECT * FROM nhanvien WHERE tennv LIKE '%$cont%'";
//        $re = $conn->query($sql);
//        if (!$conn->query($sql)) {
//            echo "Lỗi " . $conn->error;
//        } else {
//            if ($re->num_rows > 0) {
//                while ($row = $re->fetch_assoc()) {
//                    echo "<br>Tên thành viên: " . $row['tennv'] . "<br> ma nv: " . $row['manv'] .
//                        "<br> ngay sinh:" . $row['ngaysinh'] . "<br> chuc vu: " . $row['chucvu'];
//                }
//            } else {
//                echo "<br>Không tìm thấy kết quả nào";
//            }
//        }
//    }
//    ?>
<!--</form>-->
</body>
</html>