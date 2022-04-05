<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Danh sách sản phẩm</title>
</head>
<body>
<div class="container-fluid">
    <div class="card-body">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Tiêu đề</th>
                <th>Ảnh tin tức</th>
                <th>Ngày đăng</th>
                <th>Nội dung</th>
                <th>Loại tin</th>
                <th>Sữa</th>
                <th>Xóa</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include 'connection.php';
            $sql = "SELECT * FROM news inner join catalog on news.catalog_id = catalog.catalog_id";
            $query = mysqli_query($conn, $sql);
            $i = 1;
            while ($row = mysqli_fetch_assoc($query)) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['tieude']; ?></td>
                    <td><img style="width:100px;" src="img/<?php echo $row['image']; ?>" alt=""></td>
                    <td><?php echo $row['ngaythang']; ?></td>
                    <td><?php echo $row['noidung']; ?></td>
                    <td><?php echo $row['catalog_name']; ?></td>
                    <td>
                        <a class="btn btn-warning" href="sua_sp.php?id=<?php echo $row['id']; ?>">Edit</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="alert('bạn có chắc chắn muốn xóa không ?')"
                           href="xoa_sp.php?id=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <a class="btn btn-primary" href="them_sp.php">Thêm mới</a>
        <a href="admin.html" class="btn btn-primary">Quay lại</a>
    </div>

</div>
</body>
</html>