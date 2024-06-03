<!DOCTYPE html>
<html>
<head>
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        .form-container {
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 500px; 
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<script>alert('Vui lòng vào Gmail để kích hoạt tài khoản');</script>";
}
?>

<div class="form-container">
    <form action="Forgot_password.php" method="post">
        <h1 style="color: red">Quên mật khẩu</h1>
        <h3>Nhập email của bạn để nhận mã xác nhận lấy lại mật khẩu</h3>
        <input type="email" name="userName" placeholder="Nhập email">
        <br><br>
        <input style="width:168px; height:30px" type="submit" value="Lấy lại mật khẩu">
    </form>
</div>

</body>
</html>
