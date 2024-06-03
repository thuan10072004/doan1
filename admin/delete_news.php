<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: acc_admin.php');
    exit;
}

if (!isset($_GET['id'])) {
    header('Location: Admin.php');
    exit;
}

require("../Config/Connect.php");

$news_id = $_GET['id'];

$sql = "DELETE FROM news WHERE news_id = $news_id";
if ($conn->query($sql) === TRUE) {
    echo "Xóa tin tức thành công";
    header("location: tin_tuc.php");

} else {
    echo "Lỗi: " . $conn->error;
}

$conn->close();
?>