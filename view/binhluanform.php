<?php
    session_start();
    include "../admin/model/pdo.php";
    include "../admin/model/binhluan.php";

    $idpro = $_REQUEST['idpro'];
    $dsbl = loadall_binhluan($idpro);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/css.css">
    <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
    <body>
        <div class="mb">
            <div class="box_title mt-3">BÌNH LUẬN</div>
                <div>
                    <div class="list-group">
                        <?php foreach ($dsbl as $bl) {
                            extract($bl);
                                echo '
                                <div class="list-group-item">
                                    <h5 class="mb-1">' . $user . '</h5>
                                    <p style="font-size: 18px" class="mb-1">' . $noidung . '</p>
                                    <p class="mb-1">Ngày:<i>' . $ngaybinhluan . '</i> </p>
                                </div>
                                ';
                            }
                        ?>
                    </div>
                </div>
            </div>
                <?php
                    if (isset($_SESSION['user'])) {
                        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
                            $noidung = $_POST['noidung'];
                            $idpro = $_POST['idpro'];
                            $user = $_SESSION['user']['user'];
                            $iduser = $_SESSION['user']['id'];
                            $ngaybinhluan = date('d-m-Y');
//                            H:i:s

                            insert_binhluan($noidung, $user,$iduser, $idpro, $ngaybinhluan);
                            header("Location: " . $_SERVER['HTTP_REFERER']);
                        }
                ?>
                    <div class="row">
                        <div class="col-4">
                            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                                <div class="mb-3">
                                    <textarea type="text" name="noidung" class="form-control" placeholder=" Nhập bình luận ở đây!" required></textarea> <br>
                                    <input class="btn btn-outline-success" type="submit" name="guibinhluan" value="Gửi bình luận">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <p class="text-lg-center alert text-danger">Vui lòng đăng nhập để bình luận</p>
            <?php } ?>
        </div>
    </body>
</html>