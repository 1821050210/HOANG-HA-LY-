<?php
require_once 'route.php';
?>

<a href="<?php echo ADMIN ?>">Admin Page</a>
<a href="login.php">Login</a>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Star news</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            font-weight: Tahoma;
        }

        .main-menu {
            margin-bottom: 10px;
            border-bottom: 4px solid #e8e8e8;
        }

        .main-menu nav ul {
            margin-left: 70px;
        }

        .main-menu nav ul li {
            padding-right: 25px;
        }

        .main-menu nav ul li a {
            font-size: 18px;
            font-weight: bold;
            color: black;
        }

        .main-menu nav ul li:hover a {
            border-bottom: 2px red solid;
        }

        .banner {
            margin-bottom: 50px;
        }

        .banner .container-item {
            margin-top: 16px;
            border: black 2px solid;
        }

        .banner .banner-img {
            width: 100%;
            height: 300px;
            transition: all ease-in-out;
            position: relative;
        }

        .banner_k {
            width: 100%;
            overflow: hidden;
        }

        .banner .txt {
            width: 100%;
            position: absolute;
            bottom: 50px;
            box-sizing: border-box;
            top: 60%;
        }

        .banner .txt a p {
            background-color: black;
            color: whitesmoke;
            padding: 5px;
            font-size: 11px;
            width: 70px;
        }

        .banner .txt a p:hover {
            background-color: blue;
            color: white;
        }

        .banner .txt a h4 {
            color: white;
            font-size: 20px;
            font-weight: bold;
        }

        .banner .banner_k:hover .banner-img {
            transform: scale(1.1);
            transition: all ease-in-out 1.5s;
        }

        .list-news {
            margin-bottom: 50px;
            padding-bottom: 10px;
            border-bottom: 4px solid #e8e8e8;
        }

        .list-news .item-new img {
            height: 120px;
        }

        .list-news .item-new .docx a {
            color: black;
            text-decoration: none;
            font-weight: bold;
        }

        .list-news .item-new .docx a h6 {
            font-size: 14px;
        }

        .list-news .item-new .docx p {
            font-size: 12px;
            color: gray;
        }

        .list-news .item-new .docx a:hover {
            color: red;
        }

        .tintuc ul {
            margin: 0px;
            padding: 0px;
        }

        .main {
            border-bottom: 4px solid #e8e8e8;
        }

        .tintuc {
            padding-bottom: 40px;
        }

        .tintuc ul li {
            list-style: none;
            margin-top: 20px;
            clear: left;
        }

        .tintuc ul li a {
            text-decoration: none;
            color: #000;
        }

        .tintuc ul li a img {
            float: left;
            width: 250px;
            margin-right: 20px;
            margin-bottom: 35px;
        }

        .tintuc ul li a h2 {
            margin-top: 0px;
            font-size: 22px;
            font-weight: bold;
        }

        .tintuc ul li p {
            font-size: 12px;
            color: gray;
        }

        .tintuc ul li a:hover {
            color: brown;
        }

        .main-right img {
            margin-bottom: 20px;
        }

        .main-center {
            margin-top: 40px;
        }

        /* .on-top{
            position: relative;
        } */
        .on-top .txt {
            position: absolute;
            top: 35%;
        }

        .on-top .txt h4 {
            font-size: 18px;
            color: white;
            padding-left: 10px;
        }

        .on-top .txt h4:hover {
            color: red;
        }

        .tintuc2 ul {
            margin: 0px;
            padding: 0px;
        }

        .tintuc2 ul li {
            list-style: none;
            clear: left;
            margin-top: 20px;
        }

        .tintuc2 ul li a {
            text-decoration: none;
            color: #000;
        }

        .tintuc2 ul li a img {
            float: left;
            width: 130px;
            height: 77px;
            margin-right: 20px;
            margin-bottom: 20px;
        }

        .tintuc2 ul li a h2 {
            margin-top: 0px;
            font-size: 12px;
            font-weight: bold;
        }

        .tintuc2 ul li a:hover {
            color: brown;
        }

        .tintuc2 ul li p {
            font-size: 13px;
            color: gray;
        }

        .style {
            margin-top: 20px;
        }

        .style a {
            text-decoration: none;
        }

        .style a p {
            background-color: red;
            width: 100px;
            padding: 0px 7px;
            height: 30px;
            color: white;

        }

        .style1 {
            padding-top: 50px;
        }

        .style1 a {
            text-decoration: none;
        }

        .style1 a p {
            background-color: red;
            width: 100px;
            padding: 0px 7px;
            height: 30px;
            color: white;

        }

        .two {
            margin-top: 20px;
        }

        footer {
            margin-top: 50px;
            background-color: #222222;
            padding-top: 70px;
            padding-bottom: 50px;
        }

        footer img {
            margin-top: 50px;
        }

        footer .title {
            color: cornsilk;
        }

        footer .icon {
            color: white;
        }

        footer .icon a {
            text-decoration: none;
            color: white;
        }

        footer .icon a i {
            font-size: 30px;
            padding-left: 10px;
            padding-top: 10px;
        }

        footer .icon i:hover {
            color: violet;
        }

        .NEWS {
            background-color: gray;
        }

        .container {
            background-color: white;
        }

        #demo-2 input[type=search] {
            width: 15px;
            padding-left: 10px;
            color: transparent;
            cursor: pointer;
        }

        #demo-2 input[type=search]:hover {
            background-color: #fff;
        }

        #demo-2 input[type=search]:focus {
            width: 130px;
            padding-left: 32px;
            color: #000;
            background-color: #fff;
            cursor: auto;
        }

        #demo-2 input:-moz-placeholder {
            color: transparent;
        }

        #demo-2 input::-webkit-input-placeholder {
            color: transparent;
        }

        /* .nut a{
             opacity:0.6;
             display: none;
            }
        .nut a:hover{
            background-color: #007bb6;
            color: #fff;
            border: 1px solid #007bb6;
            opacity:1;
        }
        .nut a i{
            font-size: 60px;
            }
        .nut a{
            border-radius: 6px;
            background-color: #333333;
            padding: 10px 20px;
            white-space: nowrap; color: #fff;
            position: fixed;
            bottom: 75px;
            right: 30px;
            height: 44px;
        } */

    </style>
</head>

<body>
<div class="NEWS">
    <div class="container">
        <div class="herder">
            <!-- logo -->
            <div class="logo_item" style="text-align: center;">
                <img src="./images/logo-mona-1-300x120.png" alt="Logo" width="300px" height="120px">
            </div>
            <!-- MENU -->
            <div class="main-menu">
                <nav class="navbar navbar-expand-lg ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#"><i class="fa fa-home"></i>Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Thể thao</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Giải trí</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Du lịch</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sức Khỏe</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Khoa học</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Liên Hệ</a>
                            </li>
                            <li class="nav-item">
                                <form class="form-inline">
                                    <input style="border-radius:13px 13px;"
                                           name="search"
                                           class="form-control form-control-sm ml-3 w-75" type="text"
                                           placeholder="Search"
                                           aria-label="Search">

                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- banner -->
        <section class="banner">
            <div class="banner-top">
                <div class="container-item">
                    <div class="banner_k">
                        <img src="images/banner_1.jpg" class="banner-img" alt="">

        <main class="main">
            <div class="row">
                <div class="col-md-9 ">
                    <div class="main-left">
                        <div class="tintuc">
                            <ul>
                                <?php
                                include 'connection.php';
                                if(isset($_GET['search'])) {
                                    $q = $_GET['search'];
                                    $sql = "SELECT * FROM news WHERE tieude like '%$q%'";
                                } else {
                                    $sql = "SELECT * FROM news";
                                }
                                $query = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($query)) { ?>
                                    <li>
                                        <a href="chitiet.php?id=<?php echo $row['id']; ?>">
                                            <img src="img/<?php echo $row['image']; ?>" alt="">
                                            <h2><?php echo $row['tieude']; ?></h2>
                                            <p><?php echo $row['ngaythang']; ?></p>
                                        </a>
                                        <p><?php echo $row['noidung']; ?></p>
                                    </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="main-right">
                        <img src="http://mauweb.monamedia.net/ngoisao.net/wp-content/uploads/2019/04/banner-the-phoenix-dan-phuong-300x700.jpg'"
                             alt="quang cáo" width="100%">
                        <img src="images/300x600.jpg" alt="quang cáo" width="100%">
                        <img src="http://mauweb.monamedia.net/ngoisao.net/wp-content/uploads/2019/04/minigame_2016.png"
                             alt="quảng cáo" width="100%">
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="row">
                <div class="col-md-3">
                    <img src="images/logo-mona-w-300x120.png" alt="footer" width="100%">
                </div>
                <div class="col-md-6">
                    <dvi class="row">
                        <div class="col-sm-6">
                            <div class="title " style="text-align:center">
                                <h4>Thông Tin</h4>
                                <p>
                                <h6>Nhóm 9</h6>
                                <ul style="list-style:none;">

                                    <li>Phạm Trung KIên</li>
                                    <li>Nguyễn Quang huy</li>
                                    <li>Đinh Thị Cẩm Ly</li>
                                    <li>Hoàng Hà Ly</li>
                                    <li>Đoàn Mạnh Ninh</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div style="color:white; text-align:center">
                                <h4>Địa Chỉ</h4>
                                <p>Trường đại học Mỏ - Đại Chất</p>
                            </div>

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.0067258234426!2d105.77165101475617!3d21.072393585974716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134552defbed8e9%3A0x1584f79c805eb017!2sHanoi%20University%20of%20Mining%20and%20Geology!5e0!3m2!1sen!2s!4v1600045112244!5m2!1sen!2s"
                                    width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen=""
                                    aria-hidden="false" tabindex="0">
                            </iframe>
                        </div>
                    </dvi>
                </div>
                <div class="col-md-3">

                    <div class="icon" align="center">
                        <h4>FOLLOW US</h4>
                        <a href="#"> <i class="fa fa-facebook-square"></i></a>
                        <a href="#"><i class="fa fa-twitter-square"></i></a>
                        <a href="#"> <i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-envelope-square"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="nut">
        <a class="on_top" href="#top" style="display: block;  border-radius: 6px;
    background-color: #333333;
    padding: 10px 20px;
    white-space: nowrap; color: #fff;
    position: fixed;
    bottom: 75px;
    right: 30px;
    height: 44px;"><i class="fa-arrow-circle-up fa"></i></a>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.on_top').fadeIn();
            } else {
                $('.on_top').fadeOut();
            }
        });
        $('.on_top').click(function () {
            $("html, body").animate({scrollTop: 0}, 2000);

            return false;
        });
    });
</script>
</body>

</html>
