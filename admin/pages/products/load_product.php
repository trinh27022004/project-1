<div class="row">
    <div class="row formtitle">
        <h1>DANH SACH HANG HOA</h1>
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
               Nhap ten san pham can tim: <input type="text" name="kyw" id="">
                <select name="id_dm" id="">
                    <option value="0" selected>TAT CA</option>
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
                    <th>MA HH</th>
                    <th>TEN HH</th>
                    <th>HINH</th>
                    <th>MO TA</th>
                    <th>DON GIA</th>
                    <th>CHUC NANG</th>
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
                <a href="' . $suasp . '"><input type="button" value="sua" id="s" /></a> 
               <a href="' . $xoasp . '"> <input type="button" value="xoa" onclick ="return confirm(\'ban co chac chan muon xoa?\')" id="x"/></a>  
                    </td>
                 </tr>';
                }
                ?>
            </table>
        </div>

        <div class=" mb10">
            <input type="submit" value="CHON TAT CA" />
            <input type="submit" value="BO CHON TAT CA" />
            <input type="submit" value="XOA CAC MUC DA CHON" />
            <a href="index.php?action=add_product"><input type="button" value="Nhap them" /></a>
        </div>
        
    </div>
</div>
</div>