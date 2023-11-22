<div class="row">
    <div class="row formtitle">
        <h1>DANH SACH BINH LUAN</h1>
    </div>
    <div class="row formtk">
        <div class="row mb10 formdsbl">
            <table>
                <tr>
                    <th>HANG HOA</th>
                    <th>SO BL</th>
                    <th>MOI NHAT</th>
                    <th>CU NHAT</th>
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
      <a href="' . $ct . '"> <input type="button" value="Chi tiet" id="ct"/></a>  </td>
                        </tr>';
                }
                ?>
            </table>
        </div>


        <div class=" mb10">
            <input type="submit" value="CHON TAT CA" />
            <input type="submit" value="BO CHON TAT CA" />
            <input type="submit" value="XOA CAC MUC DA CHON" />
        </div>
    </div>
</div>
</div>
</body>

</html>