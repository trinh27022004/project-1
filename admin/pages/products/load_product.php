<div class="row">
    <div class="row formtitle">
        <h1>DANH SÁCH HÀNG HÓA</h1>
    </div>
    <div style="color: red;">
            <?php
            if (isset($tbao) && $tbao != "")
                echo $tbao;
            ?>
        </div>
    <div class="row formhh">
        <div class="row mb10 formdshh ">
            <form action="index.php?action=load_product" method="post">
               Nhập tên sản phẩm cần tìm: <input type="text" name="kyw" id="">
                <select name="id_dm" id="">
                    <option value="0" selected>TẤT CẢ</option>
                    <?php
                      foreach ($dslh as $ds) {
                        extract($ds);
                        echo '<option value="' . $id_dm . '">' . $name . '</option>';
                    }
                    ?>
                </select>
                <input type="submit" name="listok" value="GO">
            </form>
            <table>
                <tr>
                    <th></th>
                    <th>MÃ HH</th>
                    <th>TÊN HH</th>
                    <th>HÌNH</th>
                    <th>MÔ TẢ</th>
                    <th>ĐƠN GIÁ</th>
                    <th>CHỨC NĂNG</th>
                    <th></th>
                </tr>
                <?php foreach ($load_product as $d) {
                    extract($d);
                    $suasp = "index.php?action=suasp&id_sp=" . $id_sp;
                    $xoasp = "index.php?action=xoasp&id_sp=" . $id_sp;
                    $hinhpath = "../upload/" . $image;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='70'>";
                    } else {
                        $hinh = "No photo";
                    }
                    echo '<tr>
                         <td><input type="checkbox" name="cb" id="" /></td>
                   <td>' . $id_sp . '</td>
                     <td>' . $name . '</td>
                     <td>' . $hinh . '</td>
                     <td>' . $mota . '</td>
                     <td>' . number_format($price, 0, ",", ".") . '$' . '</td>
                      <td>
                <a href="' . $suasp . '"><input type="button" value="Sửa" id="s" /></a> 
               <a href="' . $xoasp . '"> <input type="button" value="Xóa" onclick ="return confirm(\'ban co chac chan muon xoa?\')" id="x"/></a>  
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
            <a href="index.php?action=add_product"><input type="button" value="NHẬP THÊM" /></a>
        </div>
        
    </div>
</div>
</div>