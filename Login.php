<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Taikhoan.css">
    <link rel="icon" href="./Image/icon.png" type="image/x-icon">
    <title>Tài khoản</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="Image/logogarena.png">
            <p>Garena</p>
        </div>
        <div class="login">
            <form action="Login.php" method="post">
                <input type="text" name="userName" placeholder="Tên đăng nhập">
                <input type="password" name="passWord" placeholder="Mật khẩu">
                <p id="message">Vui lòng nhập mật khẩu đúng</p>
                <a href="Forgot_password.php">Quên mật khẩu</a>
                <input type="submit" value="Đăng nhập">
                <button><a href="Register.php">Tạo tài khoản</a></button>
            </form>


        </div>

    </div>
</body>

</html>
<?php
require('config/connect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['userName']) && isset($_POST['passWord'])) {
        $username = $_POST['userName'];
        $password = $_POST['passWord'];
        $query = "SELECT * FROM users WHERE username = ? AND password = ?";
        $stmt = mysqli_prepare($conn, $query);

        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) == 1) {
            session_start();
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $username;
            echo "<script>window.open('index.php','_self')</script>";
            exit();
        } else {
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    document.getElementById('message').style.display = 'block';
                });
            </script>";
        }
        
        mysqli_stmt_close($stmt);
    }
    $conn->close();
}
?>