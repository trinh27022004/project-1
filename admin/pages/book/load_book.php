<div class="row">
    <div class="row formtitle">
        <h1>DANH SÁCH ĐẶT LỊCH HẸN</h1>
    </div>
    <div class="row formtk">
        <div class="row mb10 formdsbl">
            <table>
                <tr>
                    <th>Hàng Hóa</th>
                    <th>Số Đặt Lịch</th>
                    <th>Mới Nhất </th>
                    <th>Cũ Nhất</th>
                    <th></th>
                </tr>

                <?php
                foreach ($load_dl as $dl) {
                    extract($dl);
                    $ct = "index.php?action=ctdl&id_sp=" . $id_sp;
                    echo '<tr>
            <td>' . $name . '</td>
            <td>' . $sodl . '</td>
         <td>' . $moinhat . '</td>
         <td>' . $cunhat . '</td>
        <td> 
      <a href="' . $ct . '"> <input type="button" value="Chi tiết" id="ct"/></a>  </td>
                        </tr>';
                }
                ?>
            </table>
        </div>


        <div class=" mb10">
            <input type="submit" value="CHỌN TẤT CẢ" />
            <input type="submit" value="BỎ CHỌN TẤT CẢ" />
            <input type="submit" value="XÓA CÁC MỤC ĐÃ CHỌN" />
        </div>
    </div>
</div>
</div>
</body>

</html>