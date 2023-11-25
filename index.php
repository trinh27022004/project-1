<?php
session_start();
ob_start();
include "./config/connect.php";
include "./dao/pdo.php";
include "./dao/accountDAO.php";
include "./dao/categoryDAO.php";
include "./dao/productDAO.php";
$spnew = loadall_sp_home();
$dsdm = loadall_dm();


// getAllUser();
// // getUserById(10);
// deleteUser(6); 

?>

<?php include './layouts/header.php'; ?>

<?php
if (isset($_GET['action']))
    switch ($_GET["action"]) {
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {

                $username = $_POST['username'];

                $password = $_POST['password'];
                $check_user = check_user($username, $password);
                if (is_array($check_user)) {
                    $_SESSION['user'] = $check_user;

                    header('Location:index.php');
                    $tbao = "Bạn đã đăng nhập thành công!";
                } else {
                    $tbao = "Tài khoản không tôn tại. Vui lòng kiểm tra hoặc đăng ký!";
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
                $target_dir = "../../upload/";
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

                insert_tk($username, $password, $ho_ten, $hinh, $email, $address, $tel);
                $tbao = "Bạn Đã đăng ký thành công! Vui lòng đăng nhập để thực hiện chức năng !";
            }
            include "./pages/account/register.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $ho_ten = $_POST['hoten'];
                $file = $_FILES['hinh']['name'];
                $target_dir = "../../upload/";
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

                $tb = "Cập nhập tài khoản thành công!";
            }
            include "./pages/account/edit_account.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {

                $email = $_POST['email'];
                $check_email =  check_email($email);
                if (is_array($check_email)) {
                    $tbao = "Mat khau cua ban la:" . $check_email['password'];
                } else {
                    $tbao = "Email này không tồn tại!";
                }
            }
            include "./pages/account/Forgotpassword.php";
            break;
        case 'ctietsp':
            if (isset($_GET['id_sp']) && ($_GET['id_sp']) > 0) {
                $id = $_GET['id_sp'];
                $onesp = loadone_sp($id);
                $spcl = loadone_sp_cungloai($_GET['id_sp'], $id_dm);
                include "./pages/ctietsp.php";
            } else {
                include "./pages/home.php";
                include "./pages/product/product.php";
            }
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
            // case 'home':
            //     include './pages/home.php';
            //     break;
            // default:
            //     include './pages/home.php';
            //     break;
    }
else {
    include "./pages/home.php";
}
?>

<?php include './layouts/footer.php' ?>