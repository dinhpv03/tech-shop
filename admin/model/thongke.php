<?php
function loadall_thongke() {
    $sql = "SELECT danhmuc.id as ma_dm, danhmuc.name as tendm, 
            COUNT(sanpham.id) as countsp, 
            MIN(sanpham.price) as minprice, 
            MAX(sanpham.price) as maxprice, 
            AVG(sanpham.price) as avgprice
            FROM sanpham
            LEFT JOIN danhmuc ON danhmuc.id = sanpham.iddm
            GROUP BY danhmuc.id
            ORDER BY countsp DESC";
    $listThongKe = pdo_query($sql);
    return $listThongKe;
}