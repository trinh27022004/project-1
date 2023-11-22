<?php
if (is_array($suadm)) {
    extract($suadm);
}
?>
<div class="row">
    <div class="row formtitle">
        <h1>CAP NHAP LOAI HANG</h1>
    </div>
    <div class="row formct">
        <form action="index.php?action=update_category" method="post">
            <div class="row mb10">
                Ma loai <br />
                <input type="text" name="idloai" disabled placeholder="auto number" />
            </div>
            <div class="row mb10">
                Ten loai <br />
                <input type="text" name="nameloai" value="<?php
                                                            if (isset($name) && ($name != "")) echo $name;
                                                            ?>" />
            </div>
            <input type="hidden" name="id_dm" value="<?php
                                                        if (isset($id_dm) && ($id_dm > 0)) echo $id_dm;
                                                        ?>">
            <input type="submit" value="Cap nhap" name="capnhap">

            <input type="submit" value="NHAP LAI" name="nl">
            <a href="index.php?action=load_category">
                <input class="btn" type="button" value="DANH SACH">
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