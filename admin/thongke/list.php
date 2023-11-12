<div class="row2">
    <div class="row2 font_title">
        <h4 class="text-danger text-center mb-4">THỐNG KÊ THEO DANH MỤC</h4>
    </div>
    <div class="row2 form_content ">
            <div class="row2 mb10 formds_loai">
                <table class="table table-light">
                    <tr>
                        <th>Mã danh mục</th>
                        <th>Tên danh mục</th>
                        <th>Số lượng sản phẩm</th>
                        <th>Giá cao nhất</th>
                        <th>Giá thấp nhất</th>
                        <th>Giá trung bình</th>
                    </tr>
                    <?php foreach ($listThongKe as $thongke) {
                        extract($thongke);

                        echo "
                            <tr>
                                <td>$ma_dm</td>
                                <td>$tendm</td>
                                <td>$countsp</td> 
                                <td>$maxprice</td> 
                                <td>$minprice</td> 
                                <td>$avgprice</td>                     
                            </tr>";
                    }
                    ?>
                </table>
            </div>
        <a class="m-3 btn btn-primary" href="index.php">Xem biểu đồ</a>
    </div>
    <hr>
</div>
<div class="row2">
    <div class="row2 font_title">
        <h4 class="text-danger">THỐNG KÊ BÌNH LUẬN THEO SẢN PHẨM</h4>
    </div>
    <div class="row2 form_content ">
        <div class="row2 mb10 formds_loai">
            <table class="table table-light">
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Lượt xem</th>
                    <th>Số lượng bình luận</th>
                </tr>
                <?php foreach ($listSanPham as $sanpham) {
                    extract($sanpham);

                    echo "
                            <tr>
                                <td>$id</td>
                                <td>$name</td>
                                <td>$price</td> 
                                <td>$luotXem</td> 
                                <td>$soBinhLuan</td>                    
                            </tr>";
                }
                ?>
            </table>
        </div>
    </div>
    <a class="m-3 btn btn-primary" href="index.php">Xem biểu đồ</a>
    <hr>
</div>

