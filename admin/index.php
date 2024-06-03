<?php
session_start();

// Kiểm tra nếu chưa đăng nhập thì chuyển hướng đến trang đăng nhập
if (!isset($_SESSION['user'])) {
header('Location: acc_admin.php');
exit;
}

// Xử lý đăng xuất
if (isset($_POST['logout'])) {
session_destroy();
header('Location: acc_admin.php');
exit;
}

// Xử lý tạo mã code mới

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<?php include('header.php') ?>

<body>
    <h1 class="text-center">QUẢN TRỊ ADMIN</h1>
</body>

</html>