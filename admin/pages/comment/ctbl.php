<div class="row">
    <div class="row formtitle">
        <h1>CHI TIẾT BÌNH LUẬN</h1>
    </div>
    <!-- <?php

            extract($onebl);
            ?> -->
    <div class="tenhh">
        HANG HOA:<?= $name ?>
    </div>
    <div class="row formkh">
        <div class="row mb10 formctbl">
            <table>
                <tr>
                    <th></th>
                    <th>Nội Dung</th>
                    <th>Ngày bình luận</th>
                    <th>Người bình luận</th>
                    <th></th>
                </tr>
                <?php
                foreach ($ctbl as $ct) {
                    // var_dump($ctbl);
                    extract($ct);
                    $xoabl = "index.php?action=xoabl&id_bl=" . $id_bl . "&id_sp=" . $id_sp;
                    echo ' <tr>
                    <td><input type="checkbox" name="cb" id="" /></td>
                    <td>' . $noi_dung . '</td>
                    <td>' . $ngay_bl . '</td>
                    <td>' . $nguoibl . '</td>
                    <td><a href="' . $xoabl . '">
                        <input type="button" value="xoa" onclick ="return confirm(\'ban co chac chan muon xoa?\')" id="x"/></a>
                    </td>
                </tr>
';
                }
                ?>

            </table>
        </div>

        <div class=" mb10 ">
            <input type="button" value="CHỌN TẤT CẢ" />
            <input type="button" value="BỎ CHỌN TẤT CẢ" />
            <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN" />
        </div>
    </div>
</div>
</div>