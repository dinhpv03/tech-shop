<!-- END HEADER -->
<main class="catalog  mb ">

    <div class="boxleft">
        <div class="box_title h5">Cập nhật tài khoản</div>
        <div class="box_content">
            <form action="index.php?act=edit_taikhoan" method="post" class="form-label">
                <?php
                  if(isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                }
                ?>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" class="form-control" value="<?=$email?>">
                </div>
                <div class="mb-3">
                    <label for="user">Tên đăng nhập</label>
                    <input type="text" name="user" id="user" placeholder="Username" class="form-control" value="<?="$user"?>">
                    <span style="color: red"><?= isset($errUser) ? $errUser : '' ?></span>
                </div>
                <div class="mb-3">
                    <label for="pass">Mật khẩu</label>
                    <input type="password" name="pass" id="pass" placeholder="Password" class="form-control" value="<?="$pass"?>">
                    <span style="color: red"><?= isset($errPass) ? $errPass : '' ?></span>
                </div>
                <div class="mb-3">
                    <label for="address">Địa chỉ</label>
                    <input type="text" name="address" id="pass" placeholder="Address" class="form-control" value="<?="$address"?>">
                </div>
                <div class="mb-3">
                    <label for="tel">Điện thoại</label>
                    <input type="tel" name="tel" id="pass" placeholder="Telephone number" class="form-control " value="<?="$tel"?>">
                </div>
                <input type="hidden" name="id" value="<?= "$id" ?>">
                <div class="mt-3">
                    <input class="btn btn-outline-dark" name="capnhat" type="submit" value="Cập nhật">
                    <input class="btn btn-outline-success" type="reset" value="Nhập lại">
                </div>
                <div class="thongbao h5 mt-4">
                    <?php
                    if(isset($thongbao)) {
                        echo $thongbao;
                    }
                    ?>
                </div
            </form>

        </div>

    </div>
    <?php
    include "view/boxright.php";
    ?>
</main>