<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="resources/ckeditor/ckeditor.js"></script>
</head>
<body style="background-color:wheat;">
<?php
    session_start();
?>

<div  style=" text-align:center;">
    <div class="card">
            <h2 align='center'>Tạo Tin Tức</h2>
    </div>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
        <table align='center'>
                    <!-- <tr>
                        <td>Tiêu đề:</td>
                        <td><input name="tieude" placeholder="Tiêu đề" type="text"></td>
                    </tr>
                    <tr>
                        <td>Ảnh :</td> 
                        <td><input name="image"  type="file"></td>
                    </tr>
                    <tr>
                        <td>Ngày tháng:</td>
                        <td><input name="ngaythang" placeholder="Ngày tháng" type="text"></td>
                    </tr> -->
                    <tr>
                        <td><textarea name="noidung" id="kien" style="height:200px;width:250px"></textarea></td>
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