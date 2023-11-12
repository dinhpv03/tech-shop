<div class="row2">
    <div class="row2 font_title">
        <h4 class="text-danger text-center mb-4">DANH SÁCH KHÁCH HÀNG</h4>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table class="table table-light">
                    <tr>
                        <th></th>
                        <th>Mã tài khoản</th>
                        <th>Tên đăng nhập</th>
                        <th>Mật khẩu</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Điện thoại</th>
                        <th>Vai trò</th>
                        <th>Hành động</th>
                    </tr>
                    <?php foreach ($listTaiKhoan as $taikhoan) {
                        extract($taikhoan);

                        $xoatk = "index.php?act=xoatk&id=" . $id;
                        $suatk = "index.php?act=suatk&id=" . $id;
                        echo "
                            <tr>
                                <td><input type='checkbox' name='selected_items[]' value='$id'></td>
                                <td>$id</td>
                                <td>$user</td> 
                                <td>$pass</td> 
                                <td>$email</td> 
                                <td>$address</td> 
                                <td>$tel</td> 
                                <td>$role</td> 
                                <td>
                                    <a class='btn btn-primary' href='$suatk'>Sửa</a>
                                    <button class='btn btn-outline-danger' type='button' onclick=\"if (confirm('Bạn có chắc muốn xóa ?')) window.location.href='$xoatk'\">Xóa</button>
                                </td>
                            </tr>";
                    }
                    ?>
                </table>

            </div>
            <div>
                <button  id="selectAll" class="btn btn-outline-success" type="button">Chọn tất cả</button>
                <button  id="deselectAll" class="btn btn-outline-success" type="button">Bỏ chọn tất cả</button>
                <a class="btn btn-primary" href="index.php?act=addtk">Nhập thêm+</a>
            </div>
        </form>
    </div>
</div>
