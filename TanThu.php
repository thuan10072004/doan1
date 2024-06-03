<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/Hocvien.css">
    <link rel="stylesheet" href="./css/tintuc.css">
    <link rel="icon" href="./Image/icon.png" type="image/x-icon">
    <title>Tân Thủ</title>
</head>

<body>
    <?php
      include("Config/header.php");
      ?>
    <div class="apphic">
        <img src="Image/hocvien1.png">
        <img src="Image/hocvien2.png">
        <img src="Image/hocvien3.jpg">
    </div>
    <div class="container1">
        <div class="button-wrapper">
            <button class="listbtn" onclick="scrollToSection('introduce')">Giới thiệu</button>
            <button class="listbtn" onclick="scrollToSection('guide')">Tướng </button>
            <button class="listbtn" onclick="scrollToSection('event')">Trang bi</button>
            <button class="listbtn" onclick="scrollToSection('tournament')">Bổ trợ</button>
            <button class="listbtn" onclick="scrollToSection('partnership')">Bản đồ</button>
        </div>
        <div class="section-wrap">
            <section id="introduce">
                <div class="rectangle-intro" style="margin-top: 5em;">
                    <img src="Image/videogioithieu.jpg">
                </div>
                <hr
                    style="background-color: rgb(133, 133, 84);height: 2px;border: none;width: 50%;margin: 0 auto;margin-bottom: 1em;">
                <div>
                    <div class="mySlides fade">
                        <h1>VOICE CHAT TIỆN DỤNG-DỄ DÀNG CHÁT NHANH</h1>
                        <p>Bạn đã ngán việc chơi game MOBA cần phối hợp nhưng đồng đội lại không hiểu ý mình? Đừng lo
                            bởi Liên Quân Mobile sẽ cung cấp hệ thống tùy biến chat nhanh cùng tính năng voice chat tích
                            hợp để người chơi có thể giao tiếp dễ dàng với những người đồng đội.</p>
                        <img src="Image/intro1.jpg" style="width:50%; height: 40em;margin: 0 auto;">
                    </div>

                    <div class="mySlides fade">
                        <h1>ĐỒ HỌA ĐỈNH CAO-ÂM THANH HOÀNH TRÁNG</h1>
                        <p>Với sự đầu tư vô cùng kỹ lưỡng, Liên Quân Mobile là một trong những tựa game trên di động có
                            đồ họa và âm thanh chất lượng nhất hiện nay. Người chơi sẽ được trải nghiệm những hình ảnh
                            sắc nét cùng âm thanh vô cùng sống động</p>
                        <img src="Image/intro2.jpg" style="width:50%; height: 40em;margin: 0 auto;">
                    </div>

                    <div class="mySlides fade">
                        <h1>GIAO TRANH LIÊN TỤC -SO TÀI KĨ NĂNG</h1>
                        <p>Là một trò chơi với tốc độ nhanh và tính tương tác cao, người chơi Liên Quân Mobile sẽ không
                            ngừng tham gia vào các tình huống hành động trên bản đồ và phối hợp với đồng đội để mang về
                            chiến thắng</p>
                        <img src="Image/intro3.jpg" style="width:50%; height: 40em;margin: 0 auto;">
                    </div>
                </div>
                <hr
                    style="background-color: rgb(133, 133, 84);height: 2px;border: none;width: 50%;margin: 0 auto;margin-top: 1em;">
                <div class="container-item">
                    <h1 style="margin-top: 1em;">CHẾ ĐỘ ĐA DẠNG THỎA SỨC CHIẾN ĐẤU</h1>
                    <img src="Image/intro6.jpg">
                </div>
                <hr
                    style="background-color: rgb(133, 133, 84);height: 2px;border: none;width: 70%;margin: 0 auto;margin-top: 1em;">
                <div class="container-item2">
                    <h1>CẠNH TRANH ĐẤU HẠNG THÁCH THỨC ĐỈNH CAO</h1>
                    <div class="listRank">
                        <div>
                            <img src="Image/Bacs.png">
                            <hr>
                            <h5>BẬC S</h5>
                        </div>
                        <div>
                            <img src="Image/bacA.png">
                            <hr>
                            <h5>BẬC A</h5>

                        </div>
                        <div>
                            <img src="Image/bacB.png">
                            <hr>
                            <h5>BÂC B</h5>
                        </div>
                        <div>
                            <img src="Image/bacc.png">
                            <hr>
                            <h5>BẬC C</h5>
                        </div>
                        <div>
                            <img src="Image/bacd.png">
                            <hr>
                            <h5>BẬC D</h5>
                        </div>
                        <div>
                            <img src="Image/bace.png">
                            <hr>
                            <h5>BẬC E</h5>
                        </div>
                    </div>
                </div>

            </section>
            <section id="guide">
                <input type="text" id="search" placeholder="Tìm kiếm tướng....">
                <ul class="guide-list">
                    <li><img src="Image/tuong1.png">
                        <h3>Thane</h3>
                    </li>
                    <li><img src="Image/tuong2.png">
                        <h3>Slimz</h3>
                    </li>
                    <li><img src="Image/tuong3.png">
                        <h3>Astrid</h3>
                    </li>
                    <li><img src="Image/tuong4.png">
                        <h3>Murad</h3>
                    </li>
                    <li><img src="Image/tuong5.png">
                        <h3>Azenka</h3>
                    </li>
                    <li><img src="Image/tuong6.png">
                        <h3>Xeniel</h3>
                    </li>
                </ul>
            </section>

            <section id="event">
                <input type="text" id="search2" placeholder="Tìm kiếm trang bị....">
                <ul class="guide-list1" style="margin-top: 2em; text-align: center;">
                    <li><img src="Image/chùy máu.png">
                        <h3>Chùy máu</h3>
                    </li>
                    <li><img src="Image/guom tạn the.png">
                        <h3>Gươm tận thế</h3>
                    </li>
                    <li><img src="Image/kiếm dài.png">
                        <h3>Kiếm dài</h3>
                    </li>
                    <li><img src="Image/gươm uriel.png">
                        <h3>Gươm Uriel</h3>
                    </li>
                    <li><img src="Image/thuong dau si.png">
                        <h3>Thương đấu sĩ</h3>
                    </li>
                    <li><img src="Image/quy kiem.png">
                        <h3>Quỷ kiếm</h3>
                    </li>
                </ul>
            </section>
            <section id="tournament">
                <ul class="guide-list1" style="margin-top: 2em; text-align: center;">
                    <li><img src="Image/ngọc do3.png">
                        <h3>Ngọc đỏ: Tăng máu</h3>
                    </li>
                    <li><img src="Image/ngọc đỏ2.png">
                        <h3>Ngọc đỏ:Tăng sát thương</h3>
                    </li>
                    <li><img src="Image/ngọc đỏ2.png">
                        <h3>Ngọc đỏ:Chí mạng</h3>
                    </li>
                    <li><img src="Image/ngoc tim 1.png">
                        <h3>Ngọc tím:Tăng sát thương phép</h3>
                    </li>
                    <li><img src="Image/ngọc tim  2.png">
                        <h3>Ngọc tím:Máu tối đa</h3>
                    </li>
                    <li><img src="Image/ngọc tim 3.png">
                        <h3>Ngọc tím:Hồi máu</h3>
                    </li>
                    <li><img src="Image/ngoc canh1.png">
                        <h3>Ngọc xanh:Tăng sát thương phép</h3>
                    </li>
                    <li><img src="Image/ngọcxanh22.png">
                        <h3>Ngọc xanh:Máu tối đa</h3>
                    </li>
                    <li><img src="Image/ngọcxanh3.png">
                        <h3>Ngọc xanh:Hồi máu</h3>
                    </li>
                </ul>
            </section>
            <section id="partnership">
                <p>Liên Quân Mobile có rất nhiều chế độ chơi với những bản đồ vô cùng đa dạng, giúp bạn chiến đấu không
                    biết chán. Bên cạnh bản đồ 5v5, người chơi có thể thỏa sức cùng bạn bè trải nghiệm các bản đồ tùy
                    biến khác như 5v5 Độc Đạo, 3v3, 1v1, và những chế độ chơi đặc biệt liên tục được cập nhật.</p>
                <div>
                    <h1>CÁC CHẾ ĐỘ CHƠI</h1>
                    <img src="Image/chedochoi.jpg">
                    <div>
                        <h1>MỤC TIÊU</h1>
                        <img src="Image/mụctiêu.jpg">
                    </div>
                    <div>
                        <h1>ĐI ĐƯỜNG</h1>
                        <img src="Image/điđường.jpg">
                    </div>
            </section>
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
        <script>
        function scrollToSection(sectionId) {
            document.querySelectorAll("section").forEach((section) => {
                section.style.display = "none";
                section.style.marginTop = "5em"

            });
            document.getElementById(sectionId).style.display = "block";
        }
        scrollToSection("introduce");
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        $(document).ready(function() {
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = $(".mySlides");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1;
                }
                slides[slideIndex - 1].style.display = "block";
                setTimeout(showSlides, 5000);
            }
        });
        $(document).ready(function() {
            $('.guide-list li').addClass('show');

            $('#search').on('input', function() {
                var searchText = $(this).val().toLowerCase().trim();
                $('.guide-list li').each(function() {
                    var text = $(this).text().toLowerCase();
                    if (text.includes(searchText)) {
                        $(this).addClass('show');
                    } else {
                        $(this).removeClass('show');
                    }
                });
            });
        });
        $(document).ready(function() {
            $('.guide-list1 li').addClass('show');

            $('#search2').on('input', function() {
                var searchText = $(this).val().toLowerCase().trim();
                $('.guide-list1 li').each(function() {
                    var text = $(this).text().toLowerCase();
                    if (text.includes(searchText)) {
                        $(this).addClass('show');
                    } else {
                        $(this).removeClass('show');
                    }
                });
            });
        });
        </script>
</body>

</html>