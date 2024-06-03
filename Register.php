<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Register.css">
    <link rel="icon" href="./Image/icon.png" type="image/x-icon">
    <title>Đăng kí</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="Image/logogarena.png">
            <p>Garena</p>
        </div>
        <div class="login">
            <form action="Register.php" method="post">
                <input type="text" name="userName" placeholder="Tên đăng nhập" required>
                <input type="password" name="passWord" placeholder="Mật khẩu" required>
                <input type="password" name="confirmPassword" placeholder="Nhập lại mật khẩu" required>
                <p id="message">Vui lòng nhập mật khẩu trùng nhau</p>
                <input type="email" name="Email" placeholder="Email" required class="input-email">
                <input type="submit" value="Đăng ký">
            </form>
        </div>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var passwordInput = document.getElementsByName("passWord")[0];
        var confirmPasswordInput = document.getElementsByName("confirmPassword")[0];
        var message = document.getElementById("message");

        function checkPasswordMatch() {
            if (passwordInput.value !== confirmPasswordInput.value) {
                message.style.display = "block";
            } else {
                message.style.display = "none";
            }
        }

        passwordInput.addEventListener("keyup", checkPasswordMatch);
        confirmPasswordInput.addEventListener("keyup", checkPasswordMatch);
    });
    </script>
</body>

</html>
<?php
require('config/connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['userName']) && isset($_POST['passWord']) && isset($_POST['Email'])) {
        $username = $_POST['userName'];
        $password = $_POST['passWord'];
        $Email = $_POST['Email'];
        $sql="select * from users where username = '$username' ";
        $kq=$conn->query($sql);
        if($kq->num_rows > 0) {
            echo"<script>alert('Tài Khoản đã tồn tại')</script>";
        }
        else{
        $query = "INSERT INTO users (userName, passWord,Email ) VALUES ('$username', '$password', '$Email')";
        $sql1 = mysqli_query($conn, $query);

        if ($sql1) {
            echo "<script>alert('Tạo tài khoản thành công')</script>";
            echo "<script>setTimeout(function() { window.location.href = 'index.php'; }, 200);</script>"; 
            exit();
        } else {
            echo "Lỗi: " . mysqli_error($conn);
        }
        
    }
}
}
$conn->close();
?>