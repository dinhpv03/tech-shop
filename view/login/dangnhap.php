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
        <div class="box_title">Đăng nhập</div>
        <div class="box_content">
            <form action="index.php?act=dangnhap" method="post" class="form-label">
                <div class="mb-3">
                    <label for="user">Tên đăng nhập</label>
                    <input type="text" name="user" id="user" placeholder="Username" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="pass">Mật khẩu</label>
                    <input type="password" name="pass" id="pass" placeholder="Password" class="form-control">
                </div>
                <div class="mt-3">
                    <input class="btn btn-outline-dark" name="dangnhap" type="submit" value="Đăng nhập">
                    <input class="btn btn-outline-success" type="reset" value="Nhập lại">
                </div>
            </form>
        </div>

    </div>
    <?php
    include "view/boxright.php";
    ?>
</main>