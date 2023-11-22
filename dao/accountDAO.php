<?php
function insert_tk($username, $password, $ho_ten, $file, $email, $address, $tel)
{
    $sql = "insert into taikhoan(username,password,ho_ten,hinh,email,address,tel,role)
     values(:username,:password,:ho_ten,:file,:email,:address,:tel,1)";
     $db = connect_db();
     $statement = $db->prepare($sql);
     $statement->bindValue(":username",$username);
     $statement->bindValue(":password",$password);
     $statement->bindValue(":ho_ten",$ho_ten);
     $statement->bindValue(":file",$file);
     $statement->bindValue(":email",$email);
     $statement->bindValue(":address",$address);
     $statement->bindValue(":tel",$tel);

     $statement->execute();}
function check_user($username, $password)
{
    $sql = "select * from taikhoan where username='" . $username . "' AND password='" . $password . "'";
    $sp = pdo_query_one($sql);
    return $sp;
    // return pdo_query_all($sql); //co ket qua tra ve phai return
}
function update_taikhoan($id_tk, $username, $password, $ho_ten, $file, $email, $address, $tel)
{
    // if($file!=''){
    //     $sql = "update taikhoan set username=':username',password='" . $password . "',
    //     ho_ten='" . $ho_ten . "',hinh='" . $file . "',email='" . $email . "',
    //     address='" . $address . "',tel='" . $tel . "' where id_tk=" . $id_tk;
    // }else{
    //     $sql = "update taikhoan set username='" . $username . "',password='" . $password . "',
    //     ho_ten='" . $ho_ten . "',email='" . $email . "',
    //     address='" . $address . "',tel='" . $tel . "' where id_tk=" . $id_tk;
    // }
    $sql= "UPDATE `taikhoan` SET `username`=:username,`password`=:password,`ho_ten`=:ho_ten,`hinh`=:file,`email`=:email,`address`=:address,`tel`=:tel  WHERE `id_tk`=:id_tk ";
    $db = connect_db();
    $statement = $db->prepare($sql);
    $statement->bindValue(":id_tk",$id_tk);
    $statement->bindValue(":username",$username);
    $statement->bindValue(":password",$password);
    $statement->bindValue(":ho_ten",$ho_ten);
    $statement->bindValue(":file",$file);
    $statement->bindValue(":email",$email);
    $statement->bindValue(":address",$address);
    $statement->bindValue(":tel",$tel);

    $statement->execute();
}

function check_email($email)
{
    $sql = "select * from taikhoan where email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
    // return pdo_query_all($sql); //co ket qua tra ve phai return
}
function loadall_tk()
{
    // $sql = "select * from taikhoan";
    $sql = "select * from taikhoan tk join role rl on tk.role=rl.id_role order by id_tk desc";
    $db = connect_db();
    $statement = $db->prepare($sql);
    $statement->execute();
    return $statement; //co ket qua tra ve phai return
}
function delete_tk($id_tk)
{
    $sql = "delete from taikhoan where id_tk=" . $id_tk;
    pdo_execute($sql);
}
function loadone_tk($id_tk)
{
    $sql = "select * from taikhoan where id_tk=" . $id_tk;
    $suasp = pdo_query_one($sql);
    return $suasp; //co ket qua tra ve phai return
}
function  update_tk($id_tk, $username,$file, $email, $address, $tel)
{
    if($file!=''){
        $sql = "update taikhoan set username='" . $username . "',hinh='" . $file . "',email='" . $email . "',
        address='" . $address . "',tel='" . $tel . "' where id_tk=" . $id_tk;
    }else{
        $sql = "update taikhoan set username='" . $username . "',email='" . $email . "',
        address='" . $address . "',tel='" . $tel . "' where id_tk=" . $id_tk;
    }
   
    pdo_execute($sql);
}
function insert_taikhoan($username, $password, $ho_ten,$file, $email, $address, $tel)
{
    $sql = "insert into taikhoan(username,password,ho_ten,hinh,email,address,tel) values('$username','$password','$ho_ten','$file','$email','$address','$tel')";
    pdo_execute($sql);
}
