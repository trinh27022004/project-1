<?php
function insert_bl($noi_dung,$id_tk, $id_sp, $ngay_bl)
{
    $sql = "insert into binhluan(noi_dung,id_tk,id_sp,ngay_bl) values(:noi_dung,:id_tk,:id_sp,:ngay_bl)";
    $db = connect_db();
    $statement = $db->prepare($sql);
    $statement->bindValue(":noi_dung",$noi_dung);
    $statement->bindValue(":id_sp",$id_sp);
    $statement->bindValue(":id_tk",$id_tk);
    $statement->bindValue(":ngay_bl",$ngay_bl);
    $statement->execute();
}

function delete_bl($id_bl)
{
    $sql = "delete from binhluan where id_bl=" . $id_bl;
    pdo_execute($sql);
}
function loadall_bluan($id_sp)
{
    $sql = "SELECT bl.noi_dung,bl.ngay_bl,tk.ho_ten as nguoibl,bl.id_sp,bl.id_bl,tk.hinh
    from sanpham sp INNER join binhluan bl on sp.id_sp=bl.id_sp
    INNER join taikhoan tk on bl.id_tk=tk.id_tk where bl.id_sp=:id_sp";
        $db = connect_db();
        $statement = $db->prepare($sql);
        $statement->bindValue(":id_sp",$id_sp);
        $statement -> execute();
        $row = $statement ->fetchAll();
        return $row;

}
function loadall_bl()
{
    $sql = "SELECT sp.name,COUNT(bl.id_bl) as sobl,bl.id_sp, bl.ngay_bl, MAX(bl.ngay_bl) as moinhat, min(bl.ngay_bl) as cunhat,bl.id_bl
    from sanpham sp INNER join binhluan bl on sp.id_sp=bl.id_sp
    INNER join taikhoan tk on bl.id_tk=tk.id_tk GROUP by bl.id_sp ";

     // $sql = "select * from taikhoan";
     $db = connect_db();
     $statement = $db->prepare($sql);
     $statement->execute();
     return $statement; //co ket qua tra ve phai return
}
function loadall_bll($id_sp)
{
    $sql = "SELECT bl.*,tk.username from binhluan bl join taikhoan tk on bl.id_tk=tk.id_tk where 1";
    if ($id_sp > 0)
        $sql .= " and id_sp='" . $id_sp . "'";
    $sql .= " order by id_bl desc ";

    $db = connect_db();
    $statement = $db->prepare($sql);
    $statement->bindValue(":id",$id_sp);
    $statement->execute();
    $row = $statement->fetchAll();
    return $row;//co ket qua tra ve phai return ket qua tra ve phai return
}
function loadone_spbl($id_sp)
{
    $sql = "select * from sanpham sp join binhluan bl on sp.id_sp =bl.id_sp where bl.id_sp=:id_sp";
    
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
