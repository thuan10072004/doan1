<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo '<script>alert("Vui lòng đăng nhập để thực hiện chức năng này");</script>';
    echo '<script>window.location.href = "Login.php";</script>';
    exit;
}

include('Config/Connect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/giftcode.css">
    <link rel="icon" href="./Image/icon.png" type="image/x-icon">
    <title>GiftCode</title>
    <style>

    </style>
    <script>
    function showSuccessPopup(account, password, nick, skins) {
        document.getElementById('account').innerText = account;
        document.getElementById('password').innerText = password;
        document.getElementById('nick').innerText = nick;
        document.getElementById('skins').innerText = skins;
        document.getElementById('account_info').style.display = 'block';
        document.getElementById('password_info').style.display = 'block';
        document.getElementById('nick_info').style.display = 'block';
        document.getElementById('skins_info').style.display = 'block';
        document.getElementById('successPopup').style.display = 'flex';
    }
    </script>
</head>

<body>
    <div class="limitAge">
        <img src="Image/rating-18.jpg" alt="">
    </div>
    <nav class="navbar">
        <div class="logo">
            <a href="index.php"><img src="Image/logo-nav.png" alt="Logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="Tintuc.php">Tin tức</a></li>
            <li><a href="TanThu.php">Tân thủ</a></li>
            <li><a href="Giftcode.php">GiftCode</a></li>
            <?php
            if (isset($_SESSION['username'])) {
                echo ' <li><a href="Profile.php">Tài khoản</a></li>';
            } else {
                echo ' <li><a href="Login.php">Tài khoản</a></li>';
            }

            ?>
        </ul>
    </nav>
    <div class="wrapper">
        <div class="limitAge">
            <img src="Image/rating-18.jpg">
        </div>
        <div class="content">
            <div class="background-image">
                <img style="width: 100%;" src="Image/gifcode.png">
            </div>

            <form action="Giftcode.php" method="post" class="container">
                <input type="text" name="giftcode" class="input" placeholder="Vui lòng nhập GiftCode"><br><br>
                <button type="submit"><img src="Image/xacnhan.png"></button>
                <button style="margin-left: 100em;" type="submit">Nhận quà thành công</button>
            </form>
            <hr
                style="width: 80%;background-color: #b3a685;z-index: 1000;position: relative;margin: 0 auto;top: 2em;height: 1px; ">

            <footer>
                <div class="footer">
                    <img src="Image/logofooter.png">
                    <p style="margin-top: 3em;">CÔNG TY CỔ PHẦN GIẢI TRÍ VÀ THỂ THAO ĐIỆN TỬ VIỆT NAM
                        Giấy CNĐKKD số 0105301438, cấp lần đầu ngày 10/05/2011
                        Cơ quan cấp: Phòng Đăng ký kinh doanh- Sở Kế hoạch và đầu tư TP Hà Nội
                        Địa chỉ: Tầng 28, tòa nhà Trung tâm Lotte Hà Nội, 54 Liễu Giai, Phường Cống Vị, Quận Ba Đình,
                        Thành phố Hà Nội, Việt Nam
                        Điện thoại: 024 73053939</p>
                    <br>
                    <a href="https://www.garena.vn/terms">Điều khoản dịch vụ |</a><a
                        href="https://www.garena.vn/privacy"> Chính sách bảo mật</a><a
                        href="https://lienquan.garena.vn/tin-tuc/chinh-sach-giai-quyet-tranh-chap">| Chính sách giải
                        quyết tranh chấp</a>
                </div>
            </footer>
        </div>
    </div>
    <!-- Phần popup hiển thị thông tin quà tặng -->
    <div class="popup-overlay" id="successPopup">
        <div class="popup-content">
            <h2>Chúc mừng!</h2>
            <p>Bạn đã nhận quà thành công.</p>
            <!-- Hiển thị thông tin tài khoản -->
            <p id="account_info" style="display: none;">Tài khoản: <span id="account"></span></p>
            <p id="password_info" style="display: none;">Mật khẩu: <span id="password"></span></p>
            <p id="nick_info" style="display: none;">Nick rank: <span id="nick"></span></p>
            <p id="skins_info" style="display: none;">Số lượng skin: <span id="skins"></span></p>
            <?php
                if (isset($_POST['giftcode'])) {
                    $giftCode = $_POST['giftcode'];
                    // sử dụng placeholder ? để tránh lỗ hổng bảo mật SQL 
                    $query = "SELECT * FROM giftcode WHERE giftCode = ?";
                    $stmt = mysqli_prepare($conn, $query);
                    #Gán giá trị các tham số
                    mysqli_stmt_bind_param($stmt, "s", $giftCode);
                    // thực thi truy vấn
                    mysqli_stmt_execute($stmt);
                    // kết quả đc gán vào biến
                    $result = mysqli_stmt_get_result($stmt);
                    if ($result) {
                        // nếu truy vấn tồn tại và chỉ có 1 dl thì
                        if (mysqli_num_rows($result) == 1) {
                            $row = mysqli_fetch_assoc($result);
                            $limit_count = $row['limit_count'];
                            // nếu như số lượng giftcode còn lại > 0 thì thực thi 
                            if ($limit_count > 0) {
                                // Hiển thị phần thưởng
                                $account = generateRandomString();
                                $password = generateRandomString();
                                $nick = generateNick();
                                $skins = generateRandomNumber(0, 150);

                                // Giảm giá trị limit_count
                                $update_query = "UPDATE giftcode SET limit_count = limit_count - 1 WHERE giftCode = ?";
                                $update_stmt = mysqli_prepare($conn, $update_query);
                                mysqli_stmt_bind_param($update_stmt, "s", $giftCode);
                                mysqli_stmt_execute($update_stmt);



                                // Gọi hàm showSuccessPopup từ mã JavaScript
                                echo "<script>";
                                echo "showSuccessPopup('$account', '$password', '$nick', '$skins');";
                                echo "</script>";
                            } else {
                                echo "<script>alert('Giftcode này đã hết hạn sử dụng.');</script>";
                            }
                        } else {
                            echo "<script>alert('Giftcode không hợp lệ.');</script>";
                        }
                    } else {
                        echo "<script>alert('Đã xảy ra lỗi khi truy vấn cơ sở dữ liệu.');</script>";
                    }

                    mysqli_stmt_close($stmt);
                }
            $conn->close();

            // Các hàm tạo ngẫu nhiên
            function generateRandomString($length = 8)
            {
                // chứa tất cả các kí tự có thể chứa
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    // mỗi lần lặp 1 kí tự ngẫu nhiên từ $character bên trên dc chọn = cách dùng hàm rand
                    $randomString .= $characters[rand(0, strlen($characters) - 1)];
                }
                return $randomString;
            }

            function generateRandomNumber($min, $max)
            {
                return rand($min, $max);
            }

            function generateNick()
            {
                // khai báo mức rank 
                $ranks = array("Đồng", "Bạc", "Vàng", "Kim Cương", "Tinh Anh", "Cao Thủ", "Thách Đấu");
                // lấy ngẫu nheien trong mảng đó và trả về
                $randIndex = array_rand($ranks);
                $nick = $ranks[$randIndex];
                return $nick;
            }
            ?>
            <!-- Button đóng popup -->
            <button onclick="hideSuccessPopup()">Đóng</button>
        </div>
    </div>
    <!-- ơhần popup hiển thị thông báo lỗi -->
    <div class="popup-overlay" id="ErrorPopup">
        <div class="popup-content">
            <h2>Lỗi!!!</h2>
            <p>Mã nhận quà không hợp lệ.</p>
            <!-- Button đóng popup -->
            <button onclick="hideErrorPopup()">Đóng</button>
        </div>
    </div>

    <!-- Script JavaScript -->
    <script>
    // Ẩn popup thông tin quà tặng 
    function hideSuccessPopup() {
        document.getElementById('successPopup').style.display = 'none';
    }



    // Ẩn popup thông báo lỗi
    function hideErrorPopup() {
        document.getElementById('ErrorPopup').style.display = 'none';
    }
    </script>
</body>

</html>
```