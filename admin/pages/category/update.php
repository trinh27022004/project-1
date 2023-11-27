<?php
if (is_array($suadm)) {
    extract($suadm);
}
?>
<div class="row">
    <div class="row formtitle">
        <h1>CẬP NHẬT TÀI KHOẢN</h1>
    </div>
    <div class="row formct">
        <form action="index.php?action=update_category" method="post">
            <div class="row mb10">
                Mã loại <br />
                <input type="text" name="idloai" disabled placeholder="auto number" />
            </div>
            <div class="row mb10">
                Tên loại <br />
                <input type="text" name="nameloai" value="<?php
                                                            if (isset($name) && ($name != "")) echo $name;
                                                            ?>" />
            </div>
            <input type="hidden" name="id_dm" value="<?php
                                                        if (isset($id_dm) && ($id_dm > 0)) echo $id_dm;
                                                        ?>">
            <input type="submit" value="CẬP NHẬT" name="capnhap">

            <input type="submit" value="NHẬP LẠI" name="nl">
            <a href="index.php?action=load_category">
                <input class="btn" type="button" value="DANH SÁCH">
            </a>
            <br>
        </form>
        <?php
        if (isset($tbao) && $tbao != "")
            echo $tbao;
        ?>
    </div>
</div>
</div>