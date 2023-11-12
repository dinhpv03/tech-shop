<!-- END HEADER -->
<main class="catalog  mb ">
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6">
            <div class="text-danger mb-3">
                <?php
                if (isset($thongbao)) {
                    echo $thongbao;
                }
                ?>
            </div>
            <div class="h5 text-center">Quên mật khẩu</div>
            <form action="index.php?act=quenmk" method="post" class="form-group">
                <div class="mb-3 ">
                    <p class="text-center">Vui lòng nhập địa chỉ Email của bạn vào ô bên dưới. Bạn sẽ nhận được một liên kết để đặt lại mật khẩu của mình.</p>
                    <input type="email" name="email" placeholder="Nhập Email tại đây" class="form-control">
                    <span style="color: red"><?= isset($errEmail) ? $errEmail : '' ?></span>
                </div>

                <div class="mb-3 text-center" >
                    <input type="submit" class="btn btn-dark" value="XÁC NHẬN" name="guiemail">
                    <input type="reset" class="btn btn-outline-dark" value="NHẬP LẠI">
                </div>
            </form>
        </div>
        <div class="col-3">

        </div>
    </div>
    <?php
    include "view/boxright.php";
    ?>
</main>