<div class="row">
    <div class="row formtitle">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row formtk">
        <div class="row mb10 formdsbl">
            <table>
                <tr>
                    <th>HÀNG HÓA</th>
                    <th>SỐ BÌNH LUẬN</th>
                    <th>MỚI NHẤT</th>
                    <th>CŨ NHẤT</th>
                    <th></th>
                </tr>

                <?php
                foreach ($dsbl as $bl) {
                    extract($bl);
                    $ct = "index.php?action=ctbl&id_sp=" . $id_sp;
                    echo '<tr>
            <td>' . $name . '</td>
            <td>' . $sobl . '</td>
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