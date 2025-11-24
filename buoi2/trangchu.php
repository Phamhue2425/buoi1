<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        sesion_start();
        if(!isset($_SESSION["username"])){
            header('location: index.php');
        }
    ?>
    <h1>Trang chủ</h1>
    <?php
        echo "Xin chào " . $_SESSION["username"];
    ?>
</body>
</html>