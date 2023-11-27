<?php
if (is_array($suasp)) {
    extract($suasp);
}
$hinhpath = "../../upload/" . $image;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='70'>";
} else {
    $hinh = "No photo";
}
?>
<div class="r">
    <div class="row formtitle">
        <h1>CẬP NHẬT HÀNG HÓA</h1>
    </div>
    <div class=" boxtr">
        <form action="index.php?action=update_product" method="post" enctype="multipart/form-data">
            <select name="id_dm" id="">
                <option value="0" selected>TẤT CẢ</option>
                <?php
                foreach ($dslh as $ds) {

                    if ($ds['id_dm'] == $id_dm) $s = "selected";
                    else $s = "";
                    echo '<option value="' . $ds['id_dm'] . '" ' . $s . '>' . $ds['name'] . '</option>';
                }
                ?>
            </select>

    </div>

    <div class=" boxtr">

        <div class="mb10">
            <p class="mhh"> TÊN HÀNG HÓA <br>
                <input type="text" name="tensp" width="100px" value="<?= $name ?>" />
            </p>
        </div>
        <div class=" mb10">
            <p> HÌNH ẢNH <br>
            <div class="hdb">
                <input type="file" name="img" />
            </div>
            </p>
            <?= $hinh ?>
        </div>
        <!-- <div class="mb10">
                 <p>NGAY NHAP <br>
                     <input type="text" name="date" id="">
                 </p>
             </div> -->

    </div>

    <div class=" boxtr">

        <div class="mb10 dg">
            <p class="mhh"> ĐƠN GIÁ <br>
            <div class="mb-3">

                <input type="text" class="form-control" name="price" value="<?= $price ?>">
            </div>

            </p>
        </div>
        <!-- <div class=" mb10">
                 <p>LOAI HANG <br>
                     <select class="form-select" aria-label="Default select example">
                         <option value="1">Dong ho</option>
                         <option value="2">Laptop</option>
                         <option value="3">Dien thoai</option>
                         <option value="3">Phu kien</option>
                     </select>
                 </p>
             </div> -->
    </div>
    <br>

    <p class="mt"> MÔ TẢ
    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="mota"><?= $mota ?></textarea>
    </div>
    </p>

    <input type="hidden" name="id_sp" value="<?= $id_sp ?>">
    <div class="i">
        <input type="submit" value="Cập nhật" name="capnhap">

        <input type="submit" value="Nhập lại" name="nl">
        <a href="index.php?action=load_product">
            <input class="btn" type="button" value="DANH SÁCH">
        </a>
    </div>
</div>

<br>
</form>
<?php
if (isset($tbao) && $tbao != "")
    echo $tbao;
?>
</div>