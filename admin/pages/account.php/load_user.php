<div class="row">
    <div class="row formtitle">
        <h1>DANH SACH KHACH HANG</h1>
    </div>
    <div class="tbao" style="color: red;">
        <?php
        if (isset($tbao) && ($tbao) != "") {
            echo $tbao;
        }
        ?>
    </div>
    <div class="row formtk">
        <div class="row mb10 formdstk">
            <table>
                <tr>
                    <th></th>
                    <th>MA KH</th>
                    <th>TEN DANG NHAP</th>
                    <th>MAT KHAU</th>
                    <th>HINH</th>
                    <th> EMAIL</th>
                    <th> DIA CHI</th>
                    <th> DIEN THOAI</th>
                    <th>VAI TRO?</th>
                    <th></th>
                </tr>

                <?php
                foreach ($load_user as $tk) {
                    extract($tk);
                    $suatk = "index.php?action=suatk&id_tk=" . $id_tk;
                    $xoatk = "index.php?action=xoatk&id_tk=" . $id_tk;
                    $hinhpath = "../upload/" . $hinh;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='70'>";
                    } else {
                        $hinh = "No photo";
                    }
                    echo '<tr>
            <td><input type="checkbox" name="cb" id="" /></td>
            <td>' . $id_tk . '</td>
            <td>' . $username . '</td>
         <td>*********</td>
         <td>' . $hinh . '</td>
         <td>' . $email . '</td>
         <td>' . $address . '</td>
         <td>' . $tel . '</td>
         <td>' . $name_role . '</td>
        <td> <a href="' . $suatk . '"><input type="button" value="sua" id="s" /></a> 
      <a href="' . $xoatk . '"> <input type="button" value="xoa" onclick ="return confirm(\'ban co chac chan muon xoa?\')" id="x"/></a>  </td>
                        </tr>';
                }
                ?>
            </table>
        </div>


        <div class=" mb10">
            <input type="submit" value="CHON TAT CA" />
            <input type="submit" value="BO CHON TAT CA" />
            <input type="submit" value="XOA CAC MUC DA CHON" />
            <a href="index.php?action=add_user"><input type="button" value="Nhap them" /></a>
        </div>
    </div>
</div>
</div>
</body>

</html>