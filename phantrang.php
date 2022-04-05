<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<?php
include 'connection.php';
//Tim tong sinh vien
$sql = "SELECT COUNT(id) AS TongBaiViet FROM news";
$hang = $conn->query($sql)->fetch_assoc();
$tong = $hang['TongBaiViet'];

//trang hien tai va gioi han trang
$hientai = isset($_GET['page']) ? $_GET['page'] : 1;
$gioihan = 2;

//tinh so trang
$sotrang = ceil($tong / $gioihan);


if ($hientai > $sotrang) {
    $hientai = $sotrang;
} else if ($hientai < 1) {
    $hientai = 1;
}

$start = ($hientai - 1) * $gioihan;

$result = $conn->query("SELECT * FROM news LIMIT $start, $gioihan");
?>
<div>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row['id'] . " | Tiêu đề: " . $row['tieude'] . "<img src='../" . $row['image'] . "' height='200px' width='200px'>| Nội dung: " . $row['noidung'] .
                "Ngày tháng: " . $row['ngaythang'] . "<br>";
        }
    } else {
        echo "Không có dữ liệu";
    }
    ?>

</div>
<div class="danhmuc">
    <?php
    if ($hientai > 1 && $sotrang > 1) {
        echo "<a class='trang' href='phantrang.php?page=" . ($hientai - 1) . "'>Pre</a>";
    }

    for ($i = 1; $i <= $sotrang; $i++) {

        if ($hientai == $i) {
            echo "<span class='hientai'>" . $i . "</span>";
        } else {
            echo "<a class='trang' href='phantrang.php?page=" . $i . "'> | " . $i . " | </a>";
        }
    }
    if ($hientai < $sotrang && $sotrang > 1) {
        echo "<a class='trang' href='phantrang.php?page=" . ($hientai + 1) . "'> | Next</a>";
    }
    ?>
</div>
</body>
</html>