<div class="row">
  <div class="row formtitle">
    <h1>DANH SÁCH SẢN PHẨM</h1>
  </div>
  <div class="row formct">
    <div class="row mb10 formdslh">
      <table>
        <tr>
          <th></th>
          <th>MÃ LOẠI</th>
          <th>TÊN LOẠI</th>
          <th></th>
        </tr>

        <?php foreach ($dslh as $d) {
          extract($d);
          $suadm = "index.php?action=suadm&id_dm=" . $id_dm;
          $xoadm = "index.php?action=xoadm&id_dm=" . $id_dm;
          echo '<tr>
  <td><input type="checkbox" name="cb" id="" /></td>
  <td>' . $id_dm . '</td>
  <td>' . $name . '</td>
  <td>
   <a href="' . $suadm . '"><input type="button" value="Sửa" id="s" /></a> 
   <a href="' . $xoadm . '"> <input type="button" value="Xóa" onclick ="return confirm(\'ban co chac chan muon xoa?\')" id="x"/></a>  
  </td>
  </tr>';
        }
        ?>

      </table>
    </div>

    <div class=" mb10">
      <input type="submit" value="CHỌN TẤT CẢ" />
      <input type="submit" value="BỎ CHỌN TẤT CẢ" />
      <input type="submit" value="XÓA CÁC MỤC ĐÃ CHỌN" />
      <a href="index.php?action=add_category"><input type="button" value="NHẬP THÊM" /></a>
    </div>
  </div>
</div>
<div style="color: red;">
    <?php
    if (isset($tbao) && $tbao != "")
      echo $tbao;
    ?>
  </div>
</div>