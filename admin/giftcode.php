<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: acc_admin.php');
    exit;
}

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: acc_admin.php');
    exit;
}

if (isset($_POST['submit'])) {
    require("../Config/Connect.php");

    $giftCode = $_POST['giftCode'];
    $limit_count = $_POST['limit_count'];
    $sql = "INSERT INTO giftcode (giftCode,limit_count) VALUES( '$giftCode','$limit_count')";
    $result = $conn->query($sql);
    // nếu thực hiện truy vấn thành công 
    if ($result === TRUE) {
        echo "Thêm giftcode thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị Giftcode</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include("header.php"); ?>

    <div class="container">
        <h2>Thêm Giftcode</h2>
        <form method="post" action="giftcode.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Code:</label>
                <input type="text" class="form-control" id="giftCode" name="giftCode" required>
                <label for="title" class="form-label">Limit count</label>

                <input type="number" class="form-control" name="limit_count" id="">
            </div>


            <button type="submit" class="btn btn-primary" name="submit">Thêm</button>
        </form>
        <br>


        <h2>Danh sách giftcode</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Gifcode Id</th>
                    <th scope="col">Gifcode</th>
                    <th scope="col">số lượng</th>
                    <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Kết nối đến cơ sở dữ liệu
                require("../Config/Connect.php");

                $sql = "SELECT * FROM giftcode";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['giftCodeId'] . "</td>";
                        echo "<td>" . $row['giftCode'] . "</td>";
                        echo "<td>" . $row['limit_count'] . "</td>";
                        echo "<td><a href='edit_giftcode.php?id=" . $row['giftCodeId'] . "'>Sửa</a> | <a href='delete_giftcode.php?id=" . $row['giftCodeId'] . "'>Xóa</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Không có gift code nào</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>