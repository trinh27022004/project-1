<?php
function insert_dl($ngay_hen,$khung_gio,$ghi_chu,$id_tk, $id_sp, $ngay_dl)
{
    $sql = "insert into lichhen(ngay_hen,khung_gio,ghi_chu,id_tk,id_sp,ngay_dl) values(:ngay_hen,:khung_gio,:ghi_chu,:id_tk,:id_sp,:ngay_dl)";
    $db = connect_db();
    $statement = $db->prepare($sql);
    $statement->bindValue(":ngay_hen",$ngay_hen);
    $statement->bindValue(":khung_gio",$khung_gio);
    $statement->bindValue(":ghi_chu",$ghi_chu);
    $statement->bindValue(":id_sp",$id_sp);
    $statement->bindValue(":id_tk",$id_tk);
    $statement->bindValue(":ngay_dl",$ngay_dl);
    $statement->execute();
}

function delete_dl($id_dl)
{
    $sql = "delete from lichhen where id_dl=" . $id_dl;
    pdo_execute($sql);
}
function loadall_dlich($id_sp)
{
    $sql = "SELECT dl.ngay_hen,dl.khung_gio,dl.ghi_chu,dl.ngay_dl,tk.ho_ten as nguoidl,dl.id_sp,dl.id_dl,tk.hinh
    from sanpham sp INNER join lichhen dl on sp.id_sp=dl.id_sp
    INNER join taikhoan tk on dl.id_tk=tk.id_tk where dl.id_sp=:id_sp";
        $db = connect_db();
        $statement = $db->prepare($sql);
        $statement->bindValue(":id_sp",$id_sp);
        $statement -> execute();
        $row = $statement ->fetchAll();
        return $row;

}
function loadall_dl()
{
    $sql = "SELECT sp.name,COUNT(dl.id_dl) as sodl,dl.id_sp, dl.ngay_dl, MAX(dl.ngay_dl) as moinhat, min(dl.ngay_dl) as cunhat,dl.id_dl
    from sanpham sp INNER join lichhen dl on sp.id_sp=dl.id_sp
    INNER join taikhoan tk on dl.id_tk=tk.id_tk GROUP by dl.id_sp ";

     // $sql = "select * from taikhoan";
     $db = connect_db();
     $statement = $db->prepare($sql);
     $statement->execute();
     return $statement; //co ket qua tra ve phai return
}
function loadall_dll($id_sp)
{
    $sql = "SELECT dl.*,tk.username from lichhen dl join taikhoan tk on dl.id_tk=tk.id_tk where 1";
    if ($id_sp > 0)
        $sql .= " and id_sp='" . $id_sp . "'";
    $sql .= " order by id_dl desc ";

    $db = connect_db();
    $statement = $db->prepare($sql);
    $statement->bindValue(":id",$id_sp);
    $statement->execute();
    $row = $statement->fetchAll();
    return $row;//co ket qua tra ve phai return ket qua tra ve phai return
}
function loadone_spdl($id_sp)
{
    $sql = "select * from sanpham sp join lichhen dl on sp.id_sp =dl.id_sp where dl.id_sp=:id_sp";
    
    $db = connect_db();
    $statement = $db->prepare($sql);
    $statement->bindValue(":id_sp",$id_sp);
    $statement->execute();
    $row = $statement->fetch();
    return $row;//co ket qua tra ve phai return ket qua tra ve phai return
}
// function loadone_dm($id_dm)
// {
//     $sql = "select * from danhmuc where id_dm=" . $id_dm;
//     $suadm = pdo_query_one($sql);
//     return $suadm; //co ket qua tra ve phai return
// }
// function update_dm($nameloai, $id_dm)
// {
//     $sql = "update danhmuc set name='" . $nameloai . "' where id_dm=" . $id_dm;
//     pdo_execute($sql);
// }
// function status_dl($id_sp){
//     $db = connect_db();
//     $query = "UPDATE lichhen SET status='".$status."' WHERE id_sp=$id_sp";
// $statement = $db->prepare($query);
// $statement->execute();
// }
function checkkg($id_sp,$ngay_hen,$khung_gio){
    $sql = "SELECT * from lichhen WHERE id_sp=:id_sp AND `ngay_hen`=:ngay_hen AND khung_gio=:khung_gio;";
     $db = connect_db();
     $statement = $db->prepare($sql);
     $statement->bindValue(":ngay_hen",$ngay_hen);
     $statement->bindValue(":khung_gio",$khung_gio);
     $statement->bindValue(":id_sp",$id_sp);
     $statement->execute();
     $row = $statement->fetchAll();
     return $row;
}