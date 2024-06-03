<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./Image/icon.png" type="image/x-icon">
    <title>Trang chủ</title>
</head>

<body>
    <?php
      include("Config/header.php");
      ?>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="Image/slideshow1.png" style="width: 100%; height: 40em;" alt="">
        </div>

        <div class="mySlides fade">
            <img src="Image/sldieshow2.jpg" style="width: 100%; height: 40em;" alt="">
        </div>

        <div class="mySlides fade">
            <img src="Image/slideshow3.png" style="width: 100%; height: 40em;" alt="">
        </div>

        <div class="mySlides fade">
            <img src="Image/slideshow4.jpg" style="width: 100%; height: 40em;" alt="">
        </div>
    </div>
    <div class="download-buttons">
        <div class="button-container">
            <a href="https://play.google.com/store/apps/details?id=com.garena.game.kgvn&referrer=af_tranid%3DqDuJJB-_cC36rCmENtMBfA%26c%3Dobt_lp_and%26pid%3DOrganicA"
                class="download-button">
                <img src="Image/ggplay.png" style="height: 5em;">
            </a>
            <a href="https://apps.apple.com/vn/app/garena-li%C3%AAn-qu%C3%A2n-mobile/id1150288115?mt=8"
                class="download-button">
                <img src="Image/Appstore.png" style="height: 7.5em;margin-bottom: -1.3em ;margin-right: 1em;">
            </a>
        </div>
    </div>
    <div class="container">
        <div>
            <h3 class="header-item">Tin tức mới nhất</h3>
        </div>
        <div class="rectangle-container">
            <div class="rectangle">
                <img src="Image/new1.png">
                <p style="color: rgb(169, 169, 39);">Đấu trường danh vọng mùa xuân 2024</p>
            </div>
            <div class="rectangle">
                <img src="Image/new2.png">
                <p style="color: rgb(169, 169, 39);">Tổng kết giai đọan vòng bảng</p>
            </div>
        </div>

        <div id="tin-tuc-nho" class="rectangle-container">
            <div class="rectangle">
                <img src="Image/new3.png">
                <p style="color: rgb(169, 169, 39);">GIẢI ĐẤU LIÊN QUÂN MOBILE QUỐC TẾ</p>
            </div>
            <div class="rectangle">
                <img src="Image/new4.png">
                <p style="color: rgb(169, 169, 39);">ĐÓN THỐNG NHẤT,SĂN QUÀ CỰC CHẤT</p>
            </div>
            <div class="rectangle">
                <img src="Image/new5.jpg">
                <p style="color: rgb(169, 169, 39);">THÔNG BÁO QUY TRÌNH CẬP NHẬT</p>
            </div>
            <div class="rectangle">
                <img src="Image/new6.jpeg">
                <p style="color: rgb(169, 169, 39);">THÔNG BÁO XỬ LÝ PHÁT TUYỂN THỦ SGP</p>
            </div>
            <div style="margin-top: 18em;">
                <a href="Tintuc.php" style="color: rgb(169, 169, 39);text-decoration: none;font-size: 2em;">Xem
                    thêm>></a>
            </div>
        </div>
        <hr style="background-color: rgb(169, 169, 39);height: 5px;border: none;">
        <div>
            <div>
                <h3 class="header-item">Tướng miễn phí tuần</h3>
                <div class="image-container">
                    <img src="Image/tươngmienphi.png" alt="">
                    <div class="hexagon-grid">
                        <div class="hexagon"><img src="Image/tuong1.png"></div>
                        <div class="hexagon"><img src="Image/tuong2.png"></div>
                        <div class="hexagon"><img src="Image/tuong3.png"></div>
                        <div class="hexagon"><img src="Image/tuong4.png"></div>
                        <div class="hexagon"><img src="Image/tuong5.png"></div>
                        <div class="hexagon"><img src="Image/tuong6.png"></div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="background-color: rgb(169, 169, 39);height: 5px;border: none;">
        <div>
            <div>
                <div class="blockdown">
                    <img style="text-align: center;margin-top: 3em;" src="Image/requiredevice.png" alt="">
                    <h4 class="required-device">Yêu cầu thiết bị</h4>
                    <p class="paragraph">Lưu ý: Các thiết bị đời thấp hoặc có cấu hình thấp hơn Cấu hình tối thiểu dưới
                        đây vẫn có thể tải và chơi game, tuy nhiên có thể sẽ gặp tình trạng lag/giật/văng game do cấu
                        hình thiết bị không đạt yêu cầu.</p>
                    <div class="container-table">
                        <table class="table-left">
                            <thead>
                                <tr>
                                    <th>Android</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>YÊU CẦU THIẾT BỊ</p>
                                        <p>Cấu hình Android tối thiểu:</p>
                                        <p>- Chip: CPU 2.5GHz 4 Cores</p>
                                        <p>- RAM: 2GB</p>
                                        <p>- Phiên bản: Android 4.4 hoặc cao hơn</p>
                                        <p>- Dung lượng bộ nhớ trống: 2GB hoặc nhiều hơn</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table-right">
                            <thead>
                                <tr>
                                    <th>iOS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>YÊU CẦU THIẾT BỊ</p>
                                        <p>Cấu hình iOS tối thiểu:</p>
                                        <p>- iPhone 5S hoặc cao hơn</p>
                                        <p>- Phiên bản: iOS 8.0 hoặc cao hơn</p>
                                        <p>- Dung lượng bộ nhớ trống: 2GB hoặc nhiều hơn</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <hr style="z-index: 1000;position: relative;height: 0.2em;background-color: #ae903b;top: 2em;">
        <footer>
            <div class="footer">
                <img src="Image/logofooter.png">
                <hr style="width: 80%;background-color: #ae903b;z-index: 1000;position: relative;margin: 0 auto; ">
                <p style="margin-top: 3em;">CÔNG TY CỔ PHẦN GIẢI TRÍ VÀ THỂ THAO ĐIỆN TỬ VIỆT NAM
                    Giấy CNĐKKD số 0105301438, cấp lần đầu ngày 10/05/2011
                    Cơ quan cấp: Phòng Đăng ký kinh doanh- Sở Kế hoạch và đầu tư TP Hà Nội
                    Địa chỉ: Tầng 28, tòa nhà Trung tâm Lotte Hà Nội, 54 Liễu Giai, Phường Cống Vị, Quận Ba Đình,
                    Thành phố Hà Nội, Việt Nam
                    Điện thoại: 024 73053939</p>
                <br>
                <a href="https://www.garena.vn/terms">Điều khoản dịch vụ |</a><a href="https://www.garena.vn/privacy">
                    Chính sách bảo mật</a><a
                    href="https://lienquan.garena.vn/tin-tuc/chinh-sach-giai-quyet-tranh-chap">| Chính sách giải quyết
                    tranh chấp</a>
            </div>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="index.js"></script>
</body>

</html>