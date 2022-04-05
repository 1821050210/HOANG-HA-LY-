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

        .container {
            background-color: white;
        }
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
    </div>
</div>
</body>
</html>    