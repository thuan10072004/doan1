<?php
session_start();
require("../Config/Connect.php");

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

    $news_id = $_POST['news_id'];
    $title = $_POST['title'];
    $news_category = $_POST['news_category'];

    // Kiểm tra và xử lý hình ảnh nếu có tải lên mới
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_tmp, "uploads/$image");

    // Cập nhật thông tin tin tức bao gồm cả hình ảnh
    $sql_update = "UPDATE news SET title = '$title', image = '$image', news_category = '$news_category' WHERE news_id = '$news_id'";
    $result = $conn->query($sql_update);

    if ($conn->query($sql_update) === TRUE) {
        header('Location: tin_tuc.php');
        exit();
    } else {
        echo "Lỗi: " . $sql_update . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa tin tức</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include("header.php"); ?>

    <div class="container">
        <h2>Sửa tin tức</h2>
        <form method="post" action="" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $news_id; ?>">
            <div class="mb-3">
                <label for="title" class="form-label">Tiêu đề:</label>
                <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $sql_select = "SELECT * FROM news WHERE news_id = $id";
                        $result = mysqli_query($conn, $sql_select);
                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            echo "<input name='news_id' type='hidden' value='" . $row['news_id'] . "'>";
                            echo "<div class='form-group'>";
                            echo "<label for='title'>Title</label>";
                            echo "<input type='text' class='form-control' id='title' name='title' value='" . $row['title'] . "' required>";
                            echo "</div>";

                            echo "<div class='form-group'>";
                            echo "<label for='image'>Current Image</label><br>";
                            echo "<img src='uploads/" . $row['image'] . "' width='100'><br>";
                            echo "<label for='image'>Change Image</label>";
                            echo "<input type='file' class='form-control' id='image' name='image'>";
                            echo "</div>";
                        }
                    } ?>
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
            <button type="submit" class="btn btn-primary" name="submit">Lưu</button>
        </form>
        <br>

    </div>
</body>

</html>