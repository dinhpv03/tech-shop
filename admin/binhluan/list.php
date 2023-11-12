<div class="row2">
    <div class="row2 font_title">
        <h4 class="text-danger text-center mb-4">DANH SÁCH BÌNH LUẬN</h4>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table class="table table-light">
                    <tr>
                        <th></th>
                        <th>Mã bình luận</th>
                        <th>Nội dung</th>
                        <th>ID người bình luận</th>
                        <th>ID sản phẩm</th>
                        <th>Ngày bình luận</th>
                        <th>Hành động</th>
                    </tr>
                    <?php foreach ($listBinhLuan as $binhluan) {
                        extract($binhluan);

                        $xoabl = "index.php?act=xoabl&id=" . $id;
                        $suabl = "index.php?act=suabl&id=" . $id;
                        echo "
                            <tr>
                                <td><input type='checkbox' name='selected_items[]' value='$id'></td>
                                <td>$id</td>
                                <td>$noidung</td> 
                                <td>$iduser</td> 
                                <td>$idpro</td> 
                                <td>$ngaybinhluan</td> 
                                <td>
                                    <button class='btn btn-outline-danger' type='button' onclick=\"if (confirm('Bạn có chắc muốn xóa ?')) window.location.href='$xoabl'\">Xóa</button>
                                </td>
                            </tr>";
                    }
                    ?>
                </table>

            </div>
            <div>
                <button  id="selectAll" class="btn btn-outline-success" type="button">Chọn tất cả</button>
                <button  id="deselectAll" class="btn btn-outline-success" type="button">Bỏ chọn tất cả</button>
                <button class="btn btn-danger" type="button" onclick="if (confirm('Bạn có chắc muốn xóa tất cả bình luận ??'))window.location.href='index.php?act=deleteAll'">Xóa tất cả bình luận</button>
            </div>
        </form>
    </div>
</div>
