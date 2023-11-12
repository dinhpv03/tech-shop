<div class="row2">
    <div class="row2 font_title">
        <h4 class="text-danger text-center mb-4">DANH SÁCH LOẠI HÀNG HÓA</h4>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table class="table table-light">
                    <tr>
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th>Hành động</th>
                    </tr>
                    <?php foreach ($listDanhMuc as $danhmuc) {
                        extract($danhmuc);

                        $xoadm = "index.php?act=xoadm&id=" . $id;
                        $suadm = "index.php?act=suadm&id=" . $id;
                        echo "
                            <tr>
                                <td><input type='checkbox' name='selected_items[]' value='$id'></td>
                                <td>$id</td>
                                <td>$name</td> 
                                <td>
                                    <a class='btn btn-primary' href='$suadm'>Sửa</a>
                                    <button class='btn btn-outline-danger' type='button' onclick=\"if (confirm('Bạn có chắc muốn xóa ?')) window.location.href='$xoadm'\">Xóa</button>
                                </td>
                            </tr>";
                    }
                    ?>
                </table>

            </div>
            <div>
                <button  id="selectAll" class="btn btn-outline-success" type="button">Chọn tất cả</button>
                <button  id="deselectAll" class="btn btn-outline-success" type="button">Bỏ chọn tất cả</button>
                <a class="btn btn-primary" href="index.php?act=adddm">Nhập thêm + </a>
            </div>
        </form>
    </div>
</div>