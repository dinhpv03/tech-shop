<main class="catalog  mb ">
    <div class="boxleft">
        <div class="banner mb-4">
            <img id="banner" src="img/anh0.jpg" alt="">
            <button class="pre" onclick="pre()">&#10094;</button>
            <button class="next" onclick="next()">&#10095;</button>
        </div>
        <div>
            <div class="text-center h4">
                <p>SẢN PHẨM MỚI NHẤT</p>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($spNew as $sp) {
                extract($sp);
                $hinh = $imgPath . $img;
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                ?>
                <div class="col-3 mt-5">
                    <div class="box_items">
                        <div class="box_items_img">
                            <a href="<?php echo $linksp; ?>"><img src="<?php echo $hinh; ?>" alt="No images"></a>
                        </div>
                        <div>
                            <a class="item_name" href="<?php echo $linksp; ?>"><?php echo $name; ?></a>
                            <p class="price"><?php echo $price; ?>$</p>
                        </div>
                        <form action=index.php?act=addtocart method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="" value="<?=$id?>">
                            <input type="hidden" name="name" id="" value="<?=$name?>">
                            <input type="hidden" name="img" id="" value="<?=$img?>">
                            <input type="hidden" name="price" id="" value="<?=$price?>">
                            <div class="thongtin mb-4">
                                <input class="btn btn-outline-dark" type="submit" name="addtocart" id="" value="THÊM VÀO GIỎ">
                            </div>
                        </form>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

    </div>
    <?php
    include "boxright.php";
    ?>
</main>