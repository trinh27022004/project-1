<?php include './layouts/header.php' ?>
<?php include '../dao/pdo.php' ?>
<?php include '../dao/categoryDAO.php' ?>
<?php include '../dao/productDAO.php' ?>
<?php include '../dao/accountDAO.php' ?>
<?php include '../dao/commentDAO.php' ?>

<?php include '../config/connect.php' ?>

<?php
$dsdm = loadall_dm();

if (isset($_GET['action']))
    switch ($_GET["action"]) {
        case 'add_category':
            if (isset($_POST['them']) && ($_POST['them'])) {
                $nameloai = $_POST['nameloai'];
                if ($nameloai != "") {
                    insert_dm($nameloai);
                    header("location:index.php?action=dslh");
                    $tbao = 'Them data thanh cong';
                }
            }
            include './pages/category/add.php';
            break;
        case 'load_category':
            $dslh = loadall_dm();
            include './pages/category/load_category.php';
            break;

        case 'suadm':
            if (isset($_GET['id_dm']) && ($_GET['id_dm']) > 0) {
                $suadm = loadone_dm($_GET['id_dm']);
            }
            include './pages/category/update.php';
            break;
        case 'update_category':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $nameloai = $_POST['nameloai'];
                $id_dm = $_POST['id_dm'];
                update_dm($nameloai, $id_dm);
                $tbao = 'Sua data thanh cong';
            }
            $dslh = loadall_dm();
            include './pages/category/load_category.php';
            break;
        case 'xoadm':
            if (isset($_GET['id_dm']) && ($_GET['id_dm']) > 0) {
                delete_dm($_GET['id_dm']);
            }
            $dslh = loadall_dm();
            include './pages/category/load_category.php';
            break;
        case 'add_product':
            //ktra xem nguoi dung co click vao nut add hay k
            if (isset($_POST['them']) && ($_POST['them'])) {
                $id_dm = $_POST['id_dm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['price'];
                $mota = $_POST['mota'];
                $file = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['img']["name"]);
                if (move_uploaded_file($_FILES['img']["tmp_name"], $target_file)) {

                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                if ($tensp != "") {
                    insert_sp($tensp, $giasp, $file, $mota, $id_dm);
                    $tbao = 'Them data thanh cong';
                    header("location:index.php?action=load_product");
                }
            }
            $dslh = loadall_dm();
            include './pages/products/add.php';
            break;
        case 'load_product':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $id_dm = $_POST['id_dm'];
            } else {
                $kyw = '';
                $id_dm = 0;
            }

            $dslh = loadall_dm();
            $load_product = loadall_sp($kyw, $id_dm);
            include './pages/products/load_product.php';
            break;
        case 'suasp':
            if (isset($_GET['id_sp']) && ($_GET['id_sp']) > 0) {

                $suasp = loadone_sp($_GET['id_sp']);
            }
            $dslh = loadall_dm();
            include "./pages/products/update.php";
            break;
        case 'xoasp':
            if (isset($_GET['id_sp']) && ($_GET['id_sp']) > 0) {
                delete_sp($_GET['id_sp']);
            }
            $load_product = loadall_sp("", 0);

            include "./pages/products/load_product.php";
            break;
        case 'update_product':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id_sp = $_POST['id_sp'];
                $id_dm = $_POST['id_dm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['price'];
                $mota = $_POST['mota'];
                $file = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['img']["name"]);
                if (move_uploaded_file($_FILES['img']["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sp($id_sp, $tensp, $giasp, $file, $mota, $id_dm);
                $tbao = 'Sua data thanh cong';
            }
            $dslh = loadall_dm();
            $load_product = loadall_sp("", 0);
            include "./pages/products/load_product.php";
            break;
        case 'add_user':
            if (isset($_POST['them']) && ($_POST['them'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $ho_ten = $_POST['hoten'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];

                $file = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                if ($username != "") {
                    insert_tk($username, $password, $ho_ten, $file, $email, $address, $tel);
                    header("location:index.php?action=load_user");
                    $tbao = 'Them data thanh cong';
                }
            }
            $load_user = loadall_tk();
            include "./pages/account.php/add.php";
            break;
        case 'load_user':

            $load_user = loadall_tk();

            include "./pages/account.php/load_user.php";
            break;
        case 'suatk':
            if (isset($_GET['id_tk']) && ($_GET['id_tk']) > 0) {

                $suatk = loadone_tk($_GET['id_tk']);
            }
            // $dslh = loadall_dm();
            include "./pages/account.php/update_user.php";
            break;
        case 'update_user':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id_tk = $_POST['id_tk'];
                $username = $_POST['username'];
                // $password = $_POST['password'];
                $file = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];

                update_tk($id_tk, $username, $file, $email, $address, $tel);
                $tbao = 'Sua data thanh cong';
            }

            $load_user = loadall_tk();
            include "./pages/account.php/load_user.php";
            break;
        case 'xoatk':
            if (isset($_GET['id_tk']) && ($_GET['id_tk']) > 0) {
                delete_tk($_GET['id_tk']);
            }
            $load_user = loadall_tk();

            include "./pages/account.php/load_user.php";
            break;
        case 'load_comment':

            $dsbl = loadall_bl();

            include "./pages/comment.php/load_comment.php";
            break;
    }
?>
<?php include './layouts/footer.php' ?>
