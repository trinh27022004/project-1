<div class="loginfm">

<?php
if (is_array($_SESSION['user'])) {
    extract($_SESSION['user']);
}
$hinhpath = "../upload/" . $hinh;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='70'>";
} else {
    $hinh = "No photo";
}
?>
<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div style="color: red;">
                <?php
                if (isset($tb) && ($tb) != "") {
                    echo $tb;
                }
                ?>
            </div>

            <div class="row boxcontent formdky">
                <?php
                if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                }
                ?>
                <form action="index.php?action=edit_taikhoan" method="post" enctype="multipart/form-data" id="demoForm">
                 <div class="boxtitle">Cập Nhật Tài Khoản</div>
                <p>
                    Tài khoản: <br />
                    <input type="text" class="dkf" name="username" value="<?= $username ?>">
                    </p>
                    <p>
                    Mật khẩu: <br />
                    <input type="password" class="dkf" name="password" value="<?= $password ?>">
                    </p>
                    <p>
                    Họ & Tên: <br />
                    <input type="text" class="dkf" name="hoten" value="<?= $ho_ten ?>">
                    </p>
                    <p>
                    Hình:<input type="file" name="hinh" value="<?= $hinh ?>">
                    <!-- <?= $hinh ?> -->
                    </p>
                    <p>
                    Email: <br />
                    <input type="email" class="dkf" name="email" value="<?= $email ?>">
                    </p>
                    <p>
                    Địa Chỉ:<br />
                    <input type="text" class="dkf" name="address" value="<?= $address ?>">
                    </p>
                    <p>
                    Số Điện Thoại:<br />
                    <input type="text" class="dkf" name="tel" value="<?= $tel ?>">
                    <input type="hidden" class="dkf" name="id_tk" value="<?= $id_tk ?>">
                    </p>
                    <div class="v">
                        <input class="smf" type="submit" value="Cập Nhập" name="capnhap" id="cn">
                        <input class="smf" type="reset" value="Nhập Lại" id="nl">
                    </div>

                </form>
            </div>

        </div>


    </div>
</div>
</div>