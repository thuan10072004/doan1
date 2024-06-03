<?php
session_start();
require("../Config/Connect.php");

if (!isset($_SESSION['user'])) {
    header('Location: acc_admin.php');
    exit;
}

// Xử lý đăng xuất
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: acc_admin.php');
    exit;
}

if(isset($_POST['submit'])){
    $giftcode_id = $_POST['giftcode_id'];
    $giftcode = $_POST['giftcode'];
    $limit_count = $_POST['limit_count'];
    // cập nhật dữ liệu vào cơ sở dữ liệu
    $sql_update = "UPDATE giftcode SET giftCode='" . $giftcode . "', limit_count='" . $limit_count . "' WHERE giftCodeId='" . $giftcode_id . "'";

    if (mysqli_query($conn, $sql_update)) {
        header('Location: giftcode.php');
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Giftcode</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include("header.php"); ?>

    <div class="container">
        <h2>Sửa Giftcode</h2>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo $giftcode_id; ?>">
            <div class="mb-3">
                <label for="giftcode" class="form-label">Giftcode:</label>
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $sql_select = "SELECT * FROM giftcode WHERE giftCodeId=$id";
                    $result = mysqli_query($conn, $sql_select);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<input name='giftcode_id' type='hidden' value='" . $row['giftCodeId'] . "'> ";
                            echo "<input type='text' class='form-control' id='giftcode' name='giftcode' value='" . $row['giftCode'] . "' required>";
                            echo "<input type='text' class='form-control' id='limit_count' name='limit_count' value='" . $row['limit_count'] . "' required>";
                        }
                    }
                }
                ?>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Lưu</button>
        </form>
        <br>
    </div>
</body>

</html>