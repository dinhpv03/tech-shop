
<main class="catalog  mb ">

    <div class="boxleft">
        <h4 class="box_title text-danger">THÊM MỚI TÀI KHOẢN</h4>
        <div class="row">
            <div class="col-8">
                <form action="index.php?act=addtk" method="post" class="form-label">
                    <div class="mb-3">
                        <label for="user">Tên đăng nhập</label>
                        <input type="text" name="user" id="user" placeholder="Username" class="form-control">
                        <span style="color: red"><?= isset($errUser) ? $errUser : '' ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="pass">Mật khẩu</label>
                        <input type="password" name="pass" id="pass" placeholder="Password" class="form-control" >
                        <span style="color: red"><?= isset($errPass) ? $errPass : '' ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                        <span style="color: red"><?= isset($errEmail) ? $errEmail : '' ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="address">Địa chỉ</label>
                        <input type="text" name="address" id="pass" placeholder="Address" class="form-control" >
                        <span style="color: red"><?= isset($errAddress) ? $errAddress : '' ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="tel">Điện thoại</label>
                        <input type="tel" name="tel" id="pass" placeholder="Telephone number" class="form-control ">
                        <span style="color: red"><?= isset($errTel) ? $errTel : '' ?></span>
                    </div>
                    <div class="mt-3">
                        <input class="btn btn-primary" name="capnhat" type="submit" value="Thêm mới + ">
                        <input class="btn btn-outline-success" type="reset" value="Nhập lại">
                        <a class="btn btn-outline-success" href="index.php?act=dstk">Danh sách</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>