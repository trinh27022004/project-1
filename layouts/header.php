<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bất Động Sản Việt Nam</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./public/bootstrap-5.3.2/dist/css/bootstrap.css">
    <script src="./public/bootstrap-5.3.2/dist/js/bootstrap.js"></script>
</head>

<body>
    <?php $dsdm = loadall_dm();?>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="logo">
            <img src="./image/logo.png" width="100%" height="5%" alt="">
        </div>
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="../index.php">Trang chủ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Trang Chủ </a>
                    </li>
                <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index?action=sanpham">Sản Phẩm </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index?action=introduce">Giới Thiệu </a>
                    </li>
                    <li class="nav-item list-menu">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Danh Mục
                        </a>
                        <ul class="list-menu_small">
                            <!-- <li><a class="list-item" href="#">Action</a></li>
                            <li><a class="list-item" href="#">Another action</a></li>
                            <li><a class="list-item" href="#">Something else here</a></li> -->
                            <?php
                            foreach ($dsdm as $ds) {
                                extract($ds);
                                $linkdm = "index.php?action=sanpham&id_dm=" . $id_dm;
                                echo '<li><a href="' . $linkdm . '">' . $name . '</a></li>';
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Liên Hệ </a>
                    </li>
                </ul>
                <form action="index.php?action=sanpham" method="post" class="d-flex" role="search">
                    <input class="form-control me-2" type="search" name="kyw" id="" placeholder="Tìm Kiếm ..." aria-label="Search">
                    <button class="btn btn-outline-success" name="timkiem" id="tk" type="submit">Tìm Kiếm</button>
                </form>
                <div class="loginnav">
                    <button class="btn " type="submit"><a href="index?action=dangnhap">Đăng Nhập</a><a href="index?action=dky">/Đăng Ký</a></button>
                </div>
            </div>
        </div>
    </nav>