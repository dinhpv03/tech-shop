<?php
    if(is_array($dm)) {
        extract($dm);
    }
?>
<div>
    <div>
        <h4 class="text-danger">CẬP NHẬT LOẠI HÀNG HÓA</h4>
    </div>
    <div class="col-6">
        <form action="index.php?act=updateDm" method="post">
            <div class="mb-3">
                <label class="form-label">Mã loại:</label>
                <input type="number" class="form-control" name="maLoai">
            </div>
            <div class="mb-3">
                <label class="form-label">Tên loại: </label>
                <input type="hidden" name="id" placeholder="Tự tăng" value="<?php if(isset($id) && ($id != "")) echo $id;?>">
                <input type="text" class="form-control" name="tenLoai" value="<?php if(isset($name) && ($name != "")) echo $name;?>">

            </div>
            <input type="submit" class="btn btn-primary" name="capNhat" value="Cập nhật">
            <button type="reset" class="btn btn-outline-success">Nhập lại</button>
            <a class="btn btn-outline-success" href="index.php?act=dslh">Danh sách</a>
        </form>
    </div>
</div>