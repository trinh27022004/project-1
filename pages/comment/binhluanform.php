<?php include "./dao/pdo.php"?>
<?php include "./dao/commentDAO.php"?>
<?php
session_start();

$id_sp = $_REQUEST['id_sp']; //dung doi tuong request de doc gia tri id_sp trong phan chuyen data cua ham load trang ctsp
$dsbl = loadall_bll($id_sp);
if (!isset($_SESSION['user'])) {
    // Người dùng chưa đăng nhập, hãy chuyển hướng hoặc hiển thị thông báo yêu cầu đăng nhập
    echo "<div class='dn'>Ban phai dang nhap de binh luan!!!!</div>";
    echo '<div class="boxcontent2 menudoc bluan">';
    echo '<table>
    <ul>';
    foreach ($dsbl as $bl) {
        extract($bl);
        echo '<tr><td>' . $noidung . '</td>';
        echo '<td>' . $username . '</td>';
        echo '<td>' . $ngay_bl . '</td></tr>';
    }
    echo ' </ul>
    </table>
</div>';
    exit(); // Kết thúc kịch bản để đảm bảo không có mã HTML/CSS/JS nào được thực thi
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="row mb">
        <div class="boxtitle">Binh Luan</div>
        <div class="boxcontent2 menudoc bluan">
            <table>
                <ul>
                    <?php

                    foreach ($dsbl as $bl) {
                        extract($bl);
                        echo '<tr><td>' . $noidung . '</td>';
                        echo '<td>' . $username . '</td>';
                        echo '<td>' . $ngay_bl . '</td></tr>';
                    }
                    ?>
                </ul>
            </table>
        </div>
        <div class="boxft search">
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="id_sp" value="<?= $id_sp ?>">
                <input type="text" name="noidung" />
                <input id="submit_button" name="guibl" type="submit" value="GUI BINH LUAN" class="gbl">
            </form>
        </div>
        <?php
        if (isset($_POST['guibl']) && ($_POST['guibl'])) {
            $noidung = $_POST['noidung'];
            $id_sp = $_POST['id_sp'];
            $id_tk = $_SESSION['user']['id_tk'];
            // $ngaybl = date("h:i:sa d/m/Y");
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $ngay_bl = date("Y-m-d H:i:s", time());
            insert_bl($noidung, $id_tk, $id_sp, $ngay_bl);
            header("location:" . $_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>
</body>

</html>