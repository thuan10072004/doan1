<?php
    session_start();
  ?>
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
           echo' <li><a href="Profile.php">Tài khoản</a></li>';
          }
          else{
            echo' <li><a href="Login.php">Tài khoản</a></li>';
          }
         
           ?>
    </ul>
</nav>