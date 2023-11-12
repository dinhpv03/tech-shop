<!-- END HEADER -->
<main class="catalog  mb ">
    <div class="boxleft">
        <div class="text-danger mb-3">
        </div>
        <div class="box_title">THÔNG TIN GIỎ HÀNG</div>
        <div class="box_content">
            <table class="table table-responsive">
                <thead>
                <tr>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php
                $tong = 0;
                $i = 0;
                if (isset($_SESSION['MyCart']) && is_array($_SESSION['MyCart'])) {
                foreach ($_SESSION['MyCart'] as $cart) {
                    $hinh = $imgPath . $cart[2];
                    $thanhtien = $cart[3] * $cart[4];
                    $tong += $thanhtien;

                    $xoa = '<a class="btn btn-outline-success"  href="index.php?act=delCart&idcart=' . $i . '">Xóa</a>';

                    echo '<tr>
                        <td><img src="' . $hinh . '" alt="" height="80"></td>
                        <td>' . $cart[1] . '</td>
                        <td>' . $cart[3] . '</td>
                        <td>' . $cart[4] . '</td>
                        <td>' . $thanhtien . '$</td>
                        <td>
                            ' . $xoa . '
                        </td>
                    </tr>';
                    $i += 1;
                }
                }
                ?>
                <tr>
                    <td colspan="6"></td>
                </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-9">
                    <strong></strong>
                </div>
                <div class="col-2">
                    <strong>Tiền phải trả: </strong>
                </div>
                <div class="col-1">
                    <strong><strong><?php echo $tong; ?>$</strong></strong>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">

            </div>
            <div class="col-4">
                <a class="btn btn-outline-dark mt-4 " href="index.php?act=dssp">TIẾP TỤC MUA SẮM</a>
                <?php
                if (isset($_SESSION['user'])) {
                    echo '<a class="btn btn-dark mt-4 " href="#">THANH TOÁN</a>';
                } else {
                    echo '<a class="btn btn-outline-dark mt-4 " href="index.php?act=dangky">ĐĂNG NHẬP ĐỂ THANH TOÁN</a>';
                }
                ?>
            </div>
        </div>

    </div>
    <?php
    include "view/boxright.php";
    ?>
</main>