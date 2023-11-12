<!-- END HEADER -->
<main class="catalog  mb ">

    <div class="boxleft">
        <div class="box_title h5">Thông tin tài khoản</div>
        <div class="box_content">
            <form action="index.php?act=edit_taikhoan" method="post" class="form-label">
                <?php
                if(isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                }
                ?>
                <div class="mb-3">
                    <label for="user">Tên đăng nhập</label>
                    <input type="text" name="user" id="user" class="form-control" value="<?="$user"?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?=$email?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="address">Địa chỉ</label>
                    <input type="text" name="address" id="pass" class="form-control" value="<?="$address"?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="tel">Điện thoại</label>
                    <input type="tel" name="tel" id="pass" class="form-control " value="<?="$tel"?>" disabled>
                </div>
                <div class="mt-3">
                    <a class="btn btn-outline-danger" href="index.php?act=dangxuat">Đăng xuất</a>
                </div>
            </form>

        </div>

    </div>
    <?php
    include "view/boxright.php";
    ?>
</main>