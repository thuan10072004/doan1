<?php
require('../Config/Connect.php');
session_start();
if (isset($_POST["txt_username"]) && isset($_POST["txt_password"])) {
    $username = $_POST["txt_username"];
    $password = $_POST["txt_password"];
    $sql = "SELECT * FROM `tbl_admin` where username = '" . $username . "'  and password = '" . $password . "'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION["user"] = $username;
        header("location: index.php");
        exit();
    } else {
        echo "Sai tên đăng nhập hoặc mật khẩu";
    }

    
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: acc_admin.php');
    exit;
}
?>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 style="text-align: center;">Trang đăng nhập</h1>
        <form action="acc_admin.php" method="post">
            Nhập vào tên đăng nhập:
            <input class="form-control" type="text" name="txt_username" id="">
            Nhập vào mật khẩu:
            <input class="form-control" type="password" name="txt_password" id="">
            <br>
            <input type="submit" value="Đăng nhập" name="login" class="btn btn-primary">
        </form>
    </div>
</body>

</html>