<?php
if (is_array($tk)) {
    extract($tk);
//    var_dump($tk);
//    die;
}
?>
    <div class="boxleft">
        <div class="text-danger mb-3">
        </div>
        <div class="box_title h4 text-danger" >Cập nhật tài khoản</div>
        <div class="box_content">
            <form action="index.php?act=updateTk" method="post" class="form-label">
                <input type="hidden" name="id" value="<?=$id?>">
                <div class="mb-3">
                    <label for="user">Tên đăng nhập</label>
                    <input type="text" name="user" id="user" placeholder="Username" class="form-control" value="<?=$user?>">
                </div>
                <div class="mb-3">
                    <label for="pass">Mật khẩu</label>
                    <input type="password" name="pass" id="pass" placeholder="Password" class="form-control"  value="<?=$pass?>">
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" class="form-control" value="<?=$email?>">
                </div>
                <div class="mb-3">
                    <label for="email">Địa chỉ</label>
                    <input type="text" name="address" id="email" placeholder="Email" class="form-control" value="<?=$address?>">
                </div>
                <div class="mb-3">
                    <label for="email">Điện thoại</label>
                    <input type="tel" name="tel" id="email" placeholder="Email" class="form-control" value="<?=$tel?>">
                </div>
                <div class="mb-3">
                    <label for="email">Vai trò</label>
                    <input type="number" name="role" id="email" placeholder="Email" class="form-control" value="<?=$role?>">
                </div>

                <div class="mt-3">
                    <input class="btn btn-primary" name="capnhat" type="submit" value="Cập nhật">
                    <input class="btn btn-outline-success" type="reset" value="Nhập lại">
                    <a class="btn btn-outline-success" href="index.php?act=dstk">Danh sách</a>
                </div>
            </form>

        </div>

    </div>
