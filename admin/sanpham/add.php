<div>
    <div>
        <h4 class="text-danger">THÊM MỚI SẢN PHẨM</h4>
    </div>
    <div class="col-8">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Tên sản phẩm:</label>
                <input type="text" class="form-control" name="tenSp" placeholder="Product name">
                <span style="color: red"><?= isset($errTen) ? $errTen : '' ?></span>
            </div>
            <div class="mb-3">
                <label class="form-label">Giá sản phẩm: </label>
                <input type="text" class="form-control" name="giaSp" placeholder="Price">
                <span style="color: red"><?= isset($errPrice) ? $errPrice : '' ?></span>
            </div>
            <div class="mb-3">
                <label class="form-label">Hình ảnh: </label>
                <input type="file" class="form-control" name="hinh">
                <span style="color: red"><?= isset($errHinh) ? $errHinh : '' ?></span>
            </div>
            <div class="mb-3">
                <label class="form-label">Mô tả: </label>
                <textarea type="text" class="form-control" name="moTa"></textarea>
               <span style="color: red"><?= isset($errMota) ? $errMota : '' ?></span>
            </div>
            <div class="mb-3">
                <label class="form-label">Danh mục: </label>
                <select name="iddm" id="" class="form-select">
                    <option value="0">Chọn danh mục </option>
                    <?php foreach ($listDanhMuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    } ?>
                </select>
                <span style="color: red"><?= isset($errIddm) ? $errIddm : '' ?></span>
            </div>


            <input type="submit" name="themmoi" class="btn btn-primary" value="Thêm mới">
            <button type="reset" class="btn btn-outline-success">Nhập lại</button>
            <a class="btn btn-outline-success" href="index.php?act=dssp">Danh sách</a>
        </form>
    </div>
</div>