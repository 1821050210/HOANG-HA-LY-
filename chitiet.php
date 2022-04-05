<?php include 'header.php' ?>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" href="./css/style.css"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <title>Star news</title>
        <style>
            body {
                font-weight: Tahoma;
            }

            .content {
                margin: 90px 0 30px 0;
            }

            .content .giaitri {
                padding: 20px;
            }

            .content .giaitri a {
                text-decoration: none;
                padding-right: 10px;
            }

            .content .giaitri a i {
                font-size: 35px;
            }

            .content .giaitri a .i2 {
                color: #00FFFF;
            }

            .content .giaitri a .i3 {
                color: orange;
            }

            .content .giaitri a .i4 {
                color: red;
            }

            .content img {
                width: 75%;
                padding-bottom: 50px;
            }

            .content p {
                font-size: 21px;
            }

            .content p i {
                font-size: 15px;
                color: gray;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="content">
            <?php
            $id = $_GET['id'];
            include 'connection.php';
            $sql = "SELECT * FROM news WHERE id = '$id'";
            $query = mysqli_query($conn, $sql);
            if ($row = mysqli_fetch_assoc($query)) { ?>
                <h1><?php echo $row['tieude']; ?></h1>
                <p><i>Ngày <?php echo $row['ngaythang']; ?></i></p>
                <div class="giaitri">
                    <a href="#">
                        <i class="fa fa-facebook-square i1"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-twitter-square i2"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-envelope-square i3"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-pinterest-square i4"></i>
                    </a>
                </div>
                <img src="img/<?php echo $row['image']; ?>" alt="">
                <p>
                    <?php echo $row['noidung']; ?>
                </p>
            <?php } ?>
        </div>
<!--        <div class="nx">-->
<!--            <h5>Nhận xét</h5>-->
<!--            <form action="">-->
<!--                <textarea name="comment" id="comment" cols="155" rows="8" placeholder="Comment:"></textarea>-->
<!--            </form>-->
<!--        </div>-->
    </div>
    </body>
    </html>
<?php include 'footer.php' ?>