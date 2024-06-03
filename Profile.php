<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./Image/icon.png" type="image/x-icon">
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .header img {
        width: 100px;
        height: auto;
    }

    .header p {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin-top: 10px;
    }

    .profile {
        padding: 20px;
    }

    .profile h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .profile p {
        font-size: 16px;
        margin-bottom: 10px;
    }

    form {
        text-align: center;
    }

    input[type="submit"] {
        padding: 10px 20px;
        background-color: #f44336;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #da190b;
    }
    </style>
    <title>Thông tin tài khoản</title>
</head>

<body>
    <?php
    include("Config/header.php");
    ?>
    <div class="container">
        <div class="header">
            <img src="Image/logogarena.png" alt="Garena Logo">
            <p>Garena</p>
        </div>
        <div class="profile">
            <h2>Thông tin tài khoản</h2>
            <?php
            if (isset($_SESSION['username'])) {
                $userName = $_SESSION['username'];
                require("Config/Connect.php");
                $query = "SELECT * FROM users WHERE userName = '$userName'";
                $result =$conn->query($query);
                if ($result->num_rows>0) {
                    $row=$result->fetch_assoc();
                    echo'<p><strong>Tên đăng nhập:</strong>'. $row["userName"].'</p>';
                    echo'<p><strong>Email:</strong>'. $row["Email"].'</p>';
                }
          
            }
            ?>
            <form action="logout.php" method="post">

                <input type="submit" value="Đăng xuất">
            </form>
        </div>
    </div>
</body>

</html>