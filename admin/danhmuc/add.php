<div>
    <div>
        <h4 class="text-danger">THÊM MỚI LOẠI HÀNG</h4>
    </div>
    <div class="col-8">
        <form action="index.php?act=adddm" method="post">
            <div class="mb-3">
                <label class="form-label">Mã loại:</label>
                <input type="number" class="form-control" name="maLoai" placeholder="Tự tăng" disabled>
            </div>
            <div class="mb-3">
                <label class="form-label">Tên loại: </label>
                <input type="text" class="form-control" name="tenLoai" placeholder="Tên danh mục">
                <span style="color: red"><?= isset($errTenLoai) ? $errTenLoai : '' ?></span>
            </div>
            <input type="submit" name="themmoi" class="btn btn-primary" value="Thêm mới +">
            <button type="reset" class="btn btn-outline-success">Nhập lại</button>
            <a class="btn btn-outline-success" href="index.php?act=dslh">Danh sách</a>
        </form>
    </div>
</div>