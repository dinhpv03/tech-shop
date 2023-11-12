<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="./css/style/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/css.css">
    <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

</head>
<body>
<div class="boxcenter">
    <header>
        <div class="row mb header">
            <h1>SIÊU THỊ TRỰC TUYẾN</h1>
        </div>
        <div class="mb-4">
            <nav class="row navbar navbar-expand-lg navbar-light bg-dark">
                <div class="col-5 text-center">
                    <a class="text-light navbar-brand" href="index.php">Trang chủ</a>
                    <a class="text-light navbar-brand" href="index.php?act=gioi_thieu">Giới thiệu</a>
                    <a class="text-light navbar-brand" href="index.php?act=lien_he">Liên hệ</a>
                    <a class="text-light navbar-brand" href="index.php?act=hoi_dap">Hỏi đáp</a>
                    <a class="text-light navbar-brand" href="index.php?act=gop_y">Góp ý</a>
                </div>
                <div class="col-2">

                </div>
                <form class="d-flex col-4 mt-1 mr20 " action="index.php?act=sanpham" method="post">
                    <input class="form-control mr20" type="text" name="kyw" placeholder="Tìm kiếm sản phẩm" aria-label="Search" required>
                    <input class="btn btn-outline-success " name="timkiem" value="Tìm kiếm" type="submit">
                </form>
                <div class="col-1 text-center">
                    <?php
                    if(isset($_SESSION['user'])) {
                        echo '<a class="mr20" href="index.php?act=thongtintk"><i class="fa-solid fa-user fa-2xl" style="color: #ffffff;"></i></a>';
                    } else {
                        echo '<a class="mr20" href="index.php?act=dangky"><i class="fa-solid fa-user fa-2xl" style="color: #ffffff;"></i></a>';
                    }
                    ?>
                    <a href="index.php?act=cartView" class="ml-4"><i class="fa-solid fa-cart-shopping fa-2xl" style="color: #fafcff;"></i></a>
                </div>
    </header>