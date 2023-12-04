<div class="row">
    <div class="row formtitle">
        <h1>CHI TIẾT ĐẶT LỊCH</h1>
    </div>
    <!-- <?php

            extract($onedl);
            ?> -->
    <div class="tenhh">
        HÀNG HÓA:<?= $name ?>
    </div>
    <div class="row formkh">
        <div class="row mb10 formctbl">
            <table>
                <tr>
                    <th>id</th>
                    <th>Ngày Hẹn</th>
                    <th>Khung Giờ</th>
                    <th>Ghi Chú </th>
                    <th>Thời Gian Đặt Lịch </th>
                    <th>Khách Hàng </th>
                </tr>
                <?php
                        foreach ($ctdl as $ct) {
                            // var_dump($ctbl);
                            extract($ct);
                            $xoadl = "index.php?action=xoadl&id_dl=" . $id_dl . "&id_sp=" . $id_sp;
                            echo ' <tr>
                    <td><input type="checkbox" name="cb" id="" /></td>
                   
                    <td>' . $ngay_hen . '</td>
                    <td>' . $khung_gio . '</td>
                    <td>' . $ghi_chu . '</td>
                    <td>' . $ngay_dl . '</td>
                    <td>' . $nguoidl . '</td>
                    <td><a href="' . $xoadl . '">
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