
<div class="row2">
    <div class="row2 font_title">
        <h4 class="text-danger text-center mb-4">DANH SÁCH LOẠI HÀNG HÓA</h4>
    </div>
    <div class="m-4">
        <form action="index.php?act=dssp" method="post">
            <input class="me-2" type="text" name="keyw">
            <select name="iddm"  id="">
                <option selected value="0">All</option>
                <?php foreach ($listDanhMuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="' . $id . '">' . $name . '</option>';
                } ?>
            </select>
            <input class="btn btn-outline-secondary " name="listok" value="Tìm kiếm" type="submit">
        </form>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table class="table table-striped">
                    <tr>
                        <th></th>
                        <th>Mã</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Hình ảnh</th>
                        <th>Mô tả</th>
                        <th>Lượt xem</th>
                        <th>Số bình luận</th>
                        <th>Hành động</th>
                    </tr>
                    <?php foreach ($listSanPham as $sanpham) {
                        extract($sanpham);
                        $xoasp = "index.php?act=xoasp&id=" . $id;
                        $suasp = "index.php?act=suasp&id=" . $id;
//                        var_dump($sanpham);
//                        die;

                        $hinhPath = './upload/' . $img;
                        if(is_file($hinhPath)) {
                            $hinh = "<img src = '".$hinhPath."' height = '80'>";
                        } else {
                            $hinh = "Không có ảnh.";
                        }

                        echo "
                            <tr>
                                <td><input type='checkbox' name='selected_items[]' value='$id'></td>
                                <td>$id</td>
                                <td>$name</td> 
                                <td>$price</td> 
                                <td>$hinh</td>
                                <td>$moTa</td>
                                <td>$luotXem</td>
                                <td>$soBinhLuan</td>
                                <td>
                                    <a class='btn btn-primary' href='$suasp'>Sửa</a>
                                    <button class='btn btn-outline-danger' type='button' onclick=\"if (confirm('Bạn có chắc muốn xóa ?')) window.location.href='$xoasp'\">Xóa</button>
                                </td>
                            </tr>";
                    }
                    ?>
                </table>

            </div>
            <div>
                <button  id="selectAll" class="btn btn-outline-success" type="button">Chọn tất cả</button>
                <button  id="deselectAll" class="btn btn-outline-success" type="button">Bỏ chọn tất cả</button>
                <a class="btn btn-primary" href="index.php?act=addsp">Nhập thêm + </a>
            </div>
        </form>
    </div>
</div>