<?php
    if (is_array($sp)) {
        extract($sp);
    }
    $hinhPath = './upload/'.$img;
    if(is_file($hinhPath)) {
        $hinh = "<img src = '".$hinhPath."' height = '80'>";
    } else {
        $hinh = "No photo";
    }
?>
    <div>
        <div>
            <h4 class="text-danger">CẬP NHẬT SẢN PHẨM</h4>
        </div>
        <div class="col-6">
            <form action="index.php?act=updateSp" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $id ?>">
                <div class="mb-3">
                    <label class="form-label">Tên sản phẩm:</label>
                    <input type="text" class="form-control" name="tenSp" value="<?= $name ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Giá sản phẩm: </label>
                    <input type="text" class="form-control" name="giaSp" value="<?=$price?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Hình ảnh: </label>
                    <input type="file" class="form-control" name="hinh">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mô tả: </label>
                    <textarea type="text" class="form-control" name="moTa"><?=$moTa?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Danh mục: </label>
                    <select name="iddm" id="" class="form-control">
                        <?php foreach ($listDanhMuc as $danhmuc) {
                            extract($danhmuc);
                            if($iddm == $id) $s = "selected"; else $s = "";
                            echo '<option value="' . $id . '"'. $s .'>' . $name . '</option>';
                        } ?>
                    </select>
                </div>

                <input type="submit" name="capNhat" class="btn btn-primary" value="Cập nhật">
                <button type="reset" class="btn btn-outline-success">Nhập lại</button>
                <a class="btn btn-outline-success" href="index.php?act=dssp">Danh sách</a>
            </form>
        </div>
    </div>