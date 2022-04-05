<?php
session_start();
?>
<html>
<head>
    <script src="resources/ckeditor/ckeditor.js"></script>
</head>
<body style="background-color:wheat;">
<?php

$id = $_GET['id'];
include 'connection.php';
$sql_catalog = "SELECT * FROM catalog";
$query_catalog = mysqli_query($conn, $sql_catalog);

$sql_up = "SELECT * FROM news Where id = $id ";
$query_up = mysqli_query($conn, $sql_up);
$row_up = mysqli_fetch_assoc($query_up);
if (isset($_POST['sbm'])) {
    if ($_POST['tieude'] == '') {
        $tieude = $row_up['tieude'];
    } else {
        $tieude = $_POST['tieude'];
    }
    if ($_FILES['image']['name'] == '') {
        $image = $row_up['image'];
    } else {
        // $image= $row_up['image'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($image_tmp, 'img/' . $image);
    }
    if ($_POST['ngaythang'] == '') {
        $ngaythang = $row_up['ngaythang'];
    } else {
        $ngaythang = $_POST['ngaythang'];
    }
    if ($_POST['noidung'] == '') {
        $noidung = $row_up['noidung'];
    } else {
        $noidung = $_POST['noidung'];
    }
    if ($_POST['noidung'] == '') {
        $noidung = $row_up['noidung'];
    } else {
        $noidung = $_POST['noidung'];
    }
    if ($_POST['catalog_id'] == '') {
        $catalog_id = $row_up['catalog_id'];
    } else {
        $catalog_id = $_POST['catalog_id'];
    }

    $sql = " UPDATE  news SET tieude = '$tieude', image = '$image', ngaythang = '$ngaythang', noidung= '$noidung', catalog_id='$catalog_id' 
                where id=$id";
    $query = mysqli_query($connect, $sql);
    header('location:list_sp.php');
}
?>
<div style=" text-align:center;">
    <div class="card">
        <h2 align='center'>Sữa Tin Tức</h2>
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
                    <td><textarea name="noidung" id="kien"></textarea></td>
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
                        <button type="submit" name="sbm" class="btn btn-success">Sữa</button>
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