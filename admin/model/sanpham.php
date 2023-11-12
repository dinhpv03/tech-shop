<?php
function insert_sanpham($tenSp, $giaSp, $hinh,$moTa, $iddm,$trangthai) {
    $sql = "INSERT INTO sanpham(name, price, img, moTa, iddm ,trangthai) 
            VALUES ('$tenSp', '$giaSp','$hinh', '$moTa', '$iddm','$trangthai')";
//    var_dump($hinh);
//    die;
    pdo_execute($sql);
}

function delete_sanpham($id)    {
    $sql = "DELETE  FROM sanpham WHERE id =" . $_GET['id'];
    pdo_execute($sql);
}


function loadall_sanpham($keyw="",$iddm=0){
    $sql="SELECT sp.id, sp.name, sp.price, sp.img, sp.moTa, sp.luotXem, sp.iddm, 
        COUNT(bl.id) AS soBinhLuan
        FROM sanpham sp
        LEFT JOIN binhluan bl 
        ON bl.idpro = sp.id
        WHERE sp.trangthai = 0";
    if($keyw != ""){
        $sql.=" and name like '%".$keyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql .= " GROUP BY sp.id, sp.name, sp.price, sp.img, sp.moTa, sp.luotXem, sp.iddm ORDER BY soBinhLuan DESC";
    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}

function load_ten_danhmuc($iddm)   {
    if($iddm > 0) {
        $sql = "SELECT * FROM danhmuc WHERE id=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}
function loadone_sanpham($id)   {
    $sql = "SELECT * FROM sanpham WHERE id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function load_sanpham_cungloai($id, $iddm)   {
    $sql = "SELECT * FROM sanpham WHERE iddm=".$iddm." AND id <> " . $id;
    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}
function update_sanpham($id, $tenSp, $giaSp, $hinh, $moTa, $iddm)  {
    if ($hinh != "") {
        $sql = "UPDATE sanpham SET name = '".$tenSp."', price = '".$giaSp."', img = '".$hinh."', moTa = '".$moTa."', iddm = '".$iddm."'  WHERE id=" . $id;
    } else {
        $sql = "UPDATE sanpham SET name = '".$tenSp."', price = '".$giaSp."', moTa = '".$moTa."', iddm = '".$iddm."'  WHERE id=" . $id;
    }
//    var_dump($sql);
//    die;
    pdo_execute($sql);
}
function sanpham_home()  {
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id DESC LIMIT 0,12";
    $listSanPham = pdo_query($sql);
    return $listSanPham;
}


function loadall_sanpham_top10(){
    $sql="SELECT * FROM sanpham WHERE 1 ORDER BY luotXem DESC limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
