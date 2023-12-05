<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bất Động Sản Việt Nam</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./public/bootstrap-5.3.2/dist/css/bootstrap.css">   
     <script src="./public/bootstrap-5.3.2/dist/js/bootstrap.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha384-rns01zlyFhgZlGb8rDEqMWgTc2Hf7FJv7H82FD8PQPSPqD/DAwnQr3eDZ5O1gHdi" crossorigin="anonymous">
</head>
    

<body>

    <?php $dsdm = loadall_dm();?>
    <nav id="cuon" class="navbar navbar-expand-lg bg-light" class="container">
        <div class="logo">
            <img src="./image/logovip.png" width="100%" height="5%" alt="">
        </div>
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Trang chủ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Trang Chủ </a>
                    </li> -->
                <li  class="nav-item" class="navitem">
                        <a class="nav-link active" aria-current="page" href="index?action=sanpham">Sản phẩm </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index?action=introduce">Giới thiệu </a>
                    </li>
                    <li class="nav-item list-menu">
                        <a id="dm" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Danh mục
                        </a>
                        <ul class="list-menu_small">
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
                        <a class="nav-link active" aria-current="page" href="index?action=contact">Liên hệ </a>
                    </li>
                </ul>
                <form action="index.php?action=sanpham" method="post" class="d-flex" role="search">
                    <input class="form-control me-2" type="search" name="kyw" id="" placeholder="Tìm Kiếm ..." aria-label="Search">
                    <a href="#"><button id="tim" class="btn btn-outline-success" name="timkiem" id="tk" type="submit">Tìm kiếm</button></a>
                </form>
                <div id="btnhead" class="loginnav btn">
                    <?php  
                    
                    if(!(isset($_SESSION["user"]))){
                        echo '<button class="btn " type="submit"><a class="abc text-dark" href="index?action=dangnhap">Đăng nhập</a> | <a class="abc text-dark" href="index?action=dky">Đăng ký</a></button>';
                    }else{
        
                        echo'<button"  class="btn" type="submit"><a class="abc texttk " href="index?action=dangnhap"><img class="rounded-circle" src="./upload/'.$_SESSION['user']['hinh'].'"  width="30px" height="30px" alt="" >  <p class="text-dark tentk">  '.$_SESSION['user']['username'].'</p> </a></button>'; 
                    }
                        ?>
                </div>
            </div>
        </div>
    </nav>