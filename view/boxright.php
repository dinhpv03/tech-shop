<div class="boxright">
    <div class="mb">
        <div class="box_title">TÀI KHOẢN</div>
        <div class="box_content form_account">
            <?php
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
                ?>
                <div>
                    Xin chào <i><b><?= $user;?></b></i>

                </div>
                <div class="list-group">
                    <a href="index.php?act=quenmk" class="list-group-item list-group-item-action">Quên mật khẩu</a>
                    <a href="index.php?act=edit_taikhoan" class="list-group-item list-group-item-action">Cập nhật tài khoản</a>
                    <?php if($role == 1) {?>
                        <a href="admin/index.php" class="list-group-item list-group-item-action">Đăng nhập admin</a>
                    <?php  } ?>
                    <a href="index.php?act=dangxuat" class="list-group-item list-group-item-action">Đăng xuất</a>
                </div>

        <?php
           } else {
        ?>
            <form action="index.php?act=dangnhap" method="POST">
                <h6>Tên đăng nhập</h6>
                <input type="text" name="user" id="">

                <h6>Mật khẩu</h6>
                <input type="password" name="pass" id="">
                <input type="checkbox" name="" id=""> Ghi nhớ tài khoản?

                <br><input class="btn btn-outline-dark mt-2" type="submit" name="dangnhap" value="Đăng nhập">
            </form>

            <li class="form_li mt-2" >Bạn chưa có tài khoản? <a style="text-decoration: none" href="index.php?act=dangky">Đăng ký</a></li>
                <li class="form_li mt-2"><a href="index.php?act=quenmk">Quên mật khẩu?</a></li>
            <?php
                 }
            ?>
        </div>
    </div>
    <div class="mb">
        <div class="box_title">DANH MỤC</div>
        <div class="box_content2 product_portfolio">
            <?php
            foreach ($dm as $item) {
                extract($item);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '<ul>
                           <li><a href="' . $linkdm . '">' . $name . '</a></li>
                      </ul>';
            }
            ?>
        </div>
    </div>

    <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
    <div class="mb">
        <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
        <div class="box_content">
            <div class="selling_products" style="">
                <?php
                foreach ($dsTop as $top) {
                    extract($top);
//                    var_dump($top);
//                    exit();
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    $hinh = $imgPath . $img;

                    echo ' <div class="d-block mt-3">
                                <a href="' . $linksp . '"><img src="' . $hinh . '" alt="anh"></a>
                                    <a href="' . $linksp . '">' . $name . '</a>
                           </div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>