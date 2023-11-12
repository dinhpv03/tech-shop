<main class="catalog  mb ">
    <div class="boxleft">
        <div class=" mb">
            <?php
            extract($oneSp);
            echo ' <div class="box_title h5">' . $name . '</div>';
            ?>
            <div class="box_content ">
                <?php
                extract($oneSp);
                $hinh = $imgPath . $img;

                echo '
                            <div class="row">
                                 <div class="col-6 spct">
                                    <a><img class="img-fluid mx-auto" src="' . $hinh . '"/></a>
                                </div>
                                <div class="col-6">
                                     <p class="fw-bold">Tên sản phẩm: ' . $name . '</p>                              
                                    <p class="fw-bold">Giá: ' . $price . '$</p>                                 
                                    <p>Lượt xem: ' . $luotXem . '</p>
                                    <div style="font-size: 30px; cursor: pointer; color: yellow">
                                        <span class="rating" id="star1">&#9733;</span>
                                        <span class="rating" id="star2">&#9733;</span>
                                        <span class="rating" id="star3">&#9733;</span>
                                        <span class="rating" id="star4">&#9733;</span>
                                        <span class="rating" id="star5">&#9733;</span>
                                    </div>
                                       <b><p id="result"></p></b>
                                       <p>Mô tả: ' . $moTa . '</p>
                                       '
                ?>
                <form action=index.php?act=addtocart method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="" value="<?= $id ?>">
                    <input type="hidden" name="name" id="" value="<?= $name ?>">
                    <input type="hidden" name="img" id="" value="<?= $img ?>">
                    <input type="hidden" name="price" id="" value="<?= $price ?>">
                    <div class="thongtin mb-4">
                        <input class="btn btn-outline-dark" type="submit" name="addtocart" id="" value="THÊM VÀO GIỎ HÀNG">
                        <a href="#" class="btn btn-dark">Mua ngay</a>
                    </div>
                </form>
                <div class="justify-content-center">
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="mb">

    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#binhluan").load("view/binhluanform.php", {idpro: <?= $id ?>});
            });
        </script>
        <div id="binhluan">

        </div>

    <div class=" mb">
        <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
        <div class="box_content" style="text-decoration: none; color: black;">
            <?php
            foreach ($sp_cungloai as $cungloai) {
                extract($cungloai);
                $hinhPath = "./admin/upload/" . $img;
                $linksp = "index.php?act=sanphamct&idsp=" . $id;

                echo '
                            <div class="mb-4" style="text-decoration: none;">
                                <a href="' . $linksp . '"><img src="' . $hinhPath . '" alt="" width="50" height="50px"></a>
                                <a href="' . $linksp . '"> ' . $name . ' </a>
                             </div>
                                ';
            }
            ?>

        </div>
    </div>
    </div>

    <?php include "boxright.php" ?>
</main>