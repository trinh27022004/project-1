<?php
session_start();
ob_start();
include "./config/connect.php";
include "./dao/pdo.php";
include "./dao/accountDAO.php";
include "./dao/categoryDAO.php";
include "./dao/productDAO.php";
include "./dao/commentDAO.php";
include "./dao/bookDAO.php";


$spnew = loadall_sp_home();
$dsdm = loadall_dm();


// getAllUser();
// // getUserById(10);
// deleteUser(6); 

?>

<?php include './layouts/header.php'; ?>

<?php
if (isset($_GET['action'])) {
    switch ($_GET["action"]) {
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {

                $username = $_POST['username'];
                $password = $_POST['password'];
                $check_user = check_user($username, $password);
                if (is_array($check_user)) {
                    $_SESSION['user'] = $check_user;
                    header('Location:index.php');
                } else {
                    echo '<script>alert("Tài Khoản không tôn tại. Vui lòng kiểm tra hoặc đăng ký!");</script>';
                }
            }
            include "./pages/account/login.php";
            break;
        case 'dky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $ho_ten = $_POST['hoten'];
                $file = $_FILES['hinh']['name'];
                $target_dir = "./upload/";
                $target_file = $target_dir . basename($_FILES['hinh']["name"]);
                if (move_uploaded_file($_FILES['hinh']["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                //  $hinh=$_POST['hinh'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];

                insert_tk($username, $password, $ho_ten, $file, $email, $address, $tel);
                // $tbao = "Bạn Đã đăng ký thành công! Vui lòng đăng nhập để thực hiện chức năng !";
                echo '<script>alert("Bạn Đã đăng ký thành công!");</script>';
            }
            include "./pages/account/register.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $ho_ten = $_POST['hoten'];
                $file = $_FILES['hinh']['name'];
                $target_dir = "./upload/";
                $target_file = $target_dir . basename($_FILES['hinh']["name"]);
                if (move_uploaded_file($_FILES['hinh']["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id_tk = $_POST['id_tk'];

                update_taikhoan($id_tk, $username, $password, $ho_ten, $file, $email, $address, $tel);
                $_SESSION['user'] = check_user($username, $password);
                // header("location:index.php?act=edit_taikhoan");

                // $tb = "Cập nhập tài khoản thành công!";
                echo '<script>alert("Cập nhập tài khoản thành công!");</script>';
            }
            include "./pages/account/edit_account.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {

                $email = $_POST['email'];
                $check_email =  check_email($email);
                if (is_array($check_email)) {
                    echo '<script>alert("Mật khẩu của bạn là: ' . $check_email['password'] . '");</script>';
                } else {
                    echo '<script>alert("Email này không tồn tại!");</script>';
                }
            }
            include "./pages/account/Forgotpassword.php";
            break;
        case 'ctietsp':
            if (isset($_GET['id_sp']) && ($_GET['id_sp']) > 0) {
                $id = $_GET['id_sp'];
                $load_bl = loadall_bluan($id);
                $load_dl = loadall_dlich($id);
                $onesp = loadone_sp($id);
                $spcl = loadone_sp_cungloai($_GET['id_sp'], $id_dm);

                include "./pages/ctietsp.php";
            } else {
                include "./pages/home.php";
                include "./pages/product/product.php";
            }
            break;
        case 'binhluan':
            if (isset($_GET['id_sp']) && ($_GET['id_sp']) > 0) {
                $id = $_GET['id_sp'];
                $load_bl = loadall_bluan($id);
                $onesp = loadone_sp($id);
                $spcl = loadone_sp_cungloai($_GET['id_sp'], $id_dm);

                include "./pages/ctietsp.php";
            } else {
                include "./pages/home.php";
                include "./pages/product/product.php";
            }
            if (isset($_POST['comment'])) {
                // echo "<h1>".$_POST['comment']."</h1>";
                if ($_POST['comment'] == 'Binh luan') {
                    $noi_dung = $_POST['bl'];
                    $id_tk = $_SESSION['user']['id_tk'];
                    date_default_timezone_set("Asia/Ho_Chi_Minh");
                    $ngay_bl = date("Y-m-d H:i:s", time());
                    insert_bl($noi_dung, $id_tk, $id, $ngay_bl);
                }
            } else {
                // echo 'error';
                include "./pages/home.php";
                include "./pages/product/product.php";
            }
            break;

        case 'lichhen':
            if (isset($_GET['id_sp']) && ($_GET['id_sp']) > 0) {
                $id = $_GET['id_sp'];
                $load_bl = loadall_bluan($id);
                $load_dl = loadall_dlich($id);
                $onesp = loadone_sp($id);
                $spcl = loadone_sp_cungloai($_GET['id_sp'], $id_dm);

                include "./pages/ctietsp.php";
            } else {
                include "./pages/home.php";
                include "./pages/product/product.php";
            }
            if (isset($_POST['book'])) {

                if ($_POST['book'] == 'Dat lich') {
                    $ngay_hen = $_POST['nh'];
                    $khung_gio = $_POST['gh'];
                    $ghi_chu = $_POST['gc'];
                    $id_tk = $_SESSION['user']['id_tk'];
                    date_default_timezone_set("Asia/Ho_Chi_Minh");
                    $ngay_dl = date("Y-m-d H:i:s", time());

                    // ktra du lieu dau vao
                    // thuc hien cau lenh truy van checkKG(ngayhen,sp,khung gio)
                    // neu dung thi bao loi
                    if (checkkg($id, $ngay_hen, $khung_gio) ==  false) {
                echo '<script>alert("Thành công!");</script>';
                        insert_dl($ngay_hen, $khung_gio, $ghi_chu, $id_tk, $id, $ngay_dl);
                    } else  echo '<script>alert("Có lỗi xảy ra. Đặt Lịch Không Thành Công!");</script>';
                }
            }
            // else echo 'error';
            break;

        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw']) != "") {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['id_dm']) && ($_GET['id_dm']) > 0) {
                $id_dm = $_GET['id_dm'];
            } else {
                $id_dm = 0;
            }
            $load_product = loadall_sp($kyw, $id_dm);
            $tendm = load_ten_dm($id_dm);
            include "./pages/product/product.php";
            break;

        case 'thoat':
            session_unset();
            header('Location:index.php');
            break;
        case 'introduce':
            include './pages/introduce.php';
            break;
        case 'contact':
            include './pages/contact/contact.php';
            break;
    }
} else {
    include "./pages/home.php";
}
?>

<?php include './layouts/footer.php' ?>