<?php
    include "header.php";
    include "./model/danhmuc.php";
    include "./model/sanpham.php";
    include "./model/taikhoan.php";
    include "./model/binhluan.php";
    include "./model/thongke.php";
    include "./model/pdo.php";

    if (isset($_GET["act"]) && $_GET["act"] != "") {
        $act = $_GET["act"];
        switch ($act) {
    //           controller danh muc
            case "adddm":
            {
                if ($_SERVER["REQUEST_METHOD"] == 'POST') {
                    $tenLoai = $_POST["tenLoai"];

                    $errTenLoai = null;

                    if (empty($tenLoai)) {
                        $errTenLoai = 'Vui lòng nhập tên danh mục';
                    }
                    if(empty($errTenLoai)) {
                        insert_danhmuc($tenLoai);
                        header("Location: index.php?act=dslh");
                    }
                }
                include "danhmuc/add.php";
                break;
            }
            case "dslh":
                $listDanhMuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case "xoadm":
            {
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_danhmuc($_GET['id']);
                }
                $listDanhMuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            }
            case "suadm":
            {
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $dm = loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;
            }
            case "updateDm":
            {
                if (isset($_POST['capNhat']) && ($_POST['capNhat'])) {
                    $tenLoai = $_POST['tenLoai'];
                    $id = $_POST['id'];
                    update_danhmuc($id, $tenLoai);
                }
                $listDanhMuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            }
    //           controller sanpham.
            case "addsp":
            {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $tenSp = $_POST['tenSp'];
                    $giaSp = $_POST['giaSp'];
                    $moTa = $_POST['moTa'];
                    $iddm = $_POST['iddm'];
                    $hinh = $_FILES['hinh']['name'];
                    $trangthai = 0;

                    $errTen = $errHinh = $errPrice = $errMota = $errIddm = null;
                    if (empty($tenSp)) {
                        $errTen = 'Vui lòng nhập tên sản phẩm';
                    }
                    if($_FILES['hinh']['error'] != UPLOAD_ERR_OK) {
                        $errHinh = 'Vui lòng chọn ảnh';
                    }
                    if(empty($giaSp) || $giaSp <= 0) {
                        $errPrice = 'Vui lòng nhập giá sản phẩm';
                    }
                    if(empty($moTa)) {
                        $errMota = 'Vui lòng nhập mô tả';
                    }
                    if(empty($iddm)) {
                        $errIddm = 'Vui lòng chọn một danh mục';
                    }
                    if(empty($errTen) && empty($errHinh) && empty($errPrice) && empty($errMota) && empty($errIddm)) {
                        $target = 'upload/' . $_FILES['hinh']['name'];
                        move_uploaded_file($_FILES['hinh']['tmp_name'], $target);
//                        var_dump($hinh);
//                        die();
                        insert_sanpham($tenSp, $giaSp, $hinh, $moTa, $iddm,$trangthai);
                        header('Location: index.php?act=dssp');
                    }
                }
                $listDanhMuc = loadall_danhmuc();
                include "sanpham/add.php";
                break;
            }
            case "dssp":
                if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $keyw = $_POST['keyw'];
                    $iddm = $_POST['iddm'];
                } else {
                    $keyw = "";
                    $iddm = 0;
                }
                $listDanhMuc = loadall_danhmuc();
                $listSanPham = loadall_sanpham($keyw, $iddm);

                include "sanpham/list.php";
                break;
            case "xoasp":
            {
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_sanpham($_GET['id']);
                }
                $listDanhMuc = loadall_danhmuc();
                $listSanPham = loadall_sanpham("", 0);
                include "sanpham/list.php";
                break;
            }
            case "suasp":
            {
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sp = loadone_sanpham($_GET['id']);
                }
                $listDanhMuc = loadall_danhmuc();
                include "sanpham/update.php";
                break;
            }
            case "updateSp":
            {
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    $id = $_POST['id'];
                    $tenSp = $_POST['tenSp'];
                    $giaSp = $_POST['giaSp'];
                    $moTa = $_POST['moTa'];
                    $iddm = $_POST['iddm'];
                    $hinh = $_FILES['hinh']['name'];

                    $target = 'upload/' . time() . basename($_FILES['hinh']['name']);
                    move_uploaded_file($_FILES['hinh']['tmp_name'], $target);

                    update_sanpham($id,$tenSp, $giaSp, $hinh, $moTa, $iddm);
                    $listSanPham = loadall_sanpham("", 0);
                }
                $listDanhMuc = loadall_danhmuc();
                include "sanpham/list.php";
                break;
            }
//          Controller tài khoản
            case "dstk" :{
                $listTaiKhoan = loadall_taikhoan();
                include "taikhoan/taikhoan.php";
                break;
            }
            case "addtk":
            {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];

                    $errEmail = $errUser = $errPass = $errAddress = $errTel = null;
                    if (empty($email)) {
                        $errEmail = 'Vui lòng nhập email';
                    }

                    if (empty($user)) {
                        $errUser = 'Vui lòng nhập username';
                    }

                    if(empty($pass)) {
                        $errPass = 'Vui lòng nhập mật khẩu';
                    }
                    if(empty($errEmail) && empty($errUser) && empty($errPass)) {

                        insert_taikhoan_admin($email, $user, $pass, $address, $tel);
                        header('Location: index.php?act=dstk');
                    }
                }
                include "taikhoan/add.php";
                break;
            }
            case "xoatk" : {
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_taikhoan($_GET['id']);
                }
                $listTaiKhoan = loadall_taikhoan();
                include "taikhoan/taikhoan.php";
                break;
            }

            case "suatk" : {
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $tk = loadone_taikhoan($_GET['id']);
                }
                include "taikhoan/update.php";
                break;
            }

            case "updateTk" : {
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id = $_POST['id'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $role = $_POST['role'];

                    update_sanpham_admin($id,$user, $pass, $email, $address, $tel,$role);
                    $listTaiKhoan = loadall_taikhoan();
                }
                include "taikhoan/taikhoan.php";
                break;
            }
//          Controller bình luận
            case "dsbl" : {
                $listBinhLuan = loadall_binhluan(0);
                include "binhluan/list.php";
                break;
            }
            case "xoabl" : {
                if(isset($_GET['id']) && ($_GET['id'])) {
                    delete_binhluan($_GET['id']);
                    $listBinhLuan = loadall_binhluan(0);
                }
                include "binhluan/list.php";
                break;
            }
            case "deleteAll" : {
                $listBinhLuan = loadall_binhluan(0);
                delete_all();
                include "binhluan/list.php";
                break;
            }
            case "thongke" : {
                $listSanPham = loadall_sanpham();
                $listThongKe = loadall_thongke();
                include "thongke/list.php";
                break;
            }
            default:
            {
                $listThongKe = loadall_thongke();
                include "home.php";
                break;
            }
        }
    } else {
        $listSanPham = loadall_sanpham();
        $listThongKe = loadall_thongke();
        include "home.php";
    }
    include "footer.php";
