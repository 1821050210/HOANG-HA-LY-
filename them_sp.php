<html>
<head>
    <script src="resources/ckeditor/ckeditor.js"></script>
</head>
<body style="background-color:wheat;">
<?php
session_start();
?>
<?php
include 'connection.php';
$sql_catalog = "SELECT * FROM catalog";
$query_catalog = mysqli_query($conn, $sql_catalog);
if (isset($_POST['sbm'])) {
    $tieude = $_POST['tieude'];
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    //xem youtobe
    $ngaythang = $_POST['ngaythang'];
    $noidung = $_POST['noidung'];
    $catalog_id = $_POST['catalog_id'];

    $sql = "INSERT INTO news (tieude, image, ngaythang, noidung, catalog_id) 
        VALUES ('$tieude', '$image', '$ngaythang', '$noidung', '$catalog_id')";
    $query = mysqli_query($conn, $sql);
    move_uploaded_file($image_tmp, 'img/' . $image);
    header('location:list_sp.php');
}
?>
<div style=" text-align:center;">
    <div class="card">
        <h2 align='center'>Thêm Tin Tức</h2>
    </div>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
            <table align='center'>
                <tr>
                    <td>Tiêu đề:</td>
                    <td><input name="tieude" placeholder="Tiêu đề" type="text"></td>
                </tr>
                <tr>
                    <td>Ảnh :</td>
                    <td><input name="image" type="file"></td>
                </tr>
                <tr>
                    <td>Ngày tháng:</td>
                    <td><input name="ngaythang" placeholder="Ngày tháng" type="text"></td>
                </tr>
                <tr>
                    <td>Nội dung:</td>
                    <td><textarea name="noidung" id="kien" style="height:200px;width:250px"></textarea></td>
                </tr>
                <tr>
                    <td>Loại tin</td>
                    <td>
                        <select name="catalog_id">
                            <?php
                            while ($row_catalog = mysqli_fetch_assoc($query_catalog)) {
                                ?>
                                <option value="<?php echo $row_catalog['catalog_id']; ?>">
                                    <?php echo $row_catalog['catalog_name']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="sbm" class="btn btn-success">Thêm</button>
                    </td>
                </tr>

            </table>
        </form>
    </div>
</div>
<script>
    CKEDITOR.replace('kien');
</script>
</body>
</html>