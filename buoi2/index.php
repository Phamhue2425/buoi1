<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - Buổi 2</title>
</head>
<body>
    <form action="index.php" method="post">
        <h1>Đăng nhập</h1>
        <div>
            <input type="text" name="username" placeholder="Tên đăng nhập">
        </div>
        <div>
            <input type="password" name="password" placeholder="Mật khẩu">
        </div>
        <div>
            <input type="submit" value="Đăng nhập">
        </div>

    </form>
    <?php
        if(isset($_POST['username']) && isset($_POST['password'])){
            $TenDangNhap = $_POST['username'];
            $MatKhau = $_POST['password'];
            //Nếu tên đăng nhập = admin
            //Mật khẩu 123 thì cho phép người dùng vào trang chủ
            if($TenDangNhap == 'admin' && $MatKhau == '123'){
                $_SESION["username"] = $TenDangNhap;
                header('location: trangchu.php');
            }
            else{
                echo "<p>Sai thông tin đăng nhập </p>";
            }
        }
        // echo $MatKhau;
    ?>
</body>
</html>