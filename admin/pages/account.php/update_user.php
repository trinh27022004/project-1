<?php
if (is_array($suatk)) {
    extract($suatk);
}
$hinhpath = "../upload/" . $hinh;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='70'>";
} else {
    $hinh = "Chưa có ảnh đại diện";
}
?>
<div class="row">
    <div class="row formtitle">
        <h1>CẬP NHẬT TÀI KHOẢN</h1>
    </div>
    <div class=" row formct">
        <form action="index.php?action=update_user" method="post" enctype="multipart/form-data">

            <div class=" row mb10">
                <p>TÊN ĐĂNG NHẬP<br>
                    <input type="text" name="username" value="<?= $username ?>" />
                </p>
            </div>
            <!-- <div class="row mb10">
                <p>MAT KHAU <br>
                    <input type="text" name="password" value="<?= $password ?>" />
                </p>
            </div> -->
            <div class=" row mb10">
                <p class="mhh"> HÌNH <br>
                    <input type="file" name="hinh" width="100px" value="" />
                    <?= $hinh ?>
                </p>
            </div>
            <div class=" row mb10">
                <p class="mhh"> EMAIL <br>
                    <input type="text" name="email" width="100px" value="<?= $email ?>" />
                </p>
            </div>
            <div class=" row mb10">
                <p class="mhh"> ĐỊA CHỈ <br>
                    <input type="text" name="address" width="100px" value="<?= $address ?>" />
                </p>
            </div>
            <div class="row mb10">
                <p>TEL <br>
                    <input type="text" name="tel" value="<?= $tel ?>" />
                </p>
            </div>

            <!-- <div class="mb10">
                 <p>NGAY NHAP <br>
                     <input type="text" name="date" id="">
                 </p>
             </div> -->

            <input type="hidden" name="id_tk" value="<?= $id_tk ?>">

            <input type="submit" value="CẬP NHẬT" name="capnhap">

            <input type="submit" value="NHẬP LẠI" name="nl">
            <a href="index.php?action=load_user">
                <input class="btn" type="button" value="DANH SÁCH">
            </a>
            <br>

    </div>

    <br>
    </form>
    <?php
    if (isset($tbao) && $tbao != "")
        echo $tbao;
    ?>
</div>
</div>