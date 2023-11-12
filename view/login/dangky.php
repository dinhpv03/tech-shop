<!-- END HEADER -->
<main class="catalog  mb ">
    <div class="boxleft">
        <div class="text-danger mb-3">
            <?php
            if (isset($thongbao)) {
                echo $thongbao;
            }
            ?>
        </div>
        <div class="box_title">Đăng ký tài khoản</div>
        <div class="box_content">
            <form action="index.php?act=dangky" method="post" class="form-label">
                <div class="mb-3">
                    <label for="user">Tên đăng nhập</label>
                    <input type="text" name="user" id="user" placeholder="Username" class="form-control">
                    <span style="color: red"><?= isset($errUser) ? $errUser : '' ?></span>
                </div>
                <div class="mb-3">
                    <label for="pass">Mật khẩu</label>
                    <input type="password" name="pass" id="pass" placeholder="Password" class="form-control">
                    <span style="color: red"><?= isset($errPass) ? $errPass : '' ?></span>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                    <span style="color: red"><?= isset($errEmail) ? $errEmail : '' ?></span>
                </div>
                <div class="mt-3">
                    <input class="btn btn-outline-dark" name="dangky" type="submit" value="Đăng ký">
                    <input class="btn btn-outline-success" type="reset" value="Nhập lại">
                </div>
            </form>
        </div>

    </div>
    <?php
    include "view/boxright.php";
    ?>
</main>