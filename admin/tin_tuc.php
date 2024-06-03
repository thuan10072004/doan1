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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    require("../Config/Connect.php");

    $title = $_POST['title'];
    $news_category = $_POST['news_category'];

    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_tmp, "uploads/$image");

    $sql = "INSERT INTO news (title, image, news_category) VALUES ('$title', '$image', '$news_category')";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "Thêm tin tức thành công";
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
    <title>Quản trị tin tức</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include("header.php"); ?>

    <div class="container">
        <h2>Thêm tin tức</h2>
        <form method="post" action="tin_tuc.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Tiêu đề:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Ảnh:</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>
            <div class="mb-3">
                <label for="news_category" class="form-label">Danh mục tin tức:</label>
                <select class="form-select" id="news_category" name="news_category">
                    <option value="all">Tất cả</option>
                    <option value="guide">Cẩm nang</option>
                    <option value="event">Sự kiện</option>
                    <option value="tournament">Giải đấu</option>
                    <option value="partnership">Hợp tác</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Thêm tin tức</button>
        </form>
        <br>
        <form method="post" action="Admin.php">
            <button type="submit" class="btn btn-danger" name="logout">Đăng xuất</button>
        </form>

        <h2>Danh sách tin tức</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Danh mục</th>
                    <th scope="col">Hành động</th>
                </tr>
            </thead>
            <h3>Tìm kiếm tin tức</h3>
            <input type="text" id="search-input" placeholder="Nhập từ khóa tìm kiếm...">

            <tbody id="search-results">
                <?php
                require("../Config/Connect.php");

                if (isset($_POST['query'])) {
                    $query = $conn->real_escape_string($_POST['query']);
                    $sql = "SELECT * FROM news WHERE title LIKE '%$query%' OR news_category LIKE '%$query%' LIMIT 10";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            // Xuất dữ liệu tin tức mà không bao gồm cấu trúc HTML
                            echo "<tr>";
                            echo "<td>" . $row['news_id'] . "</td>";
                            echo "<td>" . htmlspecialchars($row['title']) . "</td>";
                            echo "<td><img src='uploads/" . $row['image'] . "' width='100'></td>";
                            echo "<td>" . htmlspecialchars($row['news_category']) . "</td>";
                            echo "<td><a href='edit_news.php?id=" . $row['news_id'] . "'>Sửa</a> | <a href='delete_news.php?id=" . $row['news_id'] . "'>Xóa</a></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo '<tr><td colspan="5">Không tìm thấy kết quả.</td></tr>';
                    }
                    exit(); // Kết thúc kịch bản PHP và ngăn không cho mã HTML khác được xuất ra
                }
                    $sql = "SELECT * FROM news";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['news_id'] . "</td>";
                        echo "<td>" . $row['title'] . "</td>";
                        echo "<td><img src='uploads/" . $row['image'] . "' width='100'></td>";
                        echo "<td>" . $row['news_category'] . "</td>";
                        echo "<td><a href='edit_news.php?id=" . $row['news_id'] . "'>Sửa</a> | <a href='delete_news.php?id=" . $row['news_id'] . "'>Xóa</a></td>";
                        echo "</tr>";
                    }
                $conn->close();
                ?>
            </tbody>

        </table>
    </div>
    <script src="search.js"></script>

</body>

</html>