<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra thông tin đăng nhập
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Kiểm tra thông tin đăng nhập ở đây (ví dụ: kiểm tra trong cơ sở dữ liệu)
    if ($username === "a" && $password === "1") {
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("Location: rating.php"); // Chuyển hướng đến trang đánh giá
    } else {
        $login_error = "Thông tin đăng nhập không đúng.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>
<body>
</body>
<h2>Đăng nhập</h2>
<form method="post" action="">
    <label for="username">Tên đăng nhập:</label>
    <input type="text" name="username" id="username" required><br><br>

    <label for="password">Mật khẩu:</label>
    <input type="password" name="password" id="password" required><br><br>

    <input type="submit" value="Đăng nhập">
</form>
<?php if (isset($login_error)) { echo $login_error; } ?>

</body>
</html>
