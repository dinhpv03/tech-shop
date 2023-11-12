<?php
function insert_binhluan($noidung, $user,$iduser, $idpro, $ngaybinhluan) {
    $sql = "INSERT INTO binhluan(noidung, user, iduser, idpro, ngaybinhluan) 
            VALUES ('$noidung','$user','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}

function loadall_binhluan($idpro) {
    $sql = "SELECT * FROM binhluan where 1";
    if($idpro > 0) $sql.=" AND idpro='".$idpro."'";
    $sql.= " ORDER BY id DESC";
    $listBinhLuan = pdo_query($sql);
    return $listBinhLuan;
}

function delete_binhluan($id) {
    $sql = "DELETE  FROM binhluan WHERE id =".$_GET['id'];
    pdo_execute($sql);
}
function delete_all() {
    $sql = "DELETE FROM binhluan";
    pdo_execute($sql);
}