<?php
function insert_sp($tensp, $giasp, $file, $mota, $id_dm)
{
    $sql = "insert into sanpham(name,price,image,mota,id_dm) values(:tensp,:giasp,:file,:mota,:id_dm)";
    $db = connect_db();
    $statement = $db->prepare($sql);
    $statement->bindValue(":tensp",$tensp);
    $statement->bindValue(":giasp",$giasp);
    $statement->bindValue(":file",$file);
    $statement->bindValue(":mota",$mota);
    $statement->bindValue(":id_dm",$id_dm);
    $statement->execute();
}

function delete_sp($id_sp)
{
     $db = connect_db();
     // Xóa bình luận trước
     $sql = "DELETE FROM binhluan WHERE id_sp = :id_sp";
     $statement = $db->prepare($sql);
     $statement->bindValue(":id_sp", $id_sp, PDO::PARAM_INT);
     $statement->execute();
       // Xóa lịch hẹn trước
    $sql = "DELETE FROM lichhen WHERE id_sp = :id_sp";
    $statement = $db->prepare($sql);
    $statement->bindValue(":id_sp", $id_sp, PDO::PARAM_INT);
    $statement->execute();
     // xóa sp 
    $sql = "delete from sanpham where id_sp=:id_sp";
    $statement = $db->prepare($sql);
    $statement->bindValue(":id_sp",$id_sp);
    $statement->execute();
}

function loadall_sp_home()
{
    //cach noi chuoi sql
    //phai co cach khoang
    $sql = "select * from sanpham where 1 order by id_sp desc";
    $db = connect_db();
    $statement = $db->prepare($sql);
    $statement->execute();
    $row = $statement->fetchAll();
    return $row;//co ket qua tra ve phai return
}

function loadall_sp($kyw = "", $id_dm = 0)
{
    //cach noi chuoi sql
    //phai co cach khoang
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%' ";
    }
    if ($id_dm > 0) {
        $sql .= " and id_dm = '" . $id_dm . "'";
    }

    $sql .= " order by id_sp desc";
    $db = connect_db();
    $statement = $db->prepare($sql);
    $statement->execute();
    return $statement;//co ket qua tra ve phai return
}
function loadone_sp($id_sp)
{
    $sql = "select * from sanpham where id_sp= :id";
    $db = connect_db();
    $statement = $db->prepare($sql);
    $statement->bindValue(":id",$id_sp);
    $statement->execute();
    $row = $statement->fetch();
    return $row;//co ket qua tra ve phai return
}
function load_ten_dm($id_dm)
{
    if ($id_dm > 0) {
        $sql = "select * from danhmuc where id_dm=" . $id_dm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name; //co ket qua tra ve phai return
    } else {
        return "";
    }
}
function update_sp($id_sp, $tensp, $giasp, $file, $mota, $id_dm)
{
    // if ($file != "") {
    //     $sql = "update sanpham set name='" . $tensp . "',price='" . $giasp . "',
    //     image='" . $file . "',mota='" . $mota . "',
    // ,id_dm=" . $id_dm . " where id_sp=" . $id_sp;
    // } else {
    //     $sql = "update sanpham set name='" . $tensp . "',price='" . $giasp . "',
    // ,mota='" . $mota . "',id_dm=" . $id_dm . " where id_sp=" . $id_sp;
    // }


    $sql="UPDATE `sanpham` SET `name`=:tensp,`price`=:giasp,`image`=:file,`mota`=:mota,`id_dm`=:id_dm WHERE `id_sp`=:id_sp ";
    $db = connect_db();
    $statement = $db->prepare($sql);
    $statement->bindValue(":id_sp",$id_sp);
    $statement->bindValue(":tensp",$tensp);
    $statement->bindValue(":giasp",$giasp);
    $statement->bindValue(":file",$file);
    $statement->bindValue(":mota",$mota);
    $statement->bindValue(":id_dm",$id_dm);
    $statement->execute();
}
function loadone_sp_cungloai($id_sp, $id_dm)
{
    $sql = "select * from sanpham where id_dm=" . $id_dm . " and id_sp <>" . $id_sp;
    $dssp = pdo_query($sql);
    return $dssp;; //co ket qua tra ve phai return
}
