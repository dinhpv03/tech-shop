<main class="catalog  mb ">
    <div class="boxleft">
        <div class=" mb">
            <?php
            echo ' <div class="box_title h5">Sản phẩm '.$tendm.' '.$kyw.'</div>';
            ?>
            <div class="box_content ">
                <div class="row">
                    <?php
                    foreach ($dssp as $sp) {
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
        </div>
    </div>
    <?php include "boxright.php"?>
</main>