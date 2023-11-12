<?php
session_start();
    include "view/header.php";
    include "admin/model/pdo.php";
    include "admin/model/sanpham.php";
    include "admin/model/danhmuc.php";
    include "admin/model/taikhoan.php";
    include "global.php";

    $spNew = sanpham_home();
    $dm = loadall_danhmuc();
    $dsTop = loadall_sanpham_top10();

    if((isset($_GET['act'])) && ($_GET['act'] != "")){
        $act = $_GET['act'];
        switch($act) {
            case "dangnhap" :
            {
                if((isset($_POST['dangnhap'])) && ($_POST['dangnhap'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];

                    $check_user = check_user($user, $pass);
                    if(is_array($check_user)) {
                        $_SESSION['user'] = $check_user;
                        echo '<h6 class="text-danger">Đăng nhập thành công!</h6>';
                        include "view/home.php";
                    } else {
                        $thongbao = "Tài khoản không tồn tại. Đăng ký ngay!";
                        include "view/login/dangky.php";
                    }
                }
                break;
            }
            case "dangky":
            {
                if((isset($_POST['dangky'])) && ($_POST['dangky'])) {
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];

                    $errEmail = $errUser = $errPass = null;
                    if (empty($_POST["email"])) {
                        $errEmail = "Vui lòng nhập Email!";
                    } else {
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $errEmail = "Lỗi cú pháp Email. Vui lòng nhập lại!";
                        }
                    }
                    if(empty($user)) {
                        $errUser = 'Vui lòng nhập tên tài khoản! ';
                    }

                    if(empty($pass)) {
                        $errPass = 'Vui lòng nhập mật khẩu!';
                    } else {
                        if (!preg_match("/^[a-zA-Z0-9]*$/", $pass)) {
                            $errPass = "Mật khẩu chỉ chứa kí tự từ A-Z 0-9. Vui lòng nhập lại!";
                        }
                    }
                    if(empty($errEmail) && empty($errUser) && empty($errPass)) {
                        insert_taikhoan($email, $user, $pass);
                        $thongbao =  "Đăng ký tài khoản thành công!";
                    }
                }
                include "view/login/dangky.php";
                break;
            }
            case "sanpham":
            {
                if((isset($_POST['kyw'])) && ($_POST['kyw'] != "")) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                if((isset($_GET['iddm'])) && ($_GET['iddm'] > 0)) {
                    $iddm = $_GET['iddm'];
                } else {
                    $iddm = 0;
                }

                $tendm = load_ten_danhmuc($iddm);
                $dssp = loadall_sanpham($kyw, $iddm);
                include "view/sanpham.php";
                break;
            }
            case "sanphamct":
            {
                if((isset($_GET['idsp'])) && ($_GET['idsp'] != "")) {
                    $oneSp = loadone_sanpham($_GET['idsp']);
                    extract($oneSp);
                    $sp_cungloai = load_sanpham_cungloai($id,$iddm);
                    include "view/sanphamct.php";
                } else {
                    include "view/home.php";
                }
                break;
            }
            case "edit_taikhoan" :
            {
                if ((isset($_POST['capnhat'])) && ($_POST['capnhat'])) {
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $id = $_POST['id'];

                    $errUser = $errPass = null;
                    if(empty($user)) {
                        $errUser = "Không được để tên đăng nhập trống";
                    }
                    if(empty($pass)) {
                        $errPass = "Không được để mật khẩu trống";
                    }
                    if(empty($errUser) && empty($errPass)) {
                        update_taikhoan($id,$email,$user,$pass,$address,$tel);
                        $_SESSION['user'] = check_user($user, $pass);
                        $thongbao = "Cập nhật tài khoản thành công!";
                    }
                }
                include "view/edit_taikhoan.php";
                break;
            }
            case "quenmk":
            {
                if ((isset($_POST['guiemail'])) && ($_POST['guiemail'])) {
                    $email = $_POST['email'];

                    $errEmail = null;

                    if(empty($email)) {
                        $errEmail = 'Vui lòng nhập Email!';
                    }
                    if(empty($errEmail)) {
                        $checkEmail = check_email($email);
                        if(is_array($checkEmail)) {
                            $thongbao = "Mật khẩu của bạn là: " . $checkEmail['pass'];
                        } else {
                            $thongbao = "Tài khoản không tồn tại";
                        }
                    }


                }
                include "view/login/quenmk.php";
                break;
            }
            case "dangxuat" :
            {
                session_unset();
                include "view/home.php";
                break;
            }
            case "thongtintk" :
            {
                include "view/login/thongtintaikhoan.php";
                break;
            }
            case "addtocart" :
            {
                if ((isset($_POST['addtocart'])) && ($_POST['addtocart'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $img = $_POST['img'];
                    $price = $_POST['price'];
                    $soluong = 1;
                    $thanhtien = $soluong * $price;
                    $spadd = [$id,$name,$img,$price,$soluong,$thanhtien];

                    if (!isset($_SESSION['MyCart'])) {
                        $_SESSION['MyCart'] = array();
                    }

                    array_push($_SESSION['MyCart'],$spadd);
                }
                include "view/cart/cart.php";
                break;
            }
            case "delCart" :
            {
                if(isset($_SESSION['MyCart'])) {
                    array_splice($_SESSION['MyCart'], $_GET['idcart'],1);
                } else {
                    $_SESSION['MyCart'] = [];
                }
            }
            case "cartView" :
            {
                include "view/cart/cart.php";
                break;
            }
            case "gioi_thieu" : {
                include "view/gioi_thieu.php";
                break;
            }
            case "lien_he" : {
                include "view/lien_he.php";
                break;
            }
            case "hoi_dap" : {
                include "view/hoi_dap.php";
                break;
            }
            case "gop_y" : {
                include "view/gop_y.php";
                break;
            }
            default:
            {
                include "view/home.php";
                break;
            }
        }
    } else {
        include "view/home.php";
    }
    include "view/footer.php";