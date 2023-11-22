<?php
function insert_dm($nameloai){
    $sql = "insert into danhmuc(name) values(:nameloai)";
    $db = connect_db();
    $statement = $db->prepare($sql);
    $statement->bindValue(":nameloai",$nameloai);
    $statement->execute();
}

function delete_dm($id_dm)
{
    $sql = "delete from danhmuc where id_dm= :id_dm";
    $db = connect_db();
    $statement = $db->prepare($sql);
    $statement->bindValue(":id_dm",$id_dm);
    $statement->execute();
}
function loadall_dm()
{
    $sql = "select * from danhmuc order by id_dm desc";
    $db = connect_db();
    $statement = $db->prepare($sql);
    $statement->execute();
    return $statement; //co ket qua tra ve phai return
}
function loadone_dm($id_dm)
{
    $sql = "select * from danhmuc where id_dm=" . $id_dm;
    $suadm = pdo_query_one($sql);
    return $suadm; //co ket qua tra ve phai return
}
function update_dm($nameloai, $id_dm)
{
    $sql = "update danhmuc set name='" . $nameloai . "' where id_dm=" . $id_dm;
    pdo_execute($sql);
}
