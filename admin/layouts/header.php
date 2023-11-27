<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bất Động Sản Việt Nam</title>
        <link rel="stylesheet"
            href="../public/bootstrap-5.3.2/dist/css/bootstrap.css">
        <script src="../public/bootstrap-5.3.2/dist/js/bootstrap.js"></script>
    </head>
    <body class="d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light"
            style="width: 280px;">
            <a href="/"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use
                        xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">YOURHOUSE (ADMIN)</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16"><use
                                xlink:href="#home"></use></svg>
                        Home
                    </a>
                </li>
                <li>
                    <a href="index?action=load_user" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16"><use
                                xlink:href="#speedometer2"></use></svg>
                        Tài khoản
                    </a>
                </li>
                <li>
                    <a href="index?action=add_category" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16"><use
                                xlink:href="#table"></use></svg>
                        Loại hàng
                    </a>
                </li>
                <li>
                    <a href="index?action=add_product" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16"><use
                                xlink:href="#grid"></use></svg>
                        Sản phẩm
                    </a>
                </li>
                <li>
                    <a href="index?action=load_comment" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16"><use
                                xlink:href="#people-circle"></use></svg>
                        Bình luận
                    </a>
                </li>
                <li>
                    <a href="../index.php" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16"><use
                                xlink:href="#people-circle"></use></svg>
                        Về trang chủ
                    </a>
                </li>
            </ul>

            <hr>
            <div class="dropdown">
                <a href="#"
                    class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                    id="dropdownUser2" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt width="32"
                        height="32" class="rounded-circle me-2">
                    <strong>admin</strong>
                </a>
                <ul class="dropdown-menu text-small shadow"
                    aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>